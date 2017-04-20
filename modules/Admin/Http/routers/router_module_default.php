<?php
//ACCOUNT DETAIL
Route::group(['prefix'=> 'profile'], function ()
{
    Route::get('/{id}', [
        'as'   => 'admincpp.getProfile',
        'uses' => 'AdminProfileController@getProfile'
    ]);
    Route::post('/{id}', [
        'as'   => 'admincpp.postProfile',
        'uses' => 'AdminProfileController@postProfile'
    ]);
});

// MODULES
Route::group(['prefix'=> 'module', 'middleware' => 'checkPermission'], function () use ($perModule) {

    Route::get('/', [
        'as'          => 'admincpp.getListConfigAdmin',
        'permissions' => $perModule['module'].'.list',
        'uses'        => 'AdminConfigController@getListConfigAdmin'
    ]);

    Route::get('/add', [
        'as'          => 'admincpp.getAddConfigAdmin',
        'permissions' => $perModule['module'].'.add',
        'uses'        => 'AdminConfigController@getAddConfigAdmin'
    ]);

    Route::post('/add', [
        'as'          => 'admincpp.postAddConfigAdmin',
        'permissions' => $perModule['module'].'.add',
        'uses'        => 'AdminConfigController@postAddConfigAdmin'
    ]);

    Route::get('/edit/{id}',[
        'as'          => 'admincpp.getEditConfigAdmin',
        'permissions' => $perModule['module'].'.edit',
        'uses'        => 'AdminConfigController@getEditConfigAdmin',
    ]);

    Route::post('/edit/{id}',[
        'as'          => 'admincpp.postEditConfigAdmin',
        'permissions' => $perModule['module'].'.edit',
        'uses'        => 'AdminConfigController@postEditConfigAdmin',
    ]);
});

// CATEOGORY
Route::group(['prefix'=> 'category', 'middleware' => 'checkPermission'], function () use ($perModule) {
    Route::any('/', [
        'as'             => 'admincpp.getListCategory',
        'permissions'    => $perModule['category'].'.list',
        'uses'           => 'AdminCategoryController@getListCategory'
    ]);
    Route::get('/add', [
        'as'            => 'admincpp.getAddCategory',
        'permissions'   => $perModule['category'].'.add',
        'uses'          => 'AdminCategoryController@getAddCategory'
    ]);
    Route::post('/add', [
        'as'            => 'admincpp.postAddCategory',
        'permissions'   => $perModule['category'].'.add',
        'uses'          => 'AdminCategoryController@postAddCategory'
    ]);
    Route::get('/edit/{id}', [
        'as'            => 'admincpp.getEditCategory',
        'permissions'   => $perModule['category'].'.edit',
        'uses'          => 'AdminCategoryController@getEditCategory'
    ]);
    Route::post('/edit/{id}', [
        'as'            => 'admincpp.postEditCategory',
        'permissions'   => $perModule['category'].'.edit',
        'uses'          => 'AdminCategoryController@PostEditCategory'
    ]);

    // Category banner
    Route::group(['prefix'=> '/{category_id}/banner'], function () use ($perModule) {
        Route::any('/', [
            'as'             => 'admincpp.getListCategoryBanner',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryBannerController@getListCategoryBanner'
        ]);
        Route::get('/add', [
            'as'              => 'admincpp.getAddCategoryBanner',
            'permissions'    => $perModule['category'].'.list',
            'uses'            => 'AdminCategoryBannerController@getAddCategoryBanner'
        ]);
        Route::post('/add', [
            'as'             => 'admincpp.postAddCategoryBanner',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryBannerController@postAddCategoryBanner'
        ]);
        Route::get('/edit/{cab_id}', [
            'as'             => 'admincpp.getEditCategoryBanner',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryBannerController@getEditCategoryBanner'
        ]);
        Route::post('/edit/{cab_id}', [
            'as'             => 'admincpp.postEditCategoryBanner',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryBannerController@postEditCategoryBanner'
        ]);
        Route::get('/delete/{cab_id}', [
            'as'             => 'admincpp.getDeleteCategoryBanner',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryBannerController@getDeleteCategoryBanner'
        ]);
    });

    // Category tab action
    Route::group(['prefix'=> '/{category_id}/tabaction'], function () use ($perModule) {
        Route::any('/', [
            'as'             => 'admincpp.getListCategoryTabAction',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryTabActionController@getListCategoryTabAction',
        ]);
        Route::get('/add', [
            'as'             => 'admincpp.getAddCategoryTabAction',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryTabActionController@getAddCategoryTabAction',
        ]);
        Route::post('/add', [
            'as'             => 'admincpp.postAddCategoryTabAction',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryTabActionController@postAddCategoryTabAction',
        ]);
        Route::get('/edit/{cta_id}', [
            'as'             => 'admincpp.getEditCategoryTabAction',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryTabActionController@getEditCategoryTabAction',
        ]);
        Route::post('/edit/{cta_id}', [
            'as'             => 'admincpp.postEditCategoryTabAction',
            'permissions'    => $perModule['category'].'.list',
            'uses'           => 'AdminCategoryTabActionController@postEditCategoryTabAction',
        ]);
    });
});

