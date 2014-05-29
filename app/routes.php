<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home')
				->with('bodyClass', 'home');
});

Route::controller('/user', 'UserController');


App::bind(
	'LM\Interfaces\UserRepositoryInterface',  
	'LM\Repositories\UserRepository'
);