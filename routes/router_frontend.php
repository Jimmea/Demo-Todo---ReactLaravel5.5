<?php 

Route::group(['namespace'=>'Frontend'], function ()
{
	Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
	Route::get('/c', ['as'=>'category', 'uses'=>'CategoryController@index']);
	Route::get('/p', ['as'=>'post', 'uses'=>'PostController@index']);

	Route::group(['prefix'=>'account', 'as'=>'account::'], function ()
	{
		Route::get('collection', ['as'=>'collection', 'uses'=>'UserController@collection']);
		Route::get('about', ['as'=>'about', 'uses'=>'UserController@about']);
		Route::get('friend', ['as'=>'friend', 'uses'=>'UserController@friend']);
		Route::get('made', ['as'=>'made', 'uses'=>'UserController@made']);
		Route::get('photo', ['as'=>'photo', 'uses'=>'UserController@photo']);
		Route::get('review', ['as'=>'review', 'uses'=>'UserController@review']);
		Route::get('recipe', ['as'=>'recipe', 'uses'=>'UserController@recipe']);
	});
});
