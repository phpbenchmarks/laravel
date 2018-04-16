<?php

namespace SmallOverload\Middleware;

use Closure;
use Illuminate\Foundation\Application;

class ChangeLanguage
{
    /** @var Application */
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function handle($request, Closure $next)
    {
        $locales = ['fr_FR', 'en_GB', 'aa_BB'];
        $this->app->setLocale($locales[rand(0, 2)]);

        return $next($request);
    }
}
