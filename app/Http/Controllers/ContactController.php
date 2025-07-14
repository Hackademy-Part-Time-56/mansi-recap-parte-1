<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form()
    {
        return view('contacts.form');
    }

    public function send(Request $request)
    {
        Mail::to('francesco@email.it')->send(new ContactMail($request->all()));
        return redirect()->route('pages.homepage')->with('success', 'Email inviata con successo!');
    }
}
