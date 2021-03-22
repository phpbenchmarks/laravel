<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HelloWorldController extends BaseController
{
    public function helloWorld()
    {
        return 'Hello World !';
    }
}
