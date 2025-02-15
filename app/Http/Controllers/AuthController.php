<?php

namespace App\Http\Controllers;

use App\Adapters\User\UserLoginRequestAdapter;
use App\Adapters\User\UserRequestAdapter;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Services\Auth\AuthServiceInterface;
use App\Services\User\UserServiceInterface;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(
        private UserServiceInterface $userService,
        private AuthServiceInterface $authService,
    ) {}

    /**
     * Registrar um novo usuário.
     * @param RegisterRequest $request
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = new  UserResource(
            $this->userService->create(new UserRequestAdapter($request))
        );

        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

    /**
     * Logar o usuário e gerar um token.
     * @param LoginRequest $request
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $authData = $this->authService->authenticate(new UserLoginRequestAdapter($request));

        if (!$authData) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'message' => 'Login successful',
            'token' => $authData['token'],
            'user' => $authData['user']
        ], 200);
    }
}
