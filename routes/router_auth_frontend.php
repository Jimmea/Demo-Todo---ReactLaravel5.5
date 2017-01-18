<?php

Route::group(['namespace'=>'Auth', 'as'=>'auth::', 'prefix'=>'account'], function ()
{
	Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@showLoginForm']);
	Route::get('/register', ['as'=>'register', 'uses'=>'RegisterController@showRegistrationForm']);
	Route::get('/forgot', ['as'=>'forgot', 'uses'=>'ForgotPasswordController@showLinkRequestForm']);
});