<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/4/2017
 * Time: 5:48 PM
 */

namespace App\Models\Admins;

use Illuminate\Http\Request;

interface interfaceAdmin
{
    public function getLimit($limit);
    public function validateRegister(Request $request, $id);
}