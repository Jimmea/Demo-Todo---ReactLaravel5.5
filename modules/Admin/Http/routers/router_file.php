<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 22/03/17
 * Time: 10:11
 */
Route::group(['prefix'=> 'files', 'namespace' => 'Files'], function () {
    Route::post('/upload', [
        'as'     => 'uploadFileAjax',
        'uses'   => 'AdminFileController@uploadFileAjax'
    ]);
    Route::post('/delete', [
        'as'     => 'deleteFile',
        'uses'   => 'AdminFileController@deleteFile'
    ]);
});