<?php

Route::group(['middleware' => 'web', 'prefix' => 'fastfood', 'namespace' => 'Modules\FastFood\Http\Controllers'], function()
{
    Route::get('/', 'FastFoodController@index');
});
