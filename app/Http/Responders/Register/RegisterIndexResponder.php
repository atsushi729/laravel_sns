<?php

namespace App\Http\Responders\Register;

class RegisterIndexResponder
{
    public function handle()
    {
        return view('auth.register');
    }
}
