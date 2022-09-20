<?php

namespace App\Http\Responders\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexResponder
{
    public function show()
    {
        return view('dashboard');
    }
}

