<?php

namespace App\Usecase\Login;

use App\Http\Payload;
use Illuminate\Support\Facades\Auth;

use App\Enums\CompanyContractStatus;
use App\Services\Api\Sso\Company\GetCompanyClient;
use App\Services\Api\Sso\LoginInitClient;

class LoginUsecase
{
    public function run(string $email, string $password, bool $remember)
    {
        try {
            return $this->login($email, $password, $remember);
        } catch (\Exception $e) {
            return (new Payload())->setStatus(Payload::FAILED);
        }
    }

    public function login(string $email, string $password, bool $remember)
    {
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return (new Payload())->setStatus(Payload::SUCCESS);
        } else {
            return (new Payload())->setStatus(Payload::FAILED);
        }
    }
}
