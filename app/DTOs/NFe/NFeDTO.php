<?php

namespace App\DTOs\NFe;

use Illuminate\Contracts\Support\Arrayable;

abstract class NFeDTO implements Arrayable
{
    public function __construct(
        protected string $keyAccess,
    ) {}

    public function toArray(): array
    {
        return [
            'keyAccess' => $this->getKeyAccess(),
        ];
    }

    public function getKeyAccess(): ?string
    {
        return $this->keyAccess;
    }
}
