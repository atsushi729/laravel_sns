<?php

namespace App\Http\Responders\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardResponder
{
    public function show()
    {
        return view('dashboard');
    }
}

