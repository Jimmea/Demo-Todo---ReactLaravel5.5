<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/10/2017
 * Time: 10:29 PM
 */

namespace App\Models\Categories;


interface InterfaceCategory
{
    public function getTypeView();
    public function getConfigTypeCategory();
    public function getAllCategory($arrField= array(), $filter = array(), $searchCateory = false);
    public function updateCategoryHasChild($cate_parent_id, $value, $cate_id, $cate_type, $action);
    public function storeCategory($attributes= array());
    public function checkExistCategoryChild($codition, $column);
    public function deleteCategoryById($cate_id);
}