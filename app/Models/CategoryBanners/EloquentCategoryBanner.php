<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 11/03/17
 * Time: 12:18
 */

namespace App\Models\CategoryBanners;

use App\Models\Categories\Category;
use App\Models\Categories\CategoryRepository;
use App\Repositories\BaseRepository;

class EloquentCategoryBanner extends BaseRepository implements CategoryBannerRepository
{
    public function __construct(CategoryBanner $categoryBanner,
                                CategoryRepository $categoryRepository)
    {
        $this->model    = $categoryBanner;
        $this->category = $categoryRepository;
    }

    public function getListBannerCategoryByCategoryId($categoryId='', $filter='', $sort='', $limit="")
    {
        $query = $this->model->with('category');

        // Ton tai category id
        if ($categoryId) $query = $query->where('cab_category_id', $categoryId);

        // Lay thong tin admin
        $query = $this->scopeInforAdmin($query);

        // loc thong tin
        if ($filter) $query = $this->scopeFilter($query, $filter);

        // sap xep
        $sort  = $sort ? $sort : [['cab_id', 'DESC']];
        $query = $this->scopeSort($query, $sort);

        return $limit ? $query->paginate(30) : $query->get();
    }

    public function findById($cab_id='')
    {
        return parent::findById($cab_id);
    }

    public function storeDataByCategoryId($category_id, $attributes)
    {
        $category = $this->category->findById($category_id);
        $queryCreate = $category->categoryBanner()->create($attributes);
        return $queryCreate;
    }

    public function updateByCategoryIdAndCabId($category_id, $cab_id, $attributes)
    {
        $this->category->findById($category_id);
        $queryUpdate = $this->updateById($cab_id, $attributes);
        return $queryUpdate;
    }
}