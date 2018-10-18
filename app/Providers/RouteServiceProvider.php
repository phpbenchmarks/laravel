<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function map()
    {
        Route::middleware('web')
            ->namespace('PhpBenchmarksLaravel\Http\Controllers')
            ->group(__DIR__ . '/../../vendor/phpbenchmarks/laravel-common/Http/routes.php');
    }
}
