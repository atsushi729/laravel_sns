<?php

namespace App\Http\Actions;

use \App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use \App\Http\Responders\RegisterIndexResponder;

class RegisterIndexAction extends Controller
{
    private $responder;

    public function __construct(RegisterIndexResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->handle();
    }
}
