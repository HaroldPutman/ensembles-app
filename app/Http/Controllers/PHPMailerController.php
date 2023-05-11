<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller {

    public function contactUs() {
        return view("contact-us");
    }


    public function createLead(Request $request) {
        Log::debug('ENTER: createLead');
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');                  // encryption - ssl/tls
            $mail->Port = env('MAIL_PORT');                          // port - 587/465
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress(env('ENSEMBLES_CONTACT'));
//            $mail->addCC($request->emailCc);
//            $mail->addBCC($request->emailBcc);

            $mail->addReplyTo($request->email, $request->name);

            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = 'Ensembles Web Inquiry';
            $mail->Body    = <<<HTML
            <table>
                <tr>
                    <td>From:</td>
                    <td> $request->name &lt;$request->email&gt;</td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td>$request->message</td>
                </tr>
            </table>
            HTML;
            $mail->AltBody = "from: $request->name <$request->email>\nmessage: $request->message";

            if( !$mail->send() ) {
                Log::error('Failed to send');
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }

            else {
                Log::error('Success!!');
                return back()->with('success', 'Your message has been sent.');
            }

        } catch (Exception $e) {
            Log::error("Exception {$e->getMessage()}");
            return back()->with('error','There was a problem sending your message. Try again later.');
        }
    }
}
