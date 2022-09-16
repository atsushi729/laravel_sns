<?php

namespace App\Http\Actions\Login;

use \App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Usecase\Login\LoginUsecase;
use App\Http\Responders\Login\StoreResponder;

class StoreAction extends Controller
{
    private $usecase;

    private $responder;

    public function __construct(LoginUsecase $usecase, StoreResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $remember = (bool) $request->get('remember');

        return $this->responder->handle($this->usecase->run($email, $password, $remember));
    }
}

