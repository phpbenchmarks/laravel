<?php

namespace Overload\Http;


use Illuminate\Routing\Controller as BaseController;
use Overload\Event\BenchmarkSmallOverload;
use App;

class EmptyController extends BaseController {

	public function index($name = 'Eddy') {
		
		event(new BenchmarkSmallOverload);
		
		echo '<br />';

		echo trans('overload::smallOverload.translation1', ['index' => 3]);

		echo '<br />';

		return sprintf('Hello %s ! with locale: %s', $name, App::getLocale());
	}
}