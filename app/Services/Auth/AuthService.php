<?php

namespace App\Services\Auth;

use App\DTOs\User\UserDTO;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function authenticate(UserDTO $data): ?array
    {
        if (!Auth::attempt(['email' => $data->getEmail(), 'password' => $data->getPassword()])) {
            return null;
        }

        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }
}
