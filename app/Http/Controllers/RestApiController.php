<?php

namespace App\Http\Controllers;

use App\Events\DefineLang;
use PhpBenchmarksRestData\Service;

class RestApiController extends Controller
{
    public function rest()
    {
        event(new DefineLang());

        return response()->json(
            app('phpbenchmark.rest_api_transformer')->usersToArray(
                Service::getUsers()
            )
        );
    }
}
