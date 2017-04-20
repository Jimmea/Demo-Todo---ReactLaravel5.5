<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 22/03/17
 * Time: 10:08
 */
Route::group(['prefix'=> 'tabaction'], function () use ($perModule)
{
    Route::any('/', [
        'as'          => 'admincpp.getListTabAction',
        'permissions' => $perModule['tabaction'].'.list',
        'uses'        => 'AdminTabActionController@getListTabAction'
    ]);
    Route::get('/add', [
        'as'          => 'admincpp.getAddTabAction',
        'permissions' => $perModule['tabaction'].'.add',
        'uses'        => 'AdminTabActionController@getAddTabAction'
    ]);
    Route::post('/add', [
        'as'          => 'admincpp.postAddTabAction',
        'permissions' => $perModule['tabaction'].'.add',
        'uses'        => 'AdminTabActionController@postAddTabAction'
    ]);
    Route::get('/edit/{id}', [
        'as'          => 'admincpp.getEditTabAction',
        'permissions' => $perModule['tabaction'].'.edit',
        'uses'        => 'AdminTabActionController@getEditTabAction'
    ]);
    Route::post('/edit/{id}', [
        'as'          => 'admincpp.postEditTabAction',
        'permissions' => $perModule['tabaction'].'.edit',
        'uses'        => 'AdminTabActionController@postEditTabAction'
    ]);
});