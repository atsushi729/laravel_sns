<?php

namespace App\Http\Action;

use \App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Usecase\LoginUsecase;

class LoginStoreAction extends Controller
{
    private $usecase;

    public function __construct(LoginUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $remember = (bool) $request->get('remember');

        return $this->usecase->run($email, $password, $remember);
    }
}

