<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/10/2017
 * Time: 10:29 PM
 */

namespace App\Models\Categories;


interface CategoryRepository
{
    public function getTypeView();
    public function getConfigTypeCategory();
    public function getAllCategory($arrField= array(), $filter = array(), $search = false, $sort= array());
    public function updateCategoryHasChild($cate_parent_id, $value, $cate_id, $cate_type, $action);
    public function getAllParentCategory();
    public function storeCategory($attributes= array());
    public function checkExistCategoryChild($codition, $column);
    public function deleteCategoryById($cate_id);
    public function findById($cate_id);
    public function updateByField($id, $field, $value);
}