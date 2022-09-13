<?php

declare(strict_types=1);

namespace App\Command\User;

interface ICreateCommand {

    public function getName(): string;
    public function getUsername(): string;
    public function getEmail(): string;
    public function getPassword(): string;
}
