<?php

namespace App\Adapters\User;

use App\DTOs\User\UserDTO;
use Illuminate\Http\Request;

class UserLoginRequestAdapter extends UserDTO
{
    public function __construct(
        private Request $request,
    ) {
        parent::__construct(
            email: $this->request->input('email'),
            password: $this->request->input('password'),
        );
    }
}
