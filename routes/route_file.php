<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 16/03/17
 * Time: 00:46
 */
Route::get('/file', function () {
    return view('file.form');
});

Route::post('/file', [
    'as' => 'postFile',
    'uses' => 'Files\FileController@postFile'
]);