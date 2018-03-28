<?php

namespace Overload\Sevice;

class EmptyService {

	protected $available = false;

	public function __construct() {
		$this->available = true;
	}
}