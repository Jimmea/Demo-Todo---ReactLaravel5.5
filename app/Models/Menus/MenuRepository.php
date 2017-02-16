<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/10/2017
 * Time: 12:47 AM
 */

namespace App\Models\Menus;

interface MenuRepository
{
    public function getAllMenu($arrayColumn, $filter, $search, $sort);
    public function getConfigPosition();
    public function getConfigTarget();
    public function saveMenu($data);
}