<?php

namespace App\Http\Actions\Logout;

use App\Usecase\Logout\LogoutUsecase;

class StoreAction
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
