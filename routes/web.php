<?php
// Auth frontend
Route::group(['namespace'=>'Auth', 'as'=>'auth::', 'prefix'=>'account'], function ()
{
    Route::get('/login', ['as'=>'login', 'uses'=>'LoginController@showLoginForm']);
    Route::get('/register', ['as'=>'register', 'uses'=>'RegisterController@showRegistrationForm']);
    Route::get('/forgot', ['as'=>'forgot', 'uses'=>'ForgotPasswordController@showLinkRequestForm']);
});


// Auth admin
Route::group(['namespace' => 'AuthAdmin', 'prefix' => 'authen_ticate_cook/staff' ], function() {


        Route::get('/login', [
            'as' => 'staff.getLogin',
            'uses'=> 'LoginController@getLogin',
        ]);

        Route::post('/login', [
            'as' => 'staff.postLogin',
            'uses'=> 'LoginController@postLogin',
        ]);

        Route::get('/password', [
            'as' => 'staff.getPassword',
            'uses' => 'ForgotPasswordController@getPassword'
        ]);

        Route::post('/password', [
            'as' => 'staff.postPassword',
            'uses' => 'ForgotPasswordController@postPassword'
        ]);

        Route::get('/resetpassword', [
            'as' => 'staff.getResetPassword',
            'uses' => 'ResetPasswordController@getResetPassword'
        ]);

        Route::post('/resetpassword', [
            'as' => 'staff.postResetPassword',
            'uses' => 'ResetPasswordController@postResetPassword'
        ]);

        Route::get('/logoutadmincpp', [
            'as' => 'staff.getLogoutAdmincpp',
            'uses' => 'LoginController@getLogout'
        ]);
});

