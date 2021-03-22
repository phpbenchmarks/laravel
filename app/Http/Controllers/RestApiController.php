<?php

namespace App\Http\Controllers;

use App\Events\DefineLang;
use PhpBenchmarksRestData\Service;
use Illuminate\Routing\Controller as BaseController;

class RestApiController extends BaseController
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
