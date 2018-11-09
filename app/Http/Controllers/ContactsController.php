<?php

namespace App\Http\Controllers;
use App\Mail\Contact;
use App\User;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'body'=>'required'
        ]);

        \Mail::to('vivekbgawande@gmail.com')->send(new Contact(request(['name','email','body'])));
        return back()->with('message', "Message sent successfully");
    }
}
