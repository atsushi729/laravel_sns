<?php

namespace App\Http\Actions\Register;

use \App\Http\Controllers\Controller;
use \App\Http\Responders\RegisterIndexResponder;

class IndexAction extends Controller
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
