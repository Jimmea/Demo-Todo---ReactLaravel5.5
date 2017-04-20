<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 12/03/17
 * Time: 22:06
 */

namespace App\Models\CategoryTabActions;


interface CategoryTabActionRepository
{
    public function storeCategoryTabAction($category_id, $attributes);
    public function getAllCategoryTabAction($filter);
    public function updateCategoryTabAction($category_id, $cta_id, $attributes);
}