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
        try {
            Mail::to(env('ENSEMBLES_CONTACT'))->send(new ContactRequest($inquiry));
            return back()->with('success', __('Your message has been sent.'));
        } catch(\Exception $e) {
            Log::error("Exception {$e->getMessage()}");
            $email = env('ENSEMBLES_CONTACT');
            return back()->with('error', "There was a problem sending your message. Instead, try sending an email to <a href=\"mailto:$email\">$email</a>.");
        }
    }

}
