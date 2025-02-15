<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    /**
     * @param Model $model
     */
    public function __construct(
        protected Model $model
    ) {}
}
