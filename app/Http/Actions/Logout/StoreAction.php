<?php

namespace App\Http\Actions\Logout;

use App\Http\Responders\Logout\StoreResponder;
use App\Usecase\Logout\LogoutUsecase;

class StoreAction
{
    private $usecase;

    private $responder;

    public function __construct(LogoutUsecase $usecase, StoreResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->handle($this->usecase->logout());
    }
}
