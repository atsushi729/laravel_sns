<?php

declare(strict_types=1);

namespace App\Command\User;

class CreateCommand
{
    private string $name;
    private string $username;
    private ?string $email;
    private string $password;

    public function __construct(
        string $name,
        string $username,
        ?string $email,
        string $password
    ) {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