// MENU
Route::group(['prefix'=> 'menu', 'middleware'=> 'checkPermission'], function() use ($perModule)
{
    Route::any('/', [
        'as'            => 'admincpp.getListMenu',
        'permissions'   => $perModule['menu'].'.list',
        'uses'          => 'AdminMenuController@getList'
    ]);
    Route::get('/add', [
        'as'            => 'admincpp.getAddMenu',
        'permissions'   => $perModule['menu'].'.add',
        'uses'          => 'AdminMenuController@getAdd'
    ]);
    Route::post('/add', [
        'as'            => 'admincpp.postAddMenu',
        'permissions'   => $perModule['menu'].'.add',
        'uses'          => 'AdminMenuController@postAdd'
    ]);
    Route::get('/edit/{id}', [
        'as'            => 'admincpp.getEditMenu',
        'permissions'   => $perModule['menu'].'.edit',
        'uses'          => 'AdminMenuController@getEdit'
    ]);
    Route::post('/edit/{id}', [
        'as'            => 'admincpp.postEditMenu',
        'permissions'   => $perModule['menu'].'.edit',
        'uses'          => 'AdminMenuController@postEdit'
    ]);
});

// ACCOUNT
Route::group(['prefix'=> 'account','middleware'=> 'checkPermission'], function () use ($perModule)
{
    Route::any('/', [
        'as'            => 'admincpp.getListAccount',
        'permissions'   => $perModule['account'].'.list',
        'uses'          => 'AdminAccountController@getList'
    ]);

    Route::get('/add', [
        'as'            => 'admincpp.getAddAccount',
        'permissions'   => $perModule['account'].'.add',
        'uses'          => 'AdminAccountController@getAdd'
    ]);

    Route::post('/add', [
        'as'            => 'admincpp.postAddAccount',
        'permissions'   => $perModule['account'].'.add',
        'uses'          => 'AdminAccountController@postAdd'
    ]);

    Route::get('/edit/{adm_id}', [
        'as'            => 'admincpp.geteditAccount',
        'permissions'   => $perModule['account'].'.edit',
        'uses'          => 'AdminAccountController@getEdit'
    ]);

    Route::post('/edit/{adm_id}', [
        'as'            => 'admincpp.posteditAccount',
        'permissions'   => $perModule['account'].'.edit',
        'uses'          => 'AdminAccountController@postEdit'
    ]);

    Route::get('face-login/{id}', [
        'as'            => 'admincpp.getFaceLogin',
        'permissions'   => $perModule['account'].'.edit',
        'uses'          => 'AdminAccountController@getFaceLogin'
    ]);
});

// SETTING
Route::group(['prefix'=> 'configuration', 'middleware'=> 'checkPermission'], function() use ($perModule)
{
    Route::get('/', [
        'as'          => 'admincpp.getEditConfiguration',
        'permissions' => $perModule['configuration'].'.edit',
        'uses'        => 'AdminConfigurationController@getEdit'
    ]);

    Route::post('/edit/{id}', [
        'as'          => 'admincpp.postEditConfiguration',
        'permissions' => $perModule['configuration'].'.edit',
        'uses'        => 'AdminConfigurationController@postEdit'
    ]);
});

