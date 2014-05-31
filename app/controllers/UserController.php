<?php

use LM\Interfaces\UserRepositoryInterface;
use LM\Services\Validations\Users\UserRegisterValidator;
use LM\Services\Validations\Users\UserLoginValidator;

class UserController extends BaseController {

	protected $users;
	protected $registerValidator;
	protected $loginValidator;

	/**
	* Create a new UserController instance.
	*/
    public function __construct(
    	UserRepositoryInterface $users, 
    	UserRegisterValidator $registerValidator,
    	UserLoginValidator $loginValidator)
    {
        $this->users  = $users;
        $this->registerValidator  = $registerValidator;
        $this->loginValidator  = $loginValidator;
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
	 * Show Login Form
	 *
	 * @return View
	 */
	public function getLogin() {
		return View::make('users.login');
	}

	/**
	 * Show Login Form
	 *
	 * @return View
	 */
	public function getLogout() {
		Auth::logout();
		return \Redirect::to('/')
						->with('success', 'ထွက်သွားရက်တယ်ဗျာ ၊ မျက်ရည်တောင်ဝဲတယ်');
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

		if ($this->registerValidator->with($data)->passes()) {

			$user = $this->users->create($data);
			return \Redirect::to('/')
							->with('success', 'အသင်းဝင်ဖြစ်သွားပြီဖြစ်လို့ ၊ ဂျွမ်းနှစ်ပတ်လောက် ပစ်ထိုးလိုက်လို့ရပါပြီ');
		} else {
			return \Redirect::action('UserController@getRegister')
							->withInput()
							->with('errors', $this->registerValidator->errors());
		}
	}

	/**
	 * Login a user and do something
	 *
	 * @return Redirect
	 */

	public function postLogin() {
		$data = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
		);

		if ($this->loginValidator->with($data)->passes()) {
			if (Auth::attempt($data))
			{
			    return \Redirect::to('/')
			    				->with('success', 'အောင်မြင်စွာ ဝင်ရောက်နိုင်ခဲ့ပါပြီ');
			} else {
				return \Redirect::action('UserController@getLogin')
								->withInput()
								->with('error', 'အီးမေလ် (သို့) စကားဝှက်မှားနေပါတယ်');
			}
		} else {
			return \Redirect::action('UserController@getLogin')
							->withInput()
							->with('errors', $this->loginValidator->errors());
		}
	}

}
