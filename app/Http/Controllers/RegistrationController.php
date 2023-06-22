<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register($classId) {
        return view("web.public.register", compact('classId'));
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
/*            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'), */
        ]);
        $contact->save();
        $contact->students()->save($student);
        return 'DoNE';
    }
}
