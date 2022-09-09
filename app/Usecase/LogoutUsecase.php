<?php

namespace App\Usecase;

class LogoutUsecase
{
    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
