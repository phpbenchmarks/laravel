<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Transformer\RestApiTransformer;
use App\Events\DefineLang;

class RestApiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app('events')->listen(DefineLang::class, function (DefineLang $defineLang) {
            app()->setLocale($defineLang->getLang());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(RestApiTransformer::class, function () {
            return new RestApiTransformer();
        });
    }
}
