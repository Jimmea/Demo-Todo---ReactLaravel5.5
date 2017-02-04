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

    //setting website
    Route::group(['prefix'=> 'configuration'], function()
    {
//        Route::get('/', [
//            'as'=> 'admincpp.getListConfiguration',
//            'uses'=> 'ConfigurationController@getList'
//        ]);

//        Route::get('/add', [
//             'as'=> 'admincpp.getAddConfiguration',
//             'uses'=> 'ConfigurationController@getAdd'
//        ]);

//        Route::post('/add', [
//            'as'=> 'admincpp.postAddConfiguration',
//            'uses'=> 'ConfigurationController@postAdd'
//        ]);

        Route::get('/', [
            'as'=> 'admincpp.getEditConfiguration',
            'uses'=> 'ConfigurationController@getEdit'
        ]);

        Route::post('/edit', [
            'as'=> 'admincpp.postEditConfiguration',
            'uses'=> 'ConfigurationController@postEdit'
        ]);
    });


    // Master
    Route::get('/master', [
        'as'=> 'admincpp.master',
        'uses'=> 'AdminController@getMaster'
    ]);
});
