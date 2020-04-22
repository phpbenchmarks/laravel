<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\DefineLang;
use App\Transformer\RestApiTransformer;

class RestApiProvider extends ServiceProvider
{
    public function boot()
    {
        app('events')->listen(DefineLang::class, function (DefineLang $defineLang) {
            app()->setLocale($defineLang->getLang());
        });
    }

    /** @return void */
    public function register()
    {
        $this->app->singleton('phpbenchmark.rest_api_transformer', function () {
            return new RestApiTransformer();
        });
    }
}
