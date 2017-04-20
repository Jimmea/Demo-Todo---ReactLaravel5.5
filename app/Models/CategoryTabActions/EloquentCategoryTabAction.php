<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 12/03/17
 * Time: 22:06
 */

namespace App\Models\CategoryTabActions;


use App\Models\Categories\CategoryRepository;
use App\Repositories\BaseRepository;

class EloquentCategoryTabAction extends BaseRepository implements CategoryTabActionRepository
{
    public function __construct(CategoryTabAction $categoryTabAction, CategoryRepository $categoryRepository)
    {
        $this->model = $categoryTabAction;
        $this->category = $categoryRepository;
    }

    public function storeCategoryTabAction($category_id, $attributes)
    {
        $category = $this->category->findById($category_id);
        $queryCreate =  $category->categoryTabActions()->create($attributes);
        return $queryCreate;
    }

    public function updateCategoryTabAction($category_id, $cta_id, $attributes)
    {
        $this->category->findById($category_id);
        $queryUpdate = $this->updateById($cta_id, $attributes);
        return $queryUpdate;
    }

    public function getAllCategoryTabAction($filter= array())
    {
        $query = $this->model->with('category');

        // neu co cta_category_id
        $ctaCategoryId = array($filter, 'cta_category_id');
        if ($ctaCategoryId)
        {
            $query = $query->where('cta_category_id', $ctaCategoryId);
        }
        $dbQuery =  $query->get()->toArray();

        $data    = array();
        if ($dbQuery)
        {
            foreach ($dbQuery as $item)
            {
                $listCategoryId = explode(',', $item['cta_group_category_id']);
                $item['cta_group_category_id'] = $this->category->getListCategoryByListCategoryId($listCategoryId, ['cate_name']);
                $data[] = $item;
            }
        }
        return $data;
    }

}