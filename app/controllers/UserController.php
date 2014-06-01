<?php

use LM\Interfaces\UserRepositoryInterface;
use LM\Services\Validations\Users\UserRegisterValidator;
use LM\Services\Validations\Users\UserLoginValidator;
use LM\Services\Validations\Users\ProfileEditValidator;

class UserController extends BaseController {

	protected $users;
	protected $registerValidator;
	protected $loginValidator;
	protected $profileValidator;

	/**
	* Create a new UserController instance.
	*/
    public function __construct(
    	UserRepositoryInterface $users, 
    	UserRegisterValidator $registerValidator,
    	UserLoginValidator $loginValidator,
    	ProfileEditValidator $profileValidator)
    {
        $this->users  = $users;
        $this->registerValidator  = $registerValidator;
        $this->loginValidator  = $loginValidator;
        $this->profileValidator  = $profileValidator;

        $this->beforeFilter('auth', array(
        	'only' => array(
        		'getEdit',
        		'getLogout',
        		'postEdit'
        		)
        	));
    }

    /**
	 * Display all members
	 *
	 * @return View
	 */
    public function getIndex()
    {
    	$users = $this->users->findAll();
    	return View::make('users.index')
    				->with('users', $users);
    }

    /**
	 * Display profile
	 *
	 * @return View
	 */
    public function getProfile($profile_url = null)
    {
    	if ($profile_url === null) {
    		$profile_url = Auth::user()->profile_url;
    	}
    	$user = $this->users->findByProfileUrl($profile_url);
    	return View::make('users.profile')
    				->with('user', $user);
    }

    /**
	 * Profile Edit form
	 *
	 * @return View
	 */
    public function getEdit()
    {
    	$user = $this->users->findById(Auth::user()->id);
    	return View::make('users.edit')
    				->with('user', $user);
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


	/**
	 * Edit a user and do something
	 *
	 * @return Redirect
	 */

	public function postEdit() {

		$data = array(
			'username' => Input::get('username'),
			'password' => Hash::make(Input::get('password')),
			'job_position' => Input::get('job_position'),
			'job_at' => Input::get('job_at'),
			'bio' => Input::get('bio'),
		);

		if ($this->profileValidator->with($data)->passes()) {

			$user = $this->users->update($data, Auth::user()->id);
			return \Redirect::to('/profile')
							->with('success', 'အချက်အလက်တွေ ပြင်ပြီးပါပြီ');
		} else {
			return \Redirect::action('UserController@getEdit')
							->withInput()
							->with('errors', $this->profileValidator->errors());
		}
	}

}
