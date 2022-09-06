<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Responders\HomeResponder;

class HomeController extends Controller
{
    protected $homeResponder;

    public function __construct(HomeResponder $homeResponder)
    {
        $this->homeResponder = $homeResponder;
    }

    public function __invoke()
    {
        return $this->homeResponder->show();
    }
}
