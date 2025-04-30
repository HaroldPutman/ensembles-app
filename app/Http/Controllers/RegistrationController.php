<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Student;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Called when registration payment is complete.
     * @param Student $student The student
     * @param Course $course The course being registered
     * @param string $payment The verified payment transaction ID from PayPal or a Pseudo ID.
     */
    private function registerStudent($student, $course, $payment)
    {
        $already = Registration::where([
            'student_id' => $student->id,
            'course_id' => $course->id
        ])->first();
        if ($already) {
            return view('web.public.already', [
                'student' => $student,
                'course' => $course,
            ]);
        }
        $answer = session()->get('answer');
        $student->courses()->attach($course->id, ['payment' => $payment, 'answer' => $answer]);
        // Mark the course full if it is.
        if ($course->size_max && $course->students()->count() >= $course->size_max) {
            $course->status = 'full';
            $course->save();
        }
        return view('web.public.thankyou')->with('transactionId', $payment);
    }

    /**
     * Called when registration payment is complete.
     * @param Request $request The request with these values:
     *  - studentId - The student
     *  - courseId - The course being registered
     *  - transactionId - The verified payment
     * @return \Illuminate\Contracts\View\View A transaction success page
     */
    public function thankyou(Request $request)
    {

        $student = Student::find($request->input('studentId'));
        if (!$student) {
            abort(404);
        }
        $course = Course::find($request->input('courseId'));
        if (!$course) {
            abort(404);
        }
        return $this->registerStudent($student, $course, $request->input('transactionId'));
    }

    public function register($classId)
    {
        $course = Course::find($classId);
        if (!$course || !in_array($course->status, ['open', 'locked'])) {
            abort(404);
        }
        // If the course has an alternate registration URL, redirect to it.
        if ($course->alt_url) {
            return redirect($course->alt_url);
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
    public function create(Request $request)
    {
        $validated = $request->validate([
            'student_firstname' => 'required',
            'student_lastname' => 'required',
            'birthdate' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|numeric',
            'agree' => 'required',
        ]);
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
        $ageMin = $course->age_min ?: 0;
        $ageMax = $course->age_max ?: 99;
        // Adjust the age range to allow students to be +/- 1 year on the first day of class.
        $ageMinAdjusted = $ageMin > 2 ? $ageMin - 1 : $ageMin;
        $ageMaxAdjusted = $ageMax < 99 ? $ageMax + 1 : $ageMax;
        $request->validate([
            'age' => 'required|numeric|min:' . $ageMinAdjusted . '|max:' . $ageMaxAdjusted,
        ], [
            'age.min' => 'The student must be at least ' . $ageMin . ' years old on the first day of class.',
            'age.max' => 'The student must be no more than ' . $ageMax . ' years old on the first day of class.',
        ]);
        $already = Registration::where([
            'student_id' => $student->id,
            'course_id' => $course->id
        ])->first();
        if ($already) {
            return view('web.public.already', [
                'student' => $student,
                'course' => $course,
            ]);
        }
        // Test for full class. This should be an edge case.
        $count = $course->students()->count();
        if ($course->size_max && $count >= $course->size_max) {
            return view('web.public.full', [
                'student' => $student,
                'course' => $course,
            ]);
        }
        $request->session()->put([
            'student' => $student,
            'course' => $course,
            'answer' => $request->input('answer')
        ]);
        return $course->donation ?
            view('web.public.donation', [
                'student' => $student,
                'course' => $course,
            ]) :
            view('web.public.payment', [
                'student' => $student,
                'course' => $course,
                'amount' => $course->price,
                'clientId' => config('paypal.clientId'),
            ]);
    }

    public function donate(Request $request)
    {
        $student = $request->session()->get('student', function () use ($request) {
            return Student::find($request->input('studentId'));
        });
        if (!$student) {
            \Log::error('Student not found in session or by ID', [
                'studentId' => $request->input('studentId'),
                'session' => $request->session()->all()
            ]);
            abort(404);
        }
        $course = $request->session()->get('course', function () use ($request) {
            return Course::find($request->input('courseId'));
        });
        if (!$course) {
            \Log::error('Course not found in session or by ID', [
                'courseId' => $request->input('courseId'),
                'session' => $request->session()->all()
            ]);
            abort(404);
        }
        $willDonate = $request->input('will-donate');
        $amount = preg_replace('/[^\d.]/', '', $request->input('amount')) ?: 0;
        if ($willDonate == 'yes' && $amount > 0) {
            return view('web.public.payment', [
                'student' => $student,
                'course' => $course,
                'amount' => $amount,
                'clientId' => config('paypal.clientId'),
            ]);
        }
        return $this->registerStudent($student, $course, 'DONATION $0');
    }

    public function paymentRetry(Request $request)
    {

        $failure = $request->has('errorMessage') ?
            'We weren’t able to process your payment. Check all the details are correct and try again or try a different payment method.' :
            null;
        $student = $request->session()->get('student', function () use ($request) {
           return Student::find($request->input('studentId'));
        });
        if (!$student) {
            abort(404);
        }
        $course = $request->session()->get('course', function () use ($request) {
            return Course::find($request->input('courseId'));
        });
        if (!$course) {
            abort(404);
        }
        return view('web.public.payment', [
            'failure' => $failure,
            'student' => $student,
            'course' => $course,
            'clientId' => config('paypal.clientId'),
        ]);
    }
}
