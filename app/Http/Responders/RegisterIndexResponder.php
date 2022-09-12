<?php

namespace App\Http\Responders;

class RegisterIndexResponder
{
    public function handle()
    {
        return view('auth.register');
    }
}
