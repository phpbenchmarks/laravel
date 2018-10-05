<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function map(Router $router)
    {
        $router->group(
            ['namespace' => $this->namespace],
            function () {
                require __DIR__ . '/../../vendor/phpbenchmarks/laravel-common/Http/routes.php';
            }
        );
    }
}
