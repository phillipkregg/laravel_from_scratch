<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show() {
        return view('contact/show');
    }

    public function store() {
        request()->validate(['email' => 'required|email']);

        // Mail::raw('It works!', function ($message) {
        //     //$message->from('john@johndoe.com', 'John Doe');
        //     $message->sender('john@johndoe.com', 'John Doe');
        //     $message->to(request('email'));
        //     $message->subject('Howdy!');

        // });

        // Mail::raw('it works!', function ($message) {
        //     $message->to(request('email'))
        //         ->subject('Sup bitch?');
        // });

        Mail::to(request('email'))
            ->send(new ContactMe('eBikes'));

        return redirect('/contact')
            ->with('message', 'Email sent successfully!');

    }
}
