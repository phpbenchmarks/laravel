<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use PhpBenchmarksRestData\Service;
use App\Events\DefineLang;
use App\Transformer\RestApiTransformer;

class RestApiController extends BaseController

{
    public function rest()
    {
        event(new DefineLang());

        return response()->json(
            app(RestApiTransformer::class)->usersToArray(
                Service::getUsers()
            )
        );
    }
}
