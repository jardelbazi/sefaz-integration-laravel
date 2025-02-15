<?php

namespace App\Adapters\User;

use App\DTOs\User\UserDTO;
use Illuminate\Http\Request;

class UserRequestAdapter extends UserDTO
{
    public function __construct(
        private Request $request,
    ) {
        parent::__construct(
            name: $this->request->input('name'),
            email: $this->request->input('email'),
            password: $this->request->input('password'),
        );
    }
}
