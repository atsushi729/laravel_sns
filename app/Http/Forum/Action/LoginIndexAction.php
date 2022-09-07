<?php

namespace App\Http\Forum\Action;

use App\Http\Controllers\Controller;
use App\Http\Forum\Responders\LoginIndexResponder;

class LoginIndexAction extends Controller
{
    private $responder;

    public function __construct(LoginIndexResponder $responder)
    {
        $this->responder = $responder;
        $this->middleware(['guest']);
    }

    public function __invoke()
    {
        return $this->responder->respond();
    }
}
