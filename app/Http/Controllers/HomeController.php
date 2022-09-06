<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Responders\HomeResponder;

class HomeController extends Controller
{
    private $responder;

    public function __construct(HomeResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->show();
    }
}
