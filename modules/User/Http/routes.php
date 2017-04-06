<?php

Route::group(['middleware' => 'web',
    'prefix'=> '/cook',
    'as'=> 'user::',
    'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::group(['prefix'=> '/{user}'], function() 
    {
        Route::get('/{tab?}', [
            'as'    => 'user.tab',
            'uses'  => 'UserController@getTabUser'
        ]);             
    });
});
