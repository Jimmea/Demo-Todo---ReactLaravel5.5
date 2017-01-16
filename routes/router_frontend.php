<?php 

Route::group(['namespace'=>'Frontend'], function ()
{
	Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
});