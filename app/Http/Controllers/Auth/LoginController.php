<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // if user is already login, then redirect to dashboard.
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    // it redirect to login page, then input information will be used at store function(below).
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

        // remember method will create new token to remember user information.
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }

        // redirect to dashboard page.
        return redirect()->route('dashboard');
    }
}
