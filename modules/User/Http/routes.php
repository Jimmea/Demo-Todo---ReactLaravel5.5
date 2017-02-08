<?php

Route::group(['middleware' => 'web', 'prefix'=> 'user','as'=> 'user::', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::get('/', [
        'as'=>'about',
        'uses'=>'UserController@getGeneralUser'
    ]);

    Route::get('/collection', [
        'as'=>'collection',
        'uses'=>'UserController@getUserCollection'
    ]);

    Route::get('/friend', [
        'as'=>'friend',
        'uses'=>'UserController@getUserFriend'
    ]);

    Route::get('/made', [
        'as'=>'made',
        'uses'=>'UserController@getUserMade'
    ]);

    Route::get('/photo', [
        'as'=>'photo',
        'uses'=>'UserController@getUserPhoto'
    ]);

    Route::get('/review', [
        'as'=>'review',
        'uses'=>'UserController@getUserReview'
    ]);

    Route::get('/recipe', [
        'as'=>'recipe',
        'uses'=>'UserController@getUserRecipe'
    ]);
});
