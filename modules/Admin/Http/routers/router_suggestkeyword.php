<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 22/03/17
 * Time: 10:10
 */
Route::group(['prefix'=>'suggestkeyword','middleware'=> 'checkPermission'], function () use ($perModule)
{
    Route::any('/', [
        'as'          => 'admincpp.getListSuggestKeyword',
        'permissions' => $perModule['suggestkeyword'].'.list',
        'uses'        => 'AdminSuggestKeywordController@getListSuggestKeyword'
    ]);

    Route::get('/add', [
        'as'          => 'admincpp.getAddSuggestKeyword',
        'permissions' => $perModule['suggestkeyword'].'.add',
        'uses'        => 'AdminSuggestKeywordController@getAddSuggestKeyword'
    ]);
    Route::post('/add', [
        'as'          => 'admincpp.postAddSuggestKeyword',
        'permissions' => $perModule['suggestkeyword'].'.add',
        'uses'        => 'AdminSuggestKeywordController@postAddSuggestKeyword'
    ]);

    Route::get('/edit/{id}', [
        'as'          => 'admincpp.getEditSuggestKeyword',
        'permissions' => $perModule['suggestkeyword'].'.edit',
        'uses'        => 'AdminSuggestKeywordController@getEditSuggestKeyword'
    ]);
    Route::post('/edit/{id}', [
        'as'          => 'admincpp.postEditSuggestKeyword',
        'permissions' => $perModule['suggestkeyword'].'.edit',
        'uses'        => 'AdminSuggestKeywordController@postEditSuggestKeyword'
    ]);
});