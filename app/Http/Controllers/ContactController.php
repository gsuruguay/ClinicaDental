<?php

namespace App\Http\Controllers;

use App\Rules\Rut;
use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index () {
        return view('contact');
    }

    public function send(request $request) {
        $request->validate([
            'name' => 'required|max:60',
            'email' => 'required|email',
            'rut' => ['required', new Rut],
            'description' => 'required'
        ]);
        Mail::to('tecno.jimmy@gmail.com')->send(new ContactMailable($request));
        redirect()->route('contact.index')->with('info', 'Mensaje enviado');
    }
}
