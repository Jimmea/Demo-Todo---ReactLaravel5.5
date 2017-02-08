<?php

Route::group([
    'prefix' => 'authen_ticate_cook',
    'namespace' => 'Modules\Admin\Http\Controllers'], function()
{

    Route::group(['prefix'=> 'staff'], function ()
    {
        Route::get('/login', [
            'as' => 'staff.getLogin',
            'uses'=> 'Auth\LoginController@getLogin',
        ]);

        Route::post('/login', [
            'as' => 'staff.postLogin',
            'uses'=> 'Auth\LoginController@postLogin',
        ]);

        Route::get('/password', [
            'as' => 'staff.getPassword',
            'uses' => 'Auth\ForgetPasswordController@getPassword'
        ]);

        Route::post('/password', [
            'as' => 'staff.postPassword',
            'uses' => 'Auth\ForgetPasswordController@postPassword'
        ]);

        Route::get('/resetpassword', [
            'as' => 'staff.getResetPassword',
            'uses' => 'Auth\ResetPasswordController@getResetPassword'
        ]);

        Route::post('/resetpassword', [
            'as' => 'staff.postResetPassword',
            'uses' => 'Auth\ResetPasswordController@postResetPassword'
        ]);

    });

});

