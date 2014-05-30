<?php

use LM\Interfaces\UserRepositoryInterface;
use LM\Services\Validations\UserValidator;

class UserController extends BaseController {

	protected $users;
	protected $validator;

	/**
	* Create a new UserController instance.
	*/
    public function __construct(UserRepositoryInterface $users, UserValidator $validator)
    {
        $this->users  = $users;
        $this->validator  = $validator;
    }

	/**
	 * Show Registration Form
	 *
	 * @return View
	 */

	public function getRegister() {
		return View::make('users.register');
	}

	/**
	 * Register a user and do something
	 *
	 * @return Redirect
	 */

	public function postRegister() {

		$data = array(
			'email' => Input::get('email'),
			'username' => Input::get('username'),
			'password' => Hash::make(Input::get('password')),
			'profile_url' => Input::get('profile_url'),
		);

		if ($this->validator->with($data)->passes()) {
			$user = $this->users->create($data);
			return \Redirect::to($article->id);
		} else {
			return \Redirect::action('UserController@getRegister')
							->with('errors', $this->validator->errors());
		}
	}

}
