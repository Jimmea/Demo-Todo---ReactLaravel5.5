<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', function() {
    return view('todo');
});

Route::group(['prefix' => 'todos', 'namespace'=> 'API'], function () {
    Route::get('', 'TodoController@all');    
    Route::post('destroy', 'TodoController@destroy');    
    Route::post('store', 'TodoController@store');    
    Route::post('done', 'TodoController@done');    
    Route::post('undone', 'TodoController@unDone');    
});