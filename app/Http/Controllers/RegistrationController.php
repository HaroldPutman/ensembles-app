<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Called when registration payment is complete.
     * @param Request $request The request with these values:
     *  - studentId - The student
     *  - courseId - The course being registered
     *  - transactionId - The verified payment
     * @return \Illuminate\Contracts\View\View A transaction success page
     */
    public function thankyou(Request $request) {

        $student = Student::find($request->input('studentId'));
        if (!$student) {
            abort(404);
        }
        $course = Course::find($request->input('courseId'));
        if (!$course) {
            abort(404);
        }
        $student->courses()->attach($course->id, ['payment' => $request->input('transactionId')]);
        return view('web.public.thankyou');
    }

    public function register($classId) {
        $course = Course::find($classId);
        if (!$course) {
            abort(404);
        }
        return view("web.public.register", compact('course'));
    }

    /**
     * Handles form submission for registration.
     * @param Request $request The request contains information about
     *   - student
     *   - contact
     *   - course
     * @return \Illuminate\Contracts\View\View A view with the PayPal control
     */
    public function create(Request $request) {
        $student = Student::firstOrNew([
            'firstname' => $request->input('student_firstname'),
            'lastname' => $request->input('student_lastname'),
            'birthdate' => $request->date('birthdate'),
        ]);
        $student->note = $request->input('student_note'); // Should this not go with registration?
        $contact = Contact::firstOrNew([
            'firstname' => $request->input('firstname') ?: $request->input('student_firstname'),
            'lastname' => $request->input('lastname') ?: $request->input('student_lastname'),
            'email' => $request->input('email'),
        ]);
        $contact->phone = $request->input('phone');
        $contact->address = $request->input('address');
        $contact->city = $request->input('city');
        $contact->state = $request->input('state');
        $contact->zip = $request->input('zip');
        $contact->save();
        $contact->students()->save($student);
        $course = Course::find($request->input('courseId'));
        if (!$course) {
            abort(404);
        }
        $request->session()->put('student', $student);
        $request->session()->put('course', $course);
        return view('web.public.payment', [
            'student' => $student,
            'course' => $course,
            'clientId' => env('PAYPAL_CLIENT_ID'),
        ]);
    }

    public function paymentRetry(Request $request) {

        $failure = $request->has('errorMessage') ?
            'There was an error processing your transaction. Please try again, or use a different payment method.' :
            null;
        $student = $request->session()->get('student', function () use($request) {
            Student::find($request->input('studentId'));
        });
        if (!$student) {
            abort(404);
        }
        $course = $request->session()->get('course', function () use($request) {
            return Course::find($request->input('courseId'));
        });
        if (!$course) {
            abort(404);
        }
        return view('web.public.payment', [
            'failure' => $failure,
            'student' => $student,
            'course' => $course,
            'clientId' => env('PAYPAL_CLIENT_ID'),
        ]);
    }
}