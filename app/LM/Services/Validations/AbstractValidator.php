<?php 

namespace LM\Services\Validations;

/**
 * Abstract class for Validator
 * @author Hein Zaw Htet
 */

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
		$validator = $this->validator->make(
			$this->data,
			$this->rules,
			$this->messages
		);

		if ($validator->fails()) {
			$this->errors = $validator->messages();
			return false;
		};
		return true;
	}

	public function errors()
	{
		return $this->errors;
	}
}