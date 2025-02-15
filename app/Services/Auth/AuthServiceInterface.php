<?php

namespace App\Services\Auth;

use App\DTOs\User\UserDTO;

interface AuthServiceInterface
{
    /**
     * @param UserDTO $data
     * @return array|null
     */
    public function authenticate(UserDTO $data): ?array;
}
