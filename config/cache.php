<?php

use Illuminate\Support\Str;

return [
    'default' => 'file',

    'stores' => [
        'file' => [
            'driver' => 'file',
            'path'   => storage_path('framework/cache/data'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing a RAM based store such as APC or Memcached, there might
    | be other applications utilizing the same cache. So, we'll specify a
    | value to get prefixed to all our keys so we can avoid collisions.
    |
    */

    'prefix' => Str::slug('PHP Benchmarks', '_') . '_cache',

];
