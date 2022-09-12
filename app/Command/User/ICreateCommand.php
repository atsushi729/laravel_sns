<?php

declare(strict_types=1);

namespace App\Command\User;

use App\Models\User;

interface ICreateCommand {

    public function getUserId(): ?string;
    public function getName(): ?string;
    public function getEmail(): ?string;
    public function getPassword(): ?string;
    public function getOperator(): User;

}
