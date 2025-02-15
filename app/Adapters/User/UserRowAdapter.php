<?php

namespace App\Adapters\User;

use App\DTOs\User\UserUpdateDTO;
use App\Models\User;
use App\Traits\RowAdapterTrait;

class UserRowAdapter extends UserUpdateDTO
{
    use RowAdapterTrait;

    public function __construct(
        private User $model,
    ) {
        parent::__construct(
            id: $this->model->id,
            name: $this->model->name,
            email: $this->model->email,
            password: $this->model->password,
        );
    }
}
