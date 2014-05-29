<?php

use LM\Interfaces\UserRepositoryInterface;

class UserController extends BaseController {

	protected $users;

	/**
	* Create a new UserController instance.
	*/
    public function __construct(UserRepositoryInterface $users)
    {
        $this->users  = $users;
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
		$user = $this->users->create($data);
		return \Redirect::to($article->id);
	}

}
