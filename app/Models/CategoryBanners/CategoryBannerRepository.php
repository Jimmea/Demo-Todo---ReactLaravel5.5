<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 11/03/17
 * Time: 12:19
 */

namespace App\Models\CategoryBanners;


interface CategoryBannerRepository
{
    public function getListBannerCategoryByCategoryId($categoryId,$filter, $sort, $limit);
    public function findById($cab_id);
    public function storeDataByCategoryId($category_id, $attributes);
    public function updateByCategoryIdAndCabId($category_id, $cab_id, $attributes);
}