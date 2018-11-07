<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Invalid credentails',
            ]);
        }

        session()->flash('message','Logged in successfully');

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        session()->flash('message','Logged out');

        return redirect()->home();
    }
}
