<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 22/03/17
 * Time: 10:12
 */
Route::get('/access_denied', function ()
{
    return view(ADMIN_VIEW.'errors.403');
});