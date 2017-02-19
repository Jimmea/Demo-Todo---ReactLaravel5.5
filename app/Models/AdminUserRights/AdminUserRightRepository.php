<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/19/2017
 * Time: 11:52 PM
 */

namespace App\Models\AdminUserRights;


interface AdminUserRightRepository
{
    public function storeData($attribute);
}