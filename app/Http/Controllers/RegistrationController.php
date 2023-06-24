<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function thankyou($transactionId) {
        return view('web.public.thankyou');
    }

    public function register($classId) {
        $course = Course::find($classId);
        if (!$course) {
            abort(404);
        }
        return view("web.public.register", compact('course'));
    }

    public function create(Request $request) {
        $student = new Student([
            'firstname' => $request->input('student_firstname'),
            'lastname' => $request->input('student_lastname'),
            'birthdate' => $request->date('birthdate'),
            'note' => $request->input('student_note'),
            ]);
        $contact = new Contact([
            'firstname' => $request->input('firstname') ?: $request->input('student_firstname'),
            'lastname' => $request->input('lastname') ?: $request->input('student_lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
        ]);
        $contact->save();
        $contact->students()->save($student);
        // Don't attach until payment
        $student->courses()->attach($request->input('courseId'));
        return view('web.public.payment', [
            'studentId' => $student->id,
            'courseId' => $request->input('courseId'),
            'contact' => $contact,
            'clientId' => env('PAYPAL_CLIENT_ID'),
        ]);
    }
}
