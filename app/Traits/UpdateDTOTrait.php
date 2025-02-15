<?php

namespace App\Traits;

trait UpdateDTOTrait
{
    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        $array = array_merge(['id' => $this->getId()], parent::toArray());
        return $array;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
