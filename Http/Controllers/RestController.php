<?php

namespace PhpBenchmarksLaravel\Http\Controllers;

use App\Http\Controllers\Controller;
use PhpBenchmarksLaravel\Events\DefineLang;
use PhpBenchmarksRestData\Service;

class RestController extends Controller
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
