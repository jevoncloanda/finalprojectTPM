<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        );

        Mail::to('kelompok6tpm@gmail.com')->send(new SendMail($data));

        return redirect('/');
    }
}
