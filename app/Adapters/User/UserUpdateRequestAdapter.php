<?php

namespace App\Adapters\User;

use App\DTOs\User\UserUpdateDTO;
use Illuminate\Http\Request;

class UserUpdateRequestAdapter extends UserUpdateDTO
{
    public function __construct(
        private Request $request,
    ) {
        parent::__construct(
            id: $this->request->route('id'),
            name: $this->request->input('name'),
            email: $this->request->input('email'),
            password: $this->request->input('password'),
        );
    }
}
