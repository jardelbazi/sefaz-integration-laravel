<?php

namespace App\DTOs\User;

use App\DTOs\UpdateDTOInterface;
use App\Traits\UpdateDTOTrait;

abstract class UserUpdateDTO extends UserDTO implements UpdateDTOInterface
{
    use UpdateDTOTrait;

    public function __construct(
        protected int $id,
        string $email,
        ?string $name,
        ?string $password,
    ) {
        parent::__construct(
            email: $email,
            name: $name,
            password: $password,
        );
    }
}