// TAG
Route::group(['prefix'=> 'tag','middleware'=> 'checkPermission'], function () use ($perModule)
{
    Route::any('/', [
        'as'          => 'admincpp.getListTag',
        'permissions' => $perModule['tag'].'.list',
        'uses'        => 'AdminTagController@getListTag',
    ]);
    Route::get('/add', [
        'as'          => 'admincpp.getAddTag',
        'permissions' => $perModule['tag'].'.add',
        'uses'        => 'AdminTagController@getAddTag',
    ]);
    Route::post('/add', [
        'as'          => 'admincpp.postAddTag',
        'permissions' => $perModule['tag'].'.add',
        'uses'        => 'AdminTagController@postAddTag',
    ]);

    Route::get('/edit/{tag_id}', [
        'as'          => 'admincpp.getEditTag',
        'permissions' => $perModule['tag'].'.edit',
        'uses'        => 'AdminTagController@getEditTag',
    ]);

    Route::post('/edit/{tag_id}', [
        'as'          => 'admincpp.postEditTag',
        'permissions' => $perModule['tag'].'.edit',
        'uses'        => 'AdminTagController@postEditTag',
    ]);

    Route::any('/delete/{id?}', [
        'as'          => 'admincpp.getDeleteTag',
        'permissions' => $perModule['tag'].'.delete',
        'uses'        => 'AdminTagController@getDeleteTag'
    ]);
});

// NEW
Route::group(['prefix'=> 'new','middleware'=> 'checkPermission'], function () use ($perModule)
{
    Route::any('/', [
        'as'          => 'admincpp.getListNew',
        'permissions' => $perModule['new'].'.list',
        'uses'        => 'AdminNewController@getListNew'
    ]);

    Route::get('/trash', [
        'as'          => 'admincpp.getListTrashNew',
        'permissions' => $perModule['new'].'.delete',
        'uses'        => 'AdminNewController@getListTrashNew'
    ]);

    Route::get('/restore/{id}', [
        'as'          => 'admincpp.getStoreTrashNew',
        'permissions' => $perModule['new'].'.list',
        'uses'        => 'AdminNewController@getStoreTrashNew'
    ]);

    Route::get('/show/{id}', [
        'as'          => 'admincpp.getShowNew',
        'permissions' => $perModule['new'].'.add',
        'uses'        => 'AdminNewController@getShowNew'
    ]);

    Route::get('/add', [
        'as'          => 'admincpp.getAddNew',
        'permissions' => $perModule['new'].'.add',
        'uses'        => 'AdminNewController@getAddNew'
    ]);
    Route::post('/add', [
        'as'          => 'admincpp.postAddNew',
        'permissions' => $perModule['new'].'.add',
        'uses'        => 'AdminNewController@postAddNew'
    ]);

    Route::get('/edit/{id}', [
        'as'          => 'admincpp.getEditNew',
        'permissions' => $perModule['new'].'.edit',
        'uses'        => 'AdminNewController@getEditNew'
    ]);
    Route::post('/edit/{id}', [
        'as'          => 'admincpp.postEditNew',
        'permissions' => $perModule['new'].'.edit',
        'uses'        => 'AdminNewController@postEditNew'
    ]);
    Route::post('/add-step', [
        'as'          => 'admincpp.postAddStep',
        'permissions' => $perModule['new'].'.add',
        'uses'        => 'AdminNewController@postAddStep'
    ]);
    Route::any('/delete/{id?}', [
        'as'          => 'admincpp.getDeleteNew',
        'permissions' => $perModule['new'].'.delete',
        'uses'        => 'AdminNewController@getDeleteNew'
    ]);
});

// BANNER
Route::group(['prefix'=> 'banner','middleware'=> 'checkPermission'], function () use ($perModule)
{
    Route::any('/', [
        'as'          => 'admincpp.getListBanner',
        'permissions' => $perModule['banner'].'.list',
        'uses'        => 'AdminBannerController@getListBanner'
    ]);
    Route::get('/add', [
        'as'          => 'admincpp.getAddBanner',
        'permissions' => $perModule['banner'].'.add',
        'uses'        => 'AdminBannerController@getAddBanner'
    ]);
    Route::post('/add', [
        'as'          => 'admincpp.postAddBanner',
        'permissions' => $perModule['banner'].'.add',
        'uses'        => 'AdminBannerController@postAddBanner'
    ]);
    Route::get('/edit/{id}', [
        'as'          => 'admincpp.getEditBanner',
        'permissions' => $perModule['banner'].'.edit',
        'uses'        => 'AdminBannerController@getEditBanner'
    ]);
    Route::post('/edit/{id}', [
        'as'          => 'admincpp.postEditBanner',
        'permissions' => $perModule['banner'].'.edit',
        'uses'        => 'AdminBannerController@postEditBanner'
    ]);
});