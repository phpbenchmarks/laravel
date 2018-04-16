<?php

namespace SmallOverload\Model;

use Illuminate\Database\Eloquent\Model;

class SmallOverload1 extends Model
{
    /** @var string */
	protected $table = 'small_overload_1';

	/** @var bool */
	public $timestamps = false;

	/** @var ?string */
	protected $date;

	/** @var ?string */
	protected $dateTime;

	/** @var ?string */
	protected $fixedString;

	/** @var ?string */
	protected $variableString;

	/** @var array */
	protected $fillable = ['date', 'dateTime', 'fixedString', 'variableString'];

	public function __construct()
    {
	    parent::__construct([]);

		$this->date = date('Y-m-d');
		$this->dateTime = date('Y-m-d H:i:s');
	}

	public function getId()
    {
		return $this->id;
	}

	public function getDate()
    {
		return $this->date;
	}

	public function getDateTime()
    {
		return $this->dateTime;
	}

	public function getVariableString()
    {
		return $this->variableString;
	}

	public function getFixedString()
    {
		return $this->fixedString;
	}
}
