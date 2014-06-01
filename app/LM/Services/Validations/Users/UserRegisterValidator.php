<?php 

namespace LM\Services\Validations\Users;

use LM\Services\Validations\AbstractValidator;

class UserRegisterValidator extends AbstractValidator {
	protected $rules = array(
		'email' => 'required|email|unique:users',
		'username' => 'required',
		'password' => 'required|min:6',
		// 'confirm-password' => 'required|confirmed:password',
		'profile_url' => 'required|unique:users',
	);

	protected $messages = array(
		'email.required' => 'အီးမေးလ် လိုနေပါတယ်',
		'email.email' => 'အီးမေးလ် ပုံစံမှားနေပါတယ်',
		'email.unique:email' => 'ဒီ အီးမေးလ်နဲ့ အကောင့်ရှိနေပါတယ်',
		'username.required' => 'နာမည် လိုအပ်ပါတယ်',
		'password.required' => 'စကားဝှက် လိုအပ်ပါတယ်',
		'password.min:6' => 'စကားဝှက်မှာ စာလုံးရေ အနည်းဆုံး ၆ လုံးလိုအပ်ပါတယ်',
		'profile_url.required' => 'Profile URL လို်အပ်ပါတယ်',
		'profile_url.unique:users' => 'Profile URL က ရှိပြီးသားဖြစ်နေပါတယ်',
	);
}