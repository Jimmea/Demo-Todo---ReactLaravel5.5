<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\CategoryRepository;
use App\Models\CategoryBanners\CategoryBannerRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\CategoryBannerRequest;

class AdminCategoryBannerController extends AdminController
{
    public function __construct(CategoryRepository $categoryRepository,
                                CategoryBannerRepository $categoryBannerRepository)
    {
        $this->category         = $categoryRepository;
        $this->categoryBanner   = $categoryBannerRepository;
    }

    public function getListCategoryBanner($category_id, Request $request)
    {
        // Check ton tai category khong
        $category = $this->category->findById($category_id);

        // Cap nhat cac thong tin ajax
        if ($request->ajax())
        {
            $field = get_value('field', 'str', 'POST');
            $cabId = get_value('record_id', 'int', 'POST');

            if ($field && $cabId)
            {
                switch ($field)
                {
                    case 'cab_title' :
                    case 'cab_description' :
                        $value = get_value('value', 'str', 'POST');
                        $this->categoryBanner->updateByField($cabId, $field, $value);
                        break;

                    case 'cab_order' :
                        $value = get_value('value', 'int', 'POST');
                        $this->categoryBanner->updateByField($cabId, $field, $value);
                        break;

                    case 'cab_status':
                        $this->categoryBanner->updateByField($cabId, $field);
                        break;
                }
                return $this->responseSuccess();
            }
            return $this->responseError();
        }

        // Show view listing
        $this->setFilter($request, 'cab_title', 'LIKE');
        $filter          = $this->getFilter();
        $categoryBanners = $this->categoryBanner->getListBannerCategoryByCategoryId($category_id, $filter, '', 30);

        // Du lieu view
        $dataView = [
            'category'        => $category,
            'categoryId'      => $category_id,
            'configTarget'    => $this->getTarget(),
            'categoryBanners' => $categoryBanners
        ];
        return view(ADMIN_VIEW . 'categories_banner.index')->with($dataView);
    }

    public function getAddCategoryBanner($category_id)
    {
        $dataView = [
            'categoryBanner' => '',
            'configTarget'   => $this->getTarget(),
            'configStatus'   => $this->getArrayBoolean(),
            'category'       => $this->category->findById($category_id)
        ];
        return view(ADMIN_VIEW .'categories_banner.add')->with($dataView);
    }

    public function postAddCategoryBanner(CategoryBannerRequest $request, $category_id)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $dataForm['cab_admin_id'] = $this->getAdminId();
        $this->categoryBanner->storeDataByCategoryId($category_id, $dataForm);

        set_flash_add_success();
        return redirect()->route('admincpp.getListCategoryBanner', $category_id);
    }

    public function getEditCategoryBanner($category_id, $cab_id)
    {
        $dataView = [
            'configTarget'   => $this->getTarget(),
            'configStatus'   => $this->getArrayBoolean(),
            'category'       => $this->category->findById($category_id),
            'categoryBanner' => $this->categoryBanner->findById($cab_id)
        ];
        return view(ADMIN_VIEW .'categories_banner.edit')->with($dataView);
    }

    public function postEditCategoryBanner(CategoryBannerRequest $request, $category_id, $cab_id)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $this->categoryBanner->updateByCategoryIdAndCabId($category_id, $cab_id, $dataForm);

        set_flash_update_success();
        return redirect()->route('admincpp.getListCategoryBanner', $category_id);
    }

    public function getDeleteCategoryBanner()
    {

    }
}
