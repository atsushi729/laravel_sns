<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validate user data using email and password
        $this->validate($request, [
            'email' => 'required|email|',
            'password' => 'required|'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }

        // redirect to dashboard page.
        return redirect()->route('dashboard');
    }
}
