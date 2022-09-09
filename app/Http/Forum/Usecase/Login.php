<?php

namespace App\Http\Forum\Usecase;

use Illuminate\Support\Facades\Auth;

use App\Enums\CompanyContractStatus;
use App\Services\Api\Sso\Company\GetCompanyClient;
use App\Services\Api\Sso\LoginInitClient;


class Login
{
    public function run(string $email, string $password, bool $remember)
    {
        try {
            return $this->login($email, $password, $remember);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function login(string $email, string $password, bool $remember)
    {
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->route('dashboard',);
        }
        return redirect()->route('dashboard');
    }
}
