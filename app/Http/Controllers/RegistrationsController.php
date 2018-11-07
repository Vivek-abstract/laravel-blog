<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Mail\Welcome;

class RegistrationsController extends Controller
{

    public function __construct() {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registrations.create');
    }

    public function store()
    {
        // Check if valid
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        // Create user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        // Sign in
        auth()->login($user);

        session()->flash('message','Logged in successfully');

        \Mail::to($user)->send(new Welcome);

        // Redirect back
        return redirect()->home();

    }
}
