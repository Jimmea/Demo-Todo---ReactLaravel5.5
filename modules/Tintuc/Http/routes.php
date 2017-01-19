<?php
/**
 * Created by : BillJanny
 * Date: 10:55 - 19/01/17
 * Tong hop tat ca route lien quan toi trang tin tuc
 * @param
 * @return
 */

Route::group(['middleware' => 'web','as'=> 'tintuc::', 'namespace' => 'Modules\Tintuc\Http\Controllers'], function()
{
    // Router Trang tru
    Route::get('/', 'WelcomeController@getIndex');

    // Danh sách router cho danh mục
    Route::get('/danh-muc/{slug?}', [
       'as'=> 'getCategory',
       'uses' => 'CategoryController@getCategory'
    ]);

    // Danh sách router cho bài viết chi tiết
    Route::get('/new/{id}/{slug}', [
        'as'=> 'getNewDetail',
        'uses' => 'NewDetailController@getNewDetail'
    ]);

    // Danh sách router load ajax
    Route::group(['prefix'=> 'ajax'], function() {
        Route::get('/loadmore-home','AjaxController@getLoadMoreHome');
    });
});
