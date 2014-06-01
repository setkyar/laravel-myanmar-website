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
Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/home', array('as' => 'homePage', function()
{
    return View::make('pages.home')
				->with('bodyClass', 'home');
}));
Route::get('/about', array('as' => 'aboutPage', function()
{
    return View::make('pages.about')
				->with('bodyClass', 'about');
}));
Route::get('/forum', array('as' => 'forumPage', function()
{
    return View::make('pages.coming-soon-feature');
}));

// Controllers
Route::controller('/docs/{topic?}', 'DocController');
Route::controller('/user', 'UserController');
Route::get('/members', array('as' => 'membersList', 'uses' => 'UserController@getIndex'));
Route::get('/profile/{profile_url?}', array('as' => 'profile', 'uses' => 'UserController@getProfile'));


// Bind Interfaces to repository
App::bind(
	'LM\Interfaces\UserRepositoryInterface',  
	'LM\Repositories\UserRepository'
);

App::bind(
	'LM\Interfaces\DocRepositoryInterface',  
	'LM\Repositories\DocRepository'
);