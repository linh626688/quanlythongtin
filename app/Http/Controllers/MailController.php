<?php

namespace App\Http\Controllers;

use Mail;
use Request;

class MailController extends Controller
{
    public function getMail()
    {
        return view('mail.mail');
    }
    public function postMail(Request $request)
    {
        $data = ['hoten' => Request::input('name'), 'tinnhan' => Request::input('message')];
        Mail::send('mail.input', $data, function ($message) {
            $message->from('linh626688@gmail.com', 'linh');
            $message->to('reddevils626688@gmail.com', 'reddevils')->subject("Tilte Email");
        });
        echo "<script>
			alert('Complete Sent Email');
			window.location='" . url('send-mail') . "'
        </script>";

    }
}
