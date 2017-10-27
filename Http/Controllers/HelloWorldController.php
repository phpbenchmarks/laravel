<?php

namespace PhpBenchmarksLaravel\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    public function helloWorld()
    {
        return 'Hello World !';
    }
}
