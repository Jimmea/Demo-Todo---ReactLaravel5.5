<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 22/03/17
 * Time: 10:09
 */
// EVENT
Route::group(['prefix'=> 'event','middleware'=> 'checkPermission'], function () use ($perModule)
{
    Route::any('/',[
        'as'          => 'admincpp.getListEvent',
        'permissions' => $perModule['event'].'.list',
        'uses'        => 'AdminEventController@getListEvent'
    ]);

    Route::get('/add',[
        'as'          => 'admincpp.getAddEvent',
        'permissions' => $perModule['event'].'.add',
        'uses'        => 'AdminEventController@getAddEvent'
    ]);
    Route::post('/add',[
        'as'          => 'admincpp.postAddEvent',
        'permissions' => $perModule['event'].'.add',
        'uses'        => 'AdminEventController@postAddEvent'
    ]);
    Route::get('/edit/{id}',[
        'as'          => 'admincpp.getEditEvent',
        'permissions' => $perModule['event'].'.edit',
        'uses'        => 'AdminEventController@getEditEvent'
    ]);
    Route::post('/edit/{id}',[
        'as'          => 'admincpp.postEditEvent',
        'permissions' => $perModule['event'].'.edit',
        'uses'        => 'AdminEventController@postEditEvent'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'admincpp.getDeleteEvent',
        'permissions' => $perModule['event'].'.delete',
        'uses' => 'AdminEventController@getDeleteEvent'
    ]);

    Route::group(['prefix'=>'{evn_id}/new'], function () use ($perModule)
    {
        Route::get('/', [
            'as'   => 'admincpp.getListNewEvent',
            'permissions' => $perModule['new'].'.add',
            'uses' => 'AdminEventNewController@getListNewEvent'
        ]);
        Route::post('/add', [
            'as'   => 'admincpp.postAddNewEvent',
            'permissions' => $perModule['new'].'.add',
            'uses' => 'AdminEventNewController@postAddNewEvent'
        ]);
    });
});