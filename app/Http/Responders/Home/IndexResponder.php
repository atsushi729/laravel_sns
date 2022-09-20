<?php

namespace App\Http\Responders\Home;

class IndexResponder
{
    public function show()
    {
        return view('home');
    }
}

