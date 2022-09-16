<?php

namespace App\Usecase\Logout;

use App\Http\Payload;

class LogoutUsecase
{
    public function logout()
    {
        try {
            auth()->logout();
            return (new Payload())->setStatus(Payload::SUCCESS);
        } catch (\Exception $e) {
            return (new Payload())->setStatus(Payload::FAILED);
        }
    }
}
