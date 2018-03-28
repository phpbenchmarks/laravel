<?php

namespace Overload\Service;

use Overload\Validator\ValidatorInvalidArgumentException;

class Validator {

	public function __construct( $entity, $rules = [], $messages = []) {

		$this->entity = $entity;
		$this->rules = $rules;
		$this->messages = $messages;
		$this->validator = app()->make('validator');
	
	}

	public function validate() {

		$validator = $this->validator->make($this->getInput(), $this->rules, $this->messages);
        if ($validator->fails()) {
            $exception = new ValidatorInvalidArgumentException();
            
            
            $exception
                ->setMessage('This is invalid')
                ->setErrors($validator->errors())
                ->setInput($this->getInput());
                
            
            throw $exception;
        }
	}

	protected function getInput() {
		$ret = [];
		foreach( $this->rules as $key => $rule ) {
			$ret[$key] = $this->entity->$key;
		}
		return $ret;
	}
}


