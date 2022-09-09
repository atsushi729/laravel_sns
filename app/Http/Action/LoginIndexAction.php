<?php

namespace App\Http\Action;

use App\Http\Controllers\Controller;
use App\Http\Responders\LoginIndexResponder;

class LoginIndexAction extends Controller
{
    private $responder;

    public function __construct(LoginIndexResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->respond();
    }
}
