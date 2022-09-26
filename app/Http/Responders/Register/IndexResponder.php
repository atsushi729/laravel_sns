<?php

namespace App\Http\Responders\Register;

class IndexResponder
{
    public function handle()
    {
        return view('auth.register');
    }
}
