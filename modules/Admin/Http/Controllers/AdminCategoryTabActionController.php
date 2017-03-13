<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\CategoryRepository;
use App\Models\CategoryTabActions\CategoryTabActionRepository;
use App\Models\TabActions\ELoquentTabAction;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\CategoryTabActionRequest;

class AdminCategoryTabActionController extends AdminController
{
    public function __construct(CategoryRepository $categoryRepository,
                                CategoryTabActionRepository $categoryTabActionRepository,
                                ELoquentTabAction $eloquentTabAction)
    {
        $this->category = $categoryRepository;
        $this->categoryTabAction = $categoryTabActionRepository;
        $this->tabAction = $eloquentTabAction;
    }

    public function getListCategoryTabAction($category_id, Request $request)
    {

        if ($request->ajax())
        {
            $field      = get_value('field', 'str', 'POST');
            $record_id  = get_value('record_id', 'int', 'POST');
            if ($field && $record_id)
            {
                switch ($field)
                {
                    case 'cta_status':
                        $this->categoryTabAction->updateByField($record_id, $field);
                        break;
                }
                return $this->responseSuccess();
            }
            return $this->responseError();
        }

        $dataView = [
            'tabActions'         => $this->getTabAction(),
            'categories'         => $this->getCategory($category_id),
            'category'           => $this->category->findById($category_id),
            'categoryTabActions' => $this->categoryTabAction->getAllCategoryTabAction(['cta_category_id'=> $category_id])
        ];

        return view(ADMIN_VIEW . 'categories_tabactions.index')->with($dataView);
    }

    public function getTabAction()
    {
        return $this->tabAction->getPluck('ta_name', 'ta_id');
    }

    public function getCategory($category_id)
    {
        $filter = [
            ['cate_status','=', 1],
            ['cate_parent_id','=', $category_id]
        ];
        $categories  = $this->category->getAllCategory(['cate_id', 'cate_name'], $category_id, $filter);
        return $categories;
    }

    public function getAddCategoryTabAction($category_id)
    {
        $dataView = [
            'categoryTabAction' => '',
            'tabActions'        => $this->getTabAction(),
            'configStatus'      => $this->getArrayBoolean(),
            'categories'        => $this->getCategory($category_id),
            'category'          => $this->category->findById($category_id),
        ];
        return view(ADMIN_VIEW . 'categories_tabactions.add')->with($dataView);
    }

    public function postAddCategoryTabAction($category_id, CategoryTabActionRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $dataForm['cta_group_category_id'] = implode(',', $dataForm['cta_group_category_id']);
        $this->categoryTabAction->storeCategoryTabAction($category_id, $dataForm);
        set_flash_add_success();
        return redirect()->route('admincpp.getListCategoryTabAction', $category_id);
    }

    public function getEditCategoryTabAction($category_id, $cta_id)
    {
        $categoryTabActions = $this->categoryTabAction->findById($cta_id)->toArray();
        $categoryTabActions['cta_group_category_id'] = explode(',', $categoryTabActions['cta_group_category_id']);
        $dataView = [
            'cta_id'            => $cta_id,
            'tabActions'        => $this->getTabAction(),
            'configStatus'      => $this->getArrayBoolean(),
            'categories'        => $this->getCategory($category_id),
            'category'          => $this->category->findById($category_id),
            'categoryTabAction' => $categoryTabActions,
        ];
        return view(ADMIN_VIEW . 'categories_tabactions.edit')->with($dataView);
    }

    public function postEditCategoryTabAction($category_id, $cta_id, CategoryTabActionRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $dataForm['cta_group_category_id'] = implode(',', $dataForm['cta_group_category_id']);
        $this->categoryTabAction->updateCategoryTabAction($category_id, $cta_id, $dataForm);
        set_flash_update_success();
        return redirect()->route('admincpp.getListCategoryTabAction', $category_id);
    }
}
