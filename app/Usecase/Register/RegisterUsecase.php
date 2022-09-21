<?php

namespace App\Usecase\Register;

use App\Command\User\CreateCommand;
use App\Http\Payload;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class RegisterUsecase
{
    public function run(CreateCommand $command)
    {
        try {
            DB::beginTransaction();
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
            DB::commit();

        } catch(\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return (new Payload())->setStatus(Payload::FAILED);
        }
        return (new Payload())->setStatus(Payload::CREATED);
    }
}
