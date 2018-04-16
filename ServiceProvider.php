<?php

namespace SmallOverload;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
	public function register()
    {
        $this
            ->registerEmptyServices()
            ->registerChangeLanguage();
	}

	public function boot()
    {
		$this->loadRoutesFrom(__DIR__ . '/Routes/routes.php');
		$this->loadTranslationsFrom(__DIR__ . '/Lang', 'SmallOverload');
		$this->loadViewsFrom(__DIR__ . '/Views', 'SmallOverload');
	}

	/** @return $this */
	protected function registerChangeLanguage()
    {
        $this->app->bind('change-language', function() {
            return new Middleware\ChangeLanguage($this->app);
        });

        return $this;
    }

    protected function registerEmptyServices()
    {
        for ($i = 1; $i <= 100; $i++) {
            $class = 'Service\\EmptyService' . $i;
            $this->app->bind('phpbenchmarks.service' . $i, function() use ($class) {
                return new $class();
            });
        }

        return $this;
    }
}
