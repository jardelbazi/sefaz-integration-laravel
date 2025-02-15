<?php

namespace App\Services\User;

use App\DTOs\User\UserDTO;
use App\DTOs\User\UserUpdateDTO;
use App\Repositories\User\UserRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;

class UserService implements UserServiceInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
    ) {}

    /**
     * {@inheritdoc}
     * @throws Exception
     */
    public function create(UserDTO $data): UserUpdateDTO
    {
        DB::beginTransaction();

        try {
            $user = $this->userRepository->create($data);
            DB::commit();
            return $user;
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception('Falha ao inserir' . $e->getMessage());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOneById(int $id): UserUpdateDTO
    {
        return $this->userRepository->getOneById($id);
    }
}
