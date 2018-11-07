<?php

namespace App\Http\Controllers;
use App\Mail\Welcome;
use App\User;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store()
    {
        $user = User::find(10);
        \Mail::to($user)->send(new Welcome);
        return back()->with('message', "Message sent successfully");
    }
}
