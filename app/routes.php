<?php

// route to show the login form
Route::get('login', array('uses' => 'SessionsController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'SessionsController@doLogin'));

Route::get('logout', array('uses' => 'SessionsController@doLogout'));



Route::get('/', function()
{
	return View::make('dashboard');
});
