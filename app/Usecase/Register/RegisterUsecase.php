<?php

namespace App\Usecase\Register;

use App\Command\User\CreateCommand;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterUsecase
{
    public function run(CreateCommand $command)
    {
        try {
            User::create([
                'username' => $command->getUsername(),
                'name' => $command->getName(),
                'email' => $command->getEmail(),
                'password' => Hash::make($command->getPassword()),
            ]);

            auth()->attempt([
                'email' => $command->getEmail(),
                'password' => $command->getPassword(),
            ]);

            return redirect()->intended('dashboard');

        } catch(\Exception $e) {
            return redirect()->route('home');
        }
    }
}
