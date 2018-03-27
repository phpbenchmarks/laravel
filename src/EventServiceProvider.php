<?php 

namespace Overload;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
            'Overload\Event\BenchmarkSmallOverload' => [
                    'Overload\Listener\EventListener',
            ],
    ];

}