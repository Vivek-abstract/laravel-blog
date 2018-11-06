<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
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

        // Redirect back
        return redirect()->home();

    }
}
