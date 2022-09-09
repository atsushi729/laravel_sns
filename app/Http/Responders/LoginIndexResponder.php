<?php

namespace App\Http\Responders;

class LoginIndexResponder
{
    public function respond()
    {
        return view('auth.login');
    }
}
