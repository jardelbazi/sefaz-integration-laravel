<?php

namespace App\DTOs\NFe;

use App\DTOs\UpdateDTOInterface;
use App\Traits\UpdateDTOTrait;

abstract class NFeUpdateDTO extends NFeDTO implements UpdateDTOInterface
{
    use UpdateDTOTrait;

    public function __construct(
        protected int $id,
        string $keyAccess,
    ) {
        parent::__construct(
            keyAccess: $keyAccess,
        );
    }
}
