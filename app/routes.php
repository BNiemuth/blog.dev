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

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::resource('posts', 'postsController');

Route::get('/rolldice/{guess}', function($guess)
{
	$data = array('guess' => $guess);
	return View::make('my-first-view')->with($data);
});