<?php 

Route::group(['namespace'=>'Frontend'], function ()
{
	Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
	Route::get('/c', ['as'=>'category', 'uses'=>'CategoryController@index']);
	Route::get('/p', ['as'=>'post', 'uses'=>'PostController@index']);
});