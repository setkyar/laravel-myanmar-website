<?php 

namespace LM\Interfaces\Validations;

interface ValidationInterface {
	/*
	* Validation Rules
	*/
	public function with(array $data);

	/*
	* If valid
	*/
	public function passes();

	/*
	* If fail
	*/
	public function errors();

}