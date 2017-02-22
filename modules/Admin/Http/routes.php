<?php
Route::group([
    'middleware' => ['web', 'checkadminlogin'],
    'prefix'     => 'admincpp',
    'namespace'  => 'Modules\Admin\Http\Controllers'], function() {

    // dashboard
    Route::get('/', [
        'as'    => 'admincpp.getHomeAdmin',
        'uses'  => 'AdminDashboardController@index'
    ]);

    Route::get('/dashboard', [
        'as'    => 'admincpp.getdashboard',
        'uses'  => 'AdminDashboardController@getContentDashboard'
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
        Route::any('/', [
           'as'             => 'admincpp.getListCategory',
           'permissions'    => 'categories|list',
           'uses'           => 'AdminCategoryController@getListCategory'
        ]);
        Route::get('/add', [
            'as'            => 'admincpp.getAddCategory',
            'permissions'   => 'categories|add',
            'uses'          => 'AdminCategoryController@getAddCategory'
        ]);
        Route::post('/add', [
            'as'            => 'admincpp.postAddCategory',
            'permissions'   => 'categories|add',
            'uses'          => 'AdminCategoryController@postAddCategory'
        ]);
        Route::get('/edit/{id}', [
            'as'            => 'admincpp.getEditCategory',
            'permissions'   => 'categories|edit',
            'uses'          => 'AdminCategoryController@getEditCategory'
        ]);
        Route::post('/edit/{id}', [
            'as'            => 'admincpp.postEditCategory',
            'permissions'    => 'categories|edit',
            'uses'          => 'AdminCategoryController@PostEditCategory'
        ]);
        Route::get('delete/{id}', [
            'as'            => 'admincpp.getDeleteCategory',
            'permissions'   => 'categories|delete',
            'uses'          => 'AdminCategoryController@getDeleteCategory'
        ]);
    });

    // SETTING
    Route::group(['prefix'=> 'configuration', 'middleware'=> 'checkPermission'], function()
    {
        Route::get('/', [
            'as'=> 'admincpp.getEditConfiguration',
            'uses'=> 'AdminConfigurationController@getEdit'
        ]);

        Route::post('/edit/{id}', [
            'as'=> 'admincpp.postEditConfiguration',
            'uses'=> 'AdminConfigurationController@postEdit'
        ]);
    });

    // ACCOUNT
    Route::group(['prefix'=> 'account','middleware'=> 'checkPermission'], function ()
    {
        Route::get('/', [
            'as'=> 'admincpp.getListAccount',
            'uses'=> 'AdminAccountController@getList'
        ]);

        Route::get('/add', [
             'as'=> 'admincpp.getAddAccount',
             'uses'=> 'AdminAccountController@getAdd'
        ]);

        Route::post('/add', [
            'as'=> 'admincpp.postAddAccount',
            'uses'=> 'AdminAccountController@postAdd'
        ]);

        Route::get('/edit/{adm_id}', [
            'as'=> 'admincpp.geteditAccount',
            'uses'=> 'AdminAccountController@getEdit'
        ]);

        Route::post('/edit/{adm_id}', [
            'as'=> 'admincpp.posteditAccount',
            'uses'=> 'AdminAccountController@postEdit'
        ]);

        Route::get('/delete/{adm_id?}', [
            'as'=> 'admincpp.getDeleteAccount',
            'uses'=> 'AdminAccountController@getDelete'
        ]);

        Route::post('process-quick-account', [
            'as'=> 'admincpp.getProcessQuickAccount',
            'uses'=> 'AdminAccountController@getProcessQuick'
        ]);

        Route::get('face-login/{id}', [
           'as' => 'admincpp.getFaceLogin',
            'uses' => 'AdminAccountController@getFaceLogin'
        ]);
    });

    // MODULES
    Route::group(['prefix'=> 'configadmin', 'midleware' => 'checkPermission'], function () {

        Route::get('/', [
           'as' => 'admincpp.getListConfigAdmin',
           'uses' => 'AdminConfigController@getListConfigAdmin'
        ]);

        Route::get('/add', [
           'as'   => 'admincpp.getAddConfigAdmin',
           'uses' => 'AdminConfigController@getAddConfigAdmin'
        ]);

        Route::post('/add', [
            'as'   => 'admincpp.postAddConfigAdmin',
            'uses' => 'AdminConfigController@postAddConfigAdmin'
        ]);

        Route::get('/edit/{id}',[
           'as' => 'admincpp.getEditConfigAdmin',
           'uses' => 'AdminConfigController@getEditConfigAdmin',
        ]);

        Route::post('/edit/{id}',[
            'as' => 'admincpp.postEditConfigAdmin',
            'uses' => 'AdminConfigController@postEditConfigAdmin',
        ]);

        Route::get('/delete/{id}', [
            'as' => 'admincpp.getDeleteConfigAdmin',
            'uses' => 'AdminConfigController@getDeleteConfigAdmin',
        ]);

        Route::post('/process-quick-module', [
            'as' => 'admincpp.postProcessQuickModule',
            'uses' => 'AdminConfigController@postProcessQuickModule',
        ]);

    });

    //ACCOUNT DETAIL
    Route::group(['prefix'=> 'profile'], function () {
        Route::get('/{id}', [
            'as' => 'admincpp.getProfile',
            'uses' => 'AdminProfileController@getProfile'
        ]);
        Route::post('/{id}', [
            'as' => 'admincpp.postProfile',
            'uses' => 'AdminProfileController@postProfile'
        ]);
    });

    // Master khong co tab
    Route::get('/master', [
            'as'=> 'admincpp.master',
            'uses'=> 'AdminController@getMaster'
    ]);

    // Access denied
    Route::get('/access_denied', function () {
        return 'You have not permission access';
    });
});


