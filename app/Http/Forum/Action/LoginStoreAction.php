<?php

namespace App\Http\Forum\Action;

use \App\Http\Controllers\Controller;
use App\Http\Forum\Usecase\Login;
use App\Http\Requests\LoginRequest;

class LoginStoreAction extends Controller
{
    private $usecase;

    public function __construct(Login $usecase)
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

