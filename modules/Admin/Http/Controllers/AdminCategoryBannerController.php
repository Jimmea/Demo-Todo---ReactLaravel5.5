<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\CategoryRepository;
use Illuminate\Http\Request;

class AdminCategoryBannerController extends AdminController
{
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository;
    }

    public function getListCategoryBanner()
    {

    }

    public function getAddCategoryBanner($category_id)
    {
        $category = $this->category->findById($category_id);
        $dataView = [
            'category'       => $category,
            'categoryBanner' => '',
            'configTarget'   => $this->getTarget(),
            'configStatus'   => $this->getArrayBoolean()
        ];
        return view(ADMIN_VIEW .'categorie_banners.add')->with($dataView);
    }

    public function postAddCategoryBanner( $request)
    {

    }

    public function getEditCategoryBanner()
    {

    }

    public function postEditCategoryBanner()
    {

    }

    public function deleteCategoryBanner()
    {

    }
}
