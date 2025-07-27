<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Configuration;
use Brevo\Client\Model\SendSmtpEmail;
use GuzzleHttp\Client;

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
            // Configure Brevo API
            $config = Configuration::getDefaultConfiguration()
                ->setApiKey('api-key', config('mail.mailers.smtp.password'));

            $apiInstance = new TransactionalEmailsApi(
                new Client(),
                $config
            );

            // Generate HTML content from the email template
            $htmlContent = View::make('email.contact', compact('inquiry'))->render();

            // Create email object
            $sendSmtpEmail = new SendSmtpEmail();
            $sendSmtpEmail->setTo([['email' => $emailTo]]);
            $sendSmtpEmail->setSubject("Ensembles Web Contact Request [{$inquiry['name']}]");
            $sendSmtpEmail->setHtmlContent($htmlContent);
            $sendSmtpEmail->setSender([
                'email' => config('mail.from.address'),
                'name' => config('mail.from.name')
            ]);
            $sendSmtpEmail->setReplyTo([
                'email' => $inquiry['email'],
                'name' => $inquiry['name']
            ]);

            $result = $apiInstance->sendTransacEmail($sendSmtpEmail);

            Log::info('Email sent successfully via Brevo API', [
                'messageId' => $result->getMessageId(),
                'to' => $emailTo,
                'subject' => $sendSmtpEmail->getSubject()
            ]);

            return back()->with('success', __('Your message has been sent.'));

        } catch(\Exception $e) {
            Log::error("Exception sending contact form via Brevo API: {$e->getMessage()}");
            return back()->with('error', "There was a problem sending your message. Instead, try sending an email to <a href=\"mailto:$emailTo\">$emailTo</a>.");
        }
    }
}
