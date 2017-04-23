<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 22/03/17
 * Time: 10:10
 */
Route::group(['prefix'=>'suggestsearch','middleware'=> 'checkPermission'], function () use ($perModule)
{
    Route::any('/', [
        'as'          => 'admincpp.getListSuggestSearch',
        'permissions' => $perModule['suggestsearch'].'.list',
        'uses'        => 'AdminSuggestSearchController@getListSuggestSearch'
    ]);
    Route::get('/add', [
        'as'          => 'admincpp.getAddSuggestSearch',
        'permissions' => $perModule['suggestsearch'].'.add',
        'uses'        => 'AdminSuggestSearchController@getAddSuggestSearch'
    ]);

    Route::post('/add', [
        'as'          => 'admincpp.postAddSuggestSearch',
        'permissions' => $perModule['suggestsearch'].'.add',
        'uses'        => 'AdminSuggestSearchController@postAddSuggestSearch'
    ]);

    Route::get('/edit/{id}', [
        'as'          => 'admincpp.getEditSuggestSearch',
        'permissions' => $perModule['suggestsearch'].'.edit',
        'uses'        => 'AdminSuggestSearchController@getEditSuggestSearch'
    ]);

    Route::post('/edit/{id}', [
        'as'          => 'admincpp.postEditSuggestSearch',
        'permissions' => $perModule['suggestsearch'].'.edit',
        'uses'        => 'AdminSuggestSearchController@postEditSuggestSearch'
    ]);

    Route::get('/delete/{id}', [
        'as'          => 'admincpp.getDeleteSuggestSearch',
        'permissions' => $perModule['suggestsearch'].'suggestsearch.delete',
        'uses'        => 'AdminSuggestSearchController@getDeleteSuggestSearch'
    ]);
});