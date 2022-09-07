<?php

namespace App\Http\Forum\Responders;

class LoginIndexResponder
{
    public function respond()
    {
        return view('auth.login');
    }
}
