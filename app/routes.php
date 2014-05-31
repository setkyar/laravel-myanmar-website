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

// Pages
Route::get('/', array('as' => 'homePage', function()
{
    return View::make('pages.home')
				->with('bodyClass', 'home');
}));

Route::get('/about', array('as' => 'aboutPage', function()
{
    return View::make('pages.about')
				->with('bodyClass', 'about');
}));

// Controllers
Route::controller('/docs/{topic?}', 'DocController');
Route::controller('/user', 'UserController');


// Bind Interfaces to repository
App::bind(
	'LM\Interfaces\UserRepositoryInterface',  
	'LM\Repositories\UserRepository'
);

App::bind(
	'LM\Interfaces\DocRepositoryInterface',  
	'LM\Repositories\DocRepository'
);