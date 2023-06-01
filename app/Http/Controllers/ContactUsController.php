<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequest;

class ContactUsController extends Controller {

    public function contactUs() {
        return view("contact-us");
    }


    public function createLead(Request $request) {
        $inquiry = [
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message,
            'context' => 'general'
        ];
        Mail::to(env('ENSEMBLES_CONTACT'))->send(new ContactRequest($inquiry));
    }
}
