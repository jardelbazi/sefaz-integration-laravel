<?php

namespace App\Services\User;

use App\DTOs\User\UserDTO;
use App\DTOs\User\UserUpdateDTO;

interface UserServiceInterface
{
    /**
     * @param UserDTO $data
     * @return UserUpdateDTO
     */
    public function create(UserDTO $data): UserUpdateDTO;

    /**
     * @param int $id
     * @return UserUpdateDTO
     */
    public function getOneById(int $id): UserUpdateDTO;
}
