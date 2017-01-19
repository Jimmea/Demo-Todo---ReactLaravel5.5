<?php

Route::group(['middleware' => 'web', 'prefix'=> 'user','as'=> 'user::', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::get('/', 'UserController@getGeneralUser');
});
