<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NFeServiceProvider extends ServiceProvider
{
    public $bindings = [
        \App\Services\NFe\NFeServiceInterface::class => \App\Services\NFe\NFeService::class,
    ];
}
