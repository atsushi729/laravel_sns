<?php

namespace App\Http\Actions\Login;

use \App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Usecase\Login\LoginUsecase;

class StoreAction extends Controller
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

