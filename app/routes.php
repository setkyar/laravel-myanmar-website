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

// TODO : Clean up and organize routes
Route::controller('password', 'RemindersController');
// Pages
Route::get('/', array('as' => 'homePage', function()
{
    return View::make('pages.home')
				->with('bodyClass', 'home');
}));
Route::get('/about', array('as' => 'aboutPage', function()
{
    return View::make('pages.about')
				->with('bodyClass', 'about')
				->with('pageTitle', 'About');
}));

// File
Route::controller('/file', 'FileController');


Route::get('/blog/category/{name}', array('uses' => 'BlogController@getByCategory', 'as' => 'blogCategory'));
Route::controller('admin/blog/category', 'CategoryController');

// Blog
Route::get('/blog/{slug}', array('uses' => 'BlogController@getSingle', 'as' => 'blogSingle'));
Route::controller('/blog', 'BlogController');
Route::get('/admin/blog/create', array('uses' => 'BlogController@getCreate', 'as' => 'blogCreate'));
Route::get('/admin/blog', array('uses' => 'BlogController@getAdminIndex', 'as' => 'blogAdmin'));
Route::get('/admin/blog/edit/{id}', array('uses' => 'BlogController@getEdit', 'as' => 'blogEdit'));
Route::any('/admin/blog/delete/{id}', array('uses' => 'BlogController@anyDelete', 'as' => 'blogDelete'));


// Blog Categories
Route::get('admin/blog/category', array('uses' => 'CategoryController@getAdminIndex', 'as' => 'categoryAdminIndex'));


Route::get('/admin/blog/category/create', array('uses' => 'CategoryController@getCreate', 'as' => 'categoryCreate'));

Route::controller('/admin', 'AdminController');

// Controllers
Route::controller('/docs/{topic?}', 'DocController');
Route::controller('/user', 'UserController');
Route::get('/members', array('as' => 'membersList', 'uses' => 'UserController@getIndex'));
Route::get('/profile/{profile_url?}', array('as' => 'profile', 'uses' => 'UserController@getProfile'));

// array('as' => 'blogSingle', 'uses' => 'BlogController@getSingle')

// Bind Interfaces to repository
App::bind(
	'LM\Interfaces\UserRepositoryInterface',  
	'LM\Repositories\UserRepository'
);

App::bind(
	'LM\Interfaces\DocRepositoryInterface',  
	'LM\Repositories\DocRepository'
);

App::bind(
	'LM\Interfaces\BlogRepositoryInterface',  
	'LM\Repositories\BlogRepository'
);

App::bind(
	'LM\Interfaces\CategoryRepositoryInterface',  
	'LM\Repositories\CategoryRepository'
);

App::bind(
	'LM\Interfaces\FileRepositoryInterface',
	'LM\Repositories\FileRepository'
);

// View Composers

View::composer('templates.sidebar.blog', 'LM\Composers\CategoryComposer');