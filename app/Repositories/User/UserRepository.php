<?php

namespace App\Repositories\User;

use App\Adapters\User\UserRowAdapter;
use App\DTOs\User\{UserDTO, UserUpdateDTO};
use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(
        User $model
    ) {
        parent::__construct(model: $model);
    }

    /**
     * {@inheritdoc}
     */
    public function create(UserDTO $data): UserUpdateDTO
    {
        return UserRowAdapter::of(
            $this->model->create($data->toArray())
        );
    }

    /**
     * {@inheritdoc}
     * @throws ModelNotFoundException
     */
    public function getOneById(int $id): UserUpdateDTO
    {
        $user = $this->model->findOrFail($id);
        return $user;
    }
}
