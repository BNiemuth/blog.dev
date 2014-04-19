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

// To log Eloquent queries
// Event::listen('illuminate.query', function($sgl, $bindings, $time) {
// 	Log::info($sql);
// 	Log::info(implode($bindings, ', '));
// }); 

Route::get('/', 'HomeController@showWelcome');

Route::resource('createuser', 'UserController');

Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::resource('posts', 'PostsController');

// Route::get('/rolldice/{guess}', function($guess)
// {
// 	$data = array('guess' => $guess);
// 	return View::make('my-first-view')->with($data);
// });