<?php

namespace App\Http\Responders\Login;

class IndexResponder
{
    public function respond()
    {
        return view('auth.login');
    }
}
