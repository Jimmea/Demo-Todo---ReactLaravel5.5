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
    public function makeCollectTionCategory($categories);
    public function getAllCategory($fields= array(), $parent_id, $filters = array(), $sort= array());
    public function updateCategoryHasChild($cate_parent_id, $value, $cate_id, $cate_type, $action);
    public function getAllParentCategory($fields=array(), $pluck= array());
    public function checkExistCategoryChild($codition, $column);
    public function findById($cate_id);
    public function storeCategory($attributes= array());
    public function updateByField($id, $field, $value);
    public function deleteCategoryById($cate_id);
    public function getCategoryByType($type);
    public function getListCategoryByListCategoryId($category_id = array());

}