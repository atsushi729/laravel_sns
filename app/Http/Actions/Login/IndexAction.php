<?php

namespace App\Http\Actions\Login;

use App\Http\Controllers\Controller;
use App\Http\Responders\Login\IndexResponder;

class IndexAction extends Controller
{
    private $responder;

    public function __construct(IndexResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->respond();
    }
}
