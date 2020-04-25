<?php

return [
    'name'            => 'PHP Benchmarks',
    'env'             => 'production',
    'debug'           => false,
    'url'             => 'http://localhost',
    'asset_url'       => null,
    'timezone'        => 'UTC',
    'locale'          => 'en',
    'fallback_locale' => 'en',
    'faker_locale'    => 'en_US',
    'key'             => null,
    'cipher'          => 'AES-256-CBC',
    'providers'       => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\RouteServiceProvider::class,
        App\Providers\RestApiProvider::class,

    ],
];
