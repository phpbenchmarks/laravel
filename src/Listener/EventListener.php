<?php

namespace Overload\Listener;

use Overload\Event\BenchmarkSmallOverload;

class EventListener {


	public function __construct() {

	}

	public function handle(BenchmarkSmallOverload $event ) {
		echo $event->name;
	}

}