<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\SuggestSearchs\SuggestSearchRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\SuggestSearchRequest;

class AdminSuggestSearchController extends AdminController
{
    public function __construct(SuggestSearchRepository $suggestSearchRepository)
    {
        $this->suggestSearch = $suggestSearchRepository;
    }

    public function getMapActionSearch()
    {
        $actionSearchs = config('search.actionsearch');
        $action =  array();
        if ($actionSearchs)
        {
            foreach ($actionSearchs as $item)
            {
                $action[$item['acs_id']] = $item['acs_title'];
            }
        }
        return $action;
    }

    public function getListSuggestSearch(Request $request)
    {
        // Cap nhat trang thai
        if ($request->ajax())
        {
            $field  = get_value('field', 'str', 'POST');
            $id     = get_value('record_id', 'int', 'POST');
            if ($field && $id)
            {
                switch ($field)
                {
                    case 'sus_status':
                        $this->suggestSearch->updateByField($id, $field);
                        break;
                }
                return $this->responseSuccess();
            }
            return $this->responseError();
        }
        // Search thong tin
        $this->setFilter($request, 'sus_name', 'LIKE');
        $this->setFilter($request, 'sus_action', '=');
        $filter = $this->getFilter();

        $sort   = ['sus_id', 'DESC'];
        $limit  = 30;
        $dataView = [
            'configActionSearch' => $this->getMapActionSearch(),
            'suggestSearchs'     => $this->suggestSearch->getAll($filter, $sort, $limit)
        ];
        return view(ADMIN_VIEW . 'suggest_searchs.index')->with($dataView);
    }

    public function getAddSuggestSearch()
    {
        $dataView = [
            'configActionSearch' => $this->getMapActionSearch(),
            'configStatus'       => $this->getArrayBoolean(),
            'suggestSearch'      => ''
        ];
        return view(ADMIN_VIEW . 'suggest_searchs.add')->with($dataView);
    }

    public function postAddSuggestSearch(SuggestSearchRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $dataForm['sus_admin_id'] = $this->getAdminId();
        $this->suggestSearch->storeData($dataForm);

        set_flash_add_success();
        return redirect()->route('admincpp.getListSuggestSearch');
    }

    public function getEditSuggestSearch($id)
    {
        $dataView = [
            'configActionSearch' => $this->getMapActionSearch(),
            'configStatus'       => $this->getArrayBoolean(),
            'suggestSearch'      => $this->suggestSearch->findById($id),
        ];
        return view(ADMIN_VIEW . 'suggest_searchs.edit')->with($dataView);
    }

    public function postEditSuggestSearch(SuggestSearchRequest $request, $id)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $this->suggestSearch->updateById($id, $dataForm);

        set_flash_update_success();
        return redirect()->route('admincpp.getListSuggestSearch');
    }

    public function getDeleteSuggestSearch($id)
    {

    }
}
