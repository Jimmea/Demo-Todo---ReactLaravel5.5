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
    public function storeMenu($data);
    public function findMenuById($id);
    public function deleteMenuById($id);
    public function updateMenuById($id, $data);
    public function updateByField($id, $field, $value);
    public function checkExistMenuChild($condition = array(), $arrayColumn = array());
    public function updateMenuHasChild($parentId, $hasChild, $id, $action);
}