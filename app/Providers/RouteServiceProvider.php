<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';

    public function map()
    {
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::group(
            ['middleware' => 'web', 'namespace' => $this->namespace],
            function () {
                require __DIR__ . '/../../vendor/phpbenchmarks/laravel-common/Http/routes.php';
            }
        );
    }
}
