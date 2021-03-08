<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show() {
        return view('contact/show');
    }

    public function store() {
        request()->validate(['email' => 'required|email']);

        Mail::raw('It works!', function ($message) {
            //$message->from('john@johndoe.com', 'John Doe');
            $message->sender('john@johndoe.com', 'John Doe');
            $message->to(request('email'));
            $message->subject('Howdy!');

        });

        return redirect('/contact')
            ->with('message', 'Email sent successfully!');

    }
}
