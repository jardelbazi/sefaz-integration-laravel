<?php

namespace App\DTOs\User;

use Illuminate\Contracts\Support\Arrayable;

abstract class UserDTO implements Arrayable
{
    public function __construct(
        protected string $email,
        protected ?string $password,
        protected ?string $name = null,
    ) {}

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'password' => $this->getPassword(),
            'email' => $this->getEmail(),
        ];
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
}
