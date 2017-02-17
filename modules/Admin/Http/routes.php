<?php

Route::group([
    'middleware' => ['web', 'checkadminlogin'],
    'prefix'     => 'admincpp',
    'namespace'  => 'Modules\Admin\Http\Controllers'], function() {

    // dashboard
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', [
        'as'    => 'admincpp.getdoashboard',
        'uses'  => 'DashboardController@getContentDashboard'
    ]);

    // MENU
    Route::group(['prefix'=> 'menu', 'middileware'=> 'checkPermission'], function()
    {
        Route::get('/', [
            'as'    => 'admincpp.getListMenu',
            'uses'  => 'AdminMenuController@getList'
        ]);
        Route::get('/add', [
            'as'    => 'admincpp.getAddMenu',
            'uses'  => 'AdminMenuController@getAdd'
        ]);
        Route::post('/add', [
            'as'    => 'admincpp.postAddMenu',
            'uses'  => 'AdminMenuController@postAdd'
        ]);
        Route::get('/edit/{id}', [
            'as'    => 'admincpp.getEditMenu',
            'uses'  => 'AdminMenuController@getEdit'
        ]);
        Route::post('/edit/{id}', [
            'as'    => 'admincpp.postEditMenu',
            'uses'  => 'AdminMenuController@postEdit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'admincpp.getDeleteMenu',
            'uses' => 'AdminMenuController@getDelete'
        ]);
        Route::post('/process-quick-menu', [
            'as'    => 'admincpp.postProcessQuickMenu',
            'uses'  => 'AdminMenuController@postProcessQuickMenu'
        ]);
    });

    // CATEOGORY
    Route::group(['prefix'=> 'category', 'middleware'=> 'checkPermission'], function () {
        Route::get('/', [
           'as' => 'admincpp.getListCategory',
           'uses' => 'AdminCategoryController@getListCategory'
        ]);
        Route::get('/add', [
            'as' => 'admincpp.getAddCategory',
            'uses' => 'AdminCategoryController@getAddCategory'
        ]);
        Route::post('/add', [
            'as' => 'admincpp.postAddCategory',
            'uses'=> 'AdminCategoryController@postAddCategory'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'admincpp.getEditCategory',
            'uses' => 'AdminCategoryController@getEditCategory'
        ]);
        Route::post('/edit/{id}', [
            'as' => 'admincpp.postEditCategory',
            'uses' => 'AdminCategoryController@PostEditCategory'
        ]);
        Route::get('delete/{id}', [
            'as' => 'admincpp.getDeleteCategory',
            'uses'=> 'AdminCategoryController@getDeleteCategory'
        ]);
        Route::post('/process-quick-category', [
            'as' => 'admincpp.postProcessQuickCategory',
            'uses' => 'AdminCategoryController@postProcessQuickCategory'
        ]);
    });

    // SETTING
    Route::group(['prefix'=> 'configuration', 'middileware'=> 'checkPermission'], function()
    {
        Route::get('/', [
            'as'=> 'admincpp.getEditConfiguration',
            'uses'=> 'ConfigurationController@getEdit'
        ]);

        Route::post('/edit', [
            'as'=> 'admincpp.postEditConfiguration',
            'uses'=> 'ConfigurationController@postEdit'
        ]);
    });

    // ACCOUNT
    Route::group(['prefix'=> 'account','middileware'=> 'checkPermission'], function ()
    {
        Route::get('/', [
            'as'=> 'admincpp.getListAccount',
            'uses'=> 'AccountController@getList'
        ]);

        Route::get('/add', [
             'as'=> 'admincpp.getAddAccount',
             'uses'=> 'AccountController@getAdd'
        ]);

        Route::post('/add', [
            'as'=> 'admincpp.postAddAccount',
            'uses'=> 'AccountController@postAdd'
        ]);

        Route::get('/edit/{id}', [
            'as'=> 'admincpp.geteditAccount',
            'uses'=> 'AccountController@getEdit'
        ]);

        Route::post('/edit{id}', [
            'as'=> 'admincpp.posteditAccount',
            'uses'=> 'AccountController@postEdit'
        ]);

        Route::get('/delete/{id?}', [
            'as'=> 'admincpp.getDeleteAccount',
            'uses'=> 'AccountController@getDelete'
        ]);

        Route::post('process-quick-account', [
            'as'=> 'admincpp.getProcessQuickAccount',
            'uses'=> 'AccountController@getProcessQuick'
        ]);
    });


    // Master khong co tab
    Route::get('/master', [
            'as'=> 'admincpp.master',
            'uses'=> 'AdminController@getMaster'
    ]);

});

require_once 'route_auth.php';

