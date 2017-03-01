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

    // MODULES
    Route::group(['prefix'=> 'module', 'middleware' => 'checkPermission'], function () {

        Route::get('/', [
            'as'          => 'admincpp.getListConfigAdmin',
            'permissions' => 'module.list',
            'uses'        => 'AdminConfigController@getListConfigAdmin'
        ]);

        Route::get('/add', [
            'as'          => 'admincpp.getAddConfigAdmin',
            'permissions' => 'module.add',
            'uses'        => 'AdminConfigController@getAddConfigAdmin'
        ]);

        Route::post('/add', [
            'as'          => 'admincpp.postAddConfigAdmin',
            'permissions' => 'module.add',
            'uses'        => 'AdminConfigController@postAddConfigAdmin'
        ]);

        Route::get('/edit/{id}',[
            'as'          => 'admincpp.getEditConfigAdmin',
            'permissions' => 'module.edit',
            'uses'        => 'AdminConfigController@getEditConfigAdmin',
        ]);

        Route::post('/edit/{id}',[
            'as'          => 'admincpp.postEditConfigAdmin',
            'permissions' => 'module.edit',
            'uses'        => 'AdminConfigController@postEditConfigAdmin',
        ]);
    });

    // CATEOGORY
    Route::group(['prefix'=> 'category', 'middleware'=> 'checkPermission'], function () {
        Route::any('/', [
            'as'             => 'admincpp.getListCategory',
            'permissions'    => 'category.list',
            'uses'           => 'AdminCategoryController@getListCategory'
        ]);
        Route::get('/add', [
            'as'            => 'admincpp.getAddCategory',
            'permissions'   => 'category.add',
            'uses'          => 'AdminCategoryController@getAddCategory'
        ]);
        Route::post('/add', [
            'as'            => 'admincpp.postAddCategory',
            'permissions'   => 'category.add',
            'uses'          => 'AdminCategoryController@postAddCategory'
        ]);
        Route::get('/edit/{id}', [
            'as'            => 'admincpp.getEditCategory',
            'permissions'   => 'category.edit',
            'uses'          => 'AdminCategoryController@getEditCategory'
        ]);
        Route::post('/edit/{id}', [
            'as'            => 'admincpp.postEditCategory',
            'permissions'   => 'category.edit',
            'uses'          => 'AdminCategoryController@PostEditCategory'
        ]);
    });

    // MENU
    Route::group(['prefix'=> 'menu', 'middleware'=> 'checkPermission'], function()
    {
        Route::any('/', [
            'as'            => 'admincpp.getListMenu',
            'permissions'   => 'menu.list',
            'uses'          => 'AdminMenuController@getList'
        ]);
        Route::get('/add', [
            'as'            => 'admincpp.getAddMenu',
            'permissions'   => 'menu.add',
            'uses'          => 'AdminMenuController@getAdd'
        ]);
        Route::post('/add', [
            'as'            => 'admincpp.postAddMenu',
            'permissions'   => 'menu.add',
            'uses'          => 'AdminMenuController@postAdd'
        ]);
        Route::get('/edit/{id}', [
            'as'            => 'admincpp.getEditMenu',
            'permissions'   => 'menu.edit',
            'uses'          => 'AdminMenuController@getEdit'
        ]);
        Route::post('/edit/{id}', [
            'as'            => 'admincpp.postEditMenu',
            'permissions'   => 'menu.edit',
            'uses'          => 'AdminMenuController@postEdit'
        ]);
    });

    // ACCOUNT
    Route::group(['prefix'=> 'account','middleware'=> 'checkPermission'], function ()
    {
        Route::any('/', [
            'as'            => 'admincpp.getListAccount',
            'permissions'   => 'account.list',
            'uses'          => 'AdminAccountController@getList'
        ]);

        Route::get('/add', [
            'as'            => 'admincpp.getAddAccount',
            'permissions'   => 'account.add',
            'uses'          => 'AdminAccountController@getAdd'
        ]);

        Route::post('/add', [
            'as'            => 'admincpp.postAddAccount',
            'permissions'   => 'account.add',
            'uses'          => 'AdminAccountController@postAdd'
        ]);

        Route::get('/edit/{adm_id}', [
            'as'            => 'admincpp.geteditAccount',
            'permissions'   => 'account.edit',
            'uses'          => 'AdminAccountController@getEdit'
        ]);

        Route::post('/edit/{adm_id}', [
            'as'            => 'admincpp.posteditAccount',
            'permissions'   => 'account.edit',
            'uses'          => 'AdminAccountController@postEdit'
        ]);

        Route::get('face-login/{id}', [
            'as'            => 'admincpp.getFaceLogin',
            'permissions'   => 'account.list',
            'uses'          => 'AdminAccountController@getFaceLogin'
        ]);
    });

    // SETTING x
    Route::group(['prefix'=> 'configuration', 'middleware'=> 'checkPermission'], function()
    {
        Route::get('/', [
            'as'          => 'admincpp.getEditConfiguration',
            'permissions' => 'configuration.edit',
            'uses'        => 'AdminConfigurationController@getEdit'
        ]);

        Route::post('/edit/{id}', [
            'as'          => 'admincpp.postEditConfiguration',
            'permissions' => 'configuration.edit',
            'uses'        => 'AdminConfigurationController@postEdit'
        ]);
    });

    // BANNER dang lam
    Route::group(['prefix'=> 'banner'], function () {
        Route::any('/', [
            'as' => 'admincpp.getListBanner',
            'uses'=> 'AdminBannerController@getListBanner'
        ]);
        Route::get('/add', [
            'as' => 'admincpp.getAddBanner',
            'uses'=> 'AdminBannerController@getAddBanner'
        ]);
        Route::post('/add', [
            'as' => 'admincpp.postAddBanner',
            'uses'=> 'AdminBannerController@postAddBanner'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'admincpp.getEditBanner',
            'uses'=> 'AdminBannerController@getEditBanner'
        ]);
        Route::post('/edit/{id}', [
            'as' => 'admincpp.postEditBanner',
            'uses'=> 'AdminBannerController@postEditBanner'
        ]);

        Route::group(['prefix'=> 'event'], function () {
            Route::get('/', [
                'as' => 'admincpp.getListBannerEvent',
                'uses' => 'AdminBannerEventController@getListBannerEvent',
            ]);
            Route::get('/add/{ban_id}', [
                'as' => 'admincpp.getAddBannerEvent',
                'uses' => 'AdminBannerEventController@getAddBannerEvent',
            ]);
            Route::post('/add/{ban_id}', [
                'as' => 'admincpp.postAddBannerEvent',
                'uses' => 'AdminBannerEventController@postAddBannerEvent',
            ]);

            Route::get('/edit/{ban_id}', [
                'as' => 'admincpp.getEditBannerEvent',
                'uses' => 'AdminBannerEventController@getEditBannerEvent',
            ]);

            Route::post('/edit/{ban_id}', [
                'as' => 'admincpp.postEditBannerEvent',
                'uses' => 'AdminBannerEventController@postEditBannerEvent',
            ]);
        });
    });

    Route::group(['prefix'=> 'new'], function () {
        Route::get('/', [
            'as' => 'admincpp.getListNew',
            'uses'=> 'AdminNewController@getListNew'
        ]);

        Route::get('/add', [
            'as' => 'admincpp.getAddNew',
            'uses'=> 'AdminNewController@getAddNew'
        ]);
        Route::post('/add', [
            'as' => 'admincpp.postAddNew',
            'uses'=> 'AdminNewController@postAddNew'
        ]);

        Route::get('/edit/{id}', [
            'as'=> 'admincpp.getEditNew',
            'uses'=> 'AdminNewController@getEditNew'
        ]);
        Route::post('/edit/{id}', [
            'as'=> 'admincpp.postEditNew',
            'uses'=> 'AdminNewController@postEditNew'
        ]);
        Route::post('/add-step', [
           'as' => 'admincpp.postAddStep',
            'uses' => 'AdminNewController@postAddStep'
        ]);
        Route::post('/upload-file', [
            'as' => 'admincpp.postUploadFile',
            'uses' => 'AdminNewController@postUploadAndDeleteFile'
        ]);
        Route::post('/upload-file-step', [
            'as' => 'admincpp.postUploadFileStep',
            'uses' => 'AdminNewController@postUploadAndDeleteFileStep'
        ]);
    });


    // Access denied
    Route::get('/access_denied', function () {
        dd(\Session::all());
    });
});


