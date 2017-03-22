<?php
/**
 * File nay load view dashboard
 * @param
 * @return
 */

// Master khong co tab
Route::get('/master', [
    'as'  => 'admincpp.master',
    'uses'=> 'AdminController@getMaster'
]);

Route::get('/', [
    'as'    => 'admincpp.getHomeAdmin',
    'uses'  => 'AdminDashboardController@index'
]);

Route::get('/dashboard', [
    'as'    => 'admincpp.getdashboard',
    'uses'  => 'AdminDashboardController@getContentDashboard'
]);