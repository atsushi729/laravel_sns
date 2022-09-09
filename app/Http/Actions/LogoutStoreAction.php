<?php

namespace App\Http\Actions;

use App\Usecase\LogoutUsecase;

class LogoutStoreAction
{
    private $usecase;

    public function __construct(LogoutUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke()
    {
        return $this->usecase->logout();
    }
}
