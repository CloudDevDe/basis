<?php

// route to show the login form
Route::get('login', array('uses' => 'SessionsController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'SessionsController@doLogin'));

// route to process the logout
Route::get('logout', array('uses' => 'SessionsController@doLogout'));

Route::resource('users', 'UserController');

Route::get('/', function()
{
	return View::make('dashboard');
});
