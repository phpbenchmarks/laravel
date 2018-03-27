<?php

namespace Overload;
use Illuminate\Foundation\Application;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

	
	protected $commands = [
        'Overload\Command\Fixtures'
    ];

	public function __construct( Application $app ) {
		$this->app = $app;
	}

	public function register() {
		
		$this->app->bind('empty-service', function() {
            return new \Overload\Service\EmptyService;
        });

        $this->app->bind('change-language', function() { 
        	return new \Overload\Middleware\ChangeLanguage($this->app); 
        });

        $this->commands($this->commands);

	}

	public function boot() {
	
		$this->loadRoutesFrom(__DIR__.'/routes/routes.php');
		$this->loadTranslationsFrom(__DIR__.'/lang','overload');
		$this->loadMigrationsFrom(__DIR__.'/Migrations');
		$this->loadViewsFrom(__DIR__.'/views', 'overload');

		
	}

}