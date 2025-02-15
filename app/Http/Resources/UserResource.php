<?php

namespace App\Http\Resources;

use App\DTOs\User\UserUpdateDTO;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /** @var UserUpdateDTO */
        $user = $this->resource;
        return $user->toArray();
    }
}
