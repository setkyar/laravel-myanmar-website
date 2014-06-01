<?php 

namespace LM\Services\Validations\Users;

use LM\Services\Validations\AbstractValidator;

class ProfileEditValidator extends AbstractValidator {
	protected $rules = array(
		'username' => '',
		'password' => 'min:6',
	);

	protected $messages = array(
		'password.min:6' => 'စကားဝှက်မှာ စာလုံးရေ အနည်းဆုံး ၆ လုံးလိုအပ်ပါတယ်',
	);
}