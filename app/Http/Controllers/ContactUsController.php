<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequest;

class ContactUsController extends Controller {

    public function contactUs($context = 'general') {
        return view("web.public.contact-us", compact('context'));
    }


    public function createLead(Request $request) {
        $inquiry = [
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message,
            'context' => $request->context
        ];
        $emailTo = config('ensembles.contact.email');
        try {
            Mail::to($emailTo)->send(new ContactRequest($inquiry));
            return back()->with('success', __('Your message has been sent.'));
        } catch(\Exception $e) {
            Log::error("Exception {$e->getMessage()}");
            return back()->with('error', "There was a problem sending your message. Instead, try sending an email to <a href=\"mailto:$emailTo\">$emailTo</a>.");
        }
    }

}
