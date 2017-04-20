<?php
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