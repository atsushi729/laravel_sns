<?php

namespace App\Usecase\Logout;

class LogoutUsecase
{
    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
