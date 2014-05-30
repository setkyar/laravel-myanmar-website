<?php 

namespace LM\Services\Validations;

class UserValidator extends AbstractValidator {
	protected $rules = array(
		'email' => 'required|email|unique',
		'username' => 'required',
		'password' => 'required',
		'profile_url' => 'required|unique',
	);

	protected $messages = array(
		'email.required' => 'test'
	);
}