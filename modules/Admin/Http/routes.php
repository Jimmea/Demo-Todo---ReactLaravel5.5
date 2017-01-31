<?php

Route::group([
    'middleware' => 'web',
    'prefix' => 'admincpp',
    'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    // Dashboard
    Route::get('/', 'AdminController@index');
    Route::get('/dashboard', [
        'as'    => 'admincpp.getdoashboard',
        'uses'  => 'AdminController@getContentDashboard'
    ]);

    //

});
