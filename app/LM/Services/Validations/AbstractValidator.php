<?php 

namespace LM\Services\Validations;

use LM\Interfaces\Validations\ValidationInterface;
use \Illuminate\Validation\Factory;

abstract class AbstractValidator implements ValidationInterface {
	protected $validator;
	protected $data = array();
	protected $errors = array();
	protected $rules = array();
	protected $messages = array();

	public function __construct(Factory $validator)
	{
		$this->validator = $validator;
	}

	public function with(array $data) {
		$this->data = $data;
		return $this;
	}

	public function passes(){
		$test = $this->validator->make($this->data,$this->rules);

		if ($test->fails()) {
			$this->errors = $test->messages();
			return false;
		};
		return true;
	}

	public function errors()
	{
		return $this->errors;
	}
}