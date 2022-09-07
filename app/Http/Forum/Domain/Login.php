<?php

namespace App\Http\Forum\Domain;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;

class Login extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->validate($request, [
            'email' => 'required|email|',
            'password' => 'required|'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect()->route('dashboard');
    }
}
