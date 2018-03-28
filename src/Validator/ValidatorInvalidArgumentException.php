<?php

namespace Overload\Validator;

use Illuminate\Support\MessageBag;

class ValidatorInvalidArgumentException extends \Exception
{
    /**
     * Errors
     *
     * @var Illuminate\Support\MessageBag
     */
    protected $errors = [];
    /**
     * Input
     *
     * @var array
     */
    protected $input = [];
    /**
     * Constructor
     *
     * @param string         $message  Message
     * @param integer        $code     Code
     * @param Exception|null $previous Previous
     */
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errors = new MessageBag;
    }
    /**
     * Set Message
     *
     * @param string $message Message
     *
     * @return ValidatorInvalidArgumentException
     */
    public function setMessage($message = '')
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Set Errors
     *
     * @param MessageBag $errors Errors
     */
    public function setErrors(MessageBag $errors)
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Get Errors
     *
     * @return MessageBag Errors
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * Set Input
     *
     * @param array $input Input
     */
    public function setInput(array $input)
    {
        $this->input = $input;
        return $this;
    }
    /**
     * Get Input
     *
     * @return array Input
     */
    public function getInput()
    {
        return $this->input;
    }
}