<?php

namespace App\Http\Responders\Login;

class LoginIndexResponder
{
    public function respond()
    {
        return view('auth.login');
    }
}
