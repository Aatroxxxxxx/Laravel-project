<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();

        // Set the sender email dynamically
        $senderEmail = $data['email'];

        // Set the receiver email to your own email address
        $receiverEmail = 'tai.lung250899@gmail.com';

        // Send email
        Mail::send('emails.contact', $data, function ($message) use ($data, $senderEmail, $receiverEmail) {
            $message->to($receiverEmail)
                    ->subject($data['subject'])
                    ->replyTo($senderEmail);
        });

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
