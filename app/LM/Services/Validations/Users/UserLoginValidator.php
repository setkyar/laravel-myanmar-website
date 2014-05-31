<?php 

namespace LM\Services\Validations\Users;

use LM\Services\Validations\AbstractValidator;

class UserLoginValidator extends AbstractValidator {
	protected $rules = array(
		'email' => 'required|email',
		'password' => 'required|min:6'
	);

	protected $messages = array(
		'email.required' => 'အီးမေးလ် လိုနေပါတယ်',
		'email.email' => 'အီးမေးလ် ပုံစံမှားနေပါတယ်',
		'password.required' => 'စကားဝှက် လိုအပ်ပါတယ်',
		'password.min:6' => 'စကားဝှက်မှာ စာလုံးရေ အနည်းဆုံး ၆ လုံးလိုအပ်ပါတယ်'
	);
}