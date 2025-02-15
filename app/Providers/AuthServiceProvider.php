<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public $bindings = [
        \App\Services\Auth\AuthServiceInterface::class => \App\Services\Auth\AuthService::class,
    ];
}
