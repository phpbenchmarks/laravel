<?php

namespace App\Http\Controllers;

use App\Events\DefineLang;
use PhpBenchmarksRestData\Service;
use App\Http\Middleware\SetContentTypeMiddleware;

class RestApiController extends Controller
{
    public function __construct()
    {
        $this->middleware([SetContentTypeMiddleware::class]);
    }

    public function rest()
    {
        event(new DefineLang());

        return json_encode(app('phpbenchmark.rest_api_transformer')->usersToArray(
            Service::getUsers()
        ));
    }
}
