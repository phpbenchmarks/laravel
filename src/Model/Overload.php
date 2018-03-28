<?php

namespace Overload\Model;

use Illuminate\Database\Eloquent\Model;

class Overload extends Model
{
    

	protected $table = 'overloads'; 	 
	
	public $timestamps = false;

	protected $date;

	protected $dateTime;

	protected $fixedString;

	protected $variableString;

	protected $fillable = ['date', 'dateTime', 'fixedString', 'variableString'];

	public function __construct() {
		$this->date = date('Y-m-d');
		$this->dateTime = date('Y-m-d H:i:s');
	}

	public function getId() {
		return $this->id;
	}

	public function getDate() {
		return $this->date;
	}

	public function getDateTime() {
		return $this->dateTime;
	}

	public function getVariableString() {
		return $this->variableString;
	}

	public function getFixedString() {
		return $this->fixedString;
	}

}