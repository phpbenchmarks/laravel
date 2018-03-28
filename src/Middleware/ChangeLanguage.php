<?php

namespace Overload\Middleware;

use Closure;
use Illuminate\Foundation\Application;

class ChangeLanguage {

	const fr_FR = 1;
	const en_GB = 2;
	const en = 3;

	private $app;

	public function __construct( Application $app ) {
		$this->app = $app;
	}

	public function handle( $request, Closure $next ) {

		$rand = rand( self::fr_FR , self::en );

		
		switch( $rand ) {
			
			case self::fr_FR;

				$this->app->setLocale('fr_FR');

			break;

			case self::en_GB;

				$this->app->setLocale('en_GB');

			break;

			case self::en:

				$this->app->setLocale('en');

			break;

			default: 
				throw new LogicException(sprintf('Language with code %s is not available', $rand));
			break;
		}

		return $next($request);
	}

}