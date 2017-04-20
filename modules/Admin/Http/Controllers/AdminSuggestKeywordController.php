<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\SuggestKeywords\SuggestKeywordRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\SuggestKeywordRequest;

class AdminSuggestKeywordController extends AdminController
{

    protected $position = [
            1 => 'Dưới thanh search',
            2 => 'Tìm kiếm nổi bật',
            3 => 'Hiển thị dưới footer'
    ];

    public function __construct(SuggestKeywordRepository $suggestKeywordRepository)
    {
        $this->suggestKeyword = $suggestKeywordRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getListSuggestKeyword(Request $request)
    {
        if($request->ajax())
        {
            $field  = get_value('field', 'str', 'POST');
            $id     = get_value('record_id', 'int', 'POST');
            if ($field && $id)
            {
                switch ($field)
                {
                    case 'suk_status':
                        $this->suggestKeyword->updateByField($id, $field);
                        break;
                }
                return $this->responseSuccess();
            }
            return $this->responseError();
        }
        $this->setFilter($request, 'suk_name', 'LIKE');
        $this->setFilter($request, 'suk_position', '=');
        $filter = $this->getFilter();

        $sort   = ['suk_id', 'DESC'];
        $dataView = [
            'configPosition'  => $this->position,
            'configTarget'   => $this->getTarget(),
            'suggestKeywords' => $this->suggestKeyword->getListKeywordPaginate($filter, $sort, 30)
        ];
        return view(ADMIN_VIEW . 'suggest_keywords.list')->with($dataView);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function getAddSuggestKeyword()
    {
        $dataView = [
            'configStatus'   => $this->getArrayBoolean(),
            'configTarget'   => $this->getTarget(),
            'configPosition' => $this->position,
            'suggestKeyword' => ''
        ];
        return view(ADMIN_VIEW . 'suggest_keywords.add')->with($dataView);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function postAddSuggestKeyword(SuggestKeywordRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $dataForm['suk_admin_id'] = $this->getAdminId();
        $this->suggestKeyword->storeData($dataForm);
        set_flash_add_success();
        return redirect()->route('admincpp.getListSuggestKeyword');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function getEditSuggestKeyword($id)
    {
        $dataView = [
            'configStatus'   => $this->getArrayBoolean(),
            'configTarget'   => $this->getTarget(),
            'configPosition' => $this->position,
            'suggestKeyword' => $this->suggestKeyword->findById($id),
        ];
        return view(ADMIN_VIEW. 'suggest_keywords.edit')->with($dataView);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function postEditSuggestKeyword(SuggestKeywordRequest $request, $id)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $this->suggestKeyword->updateById($id, $dataForm);
        set_flash_update_success();
        return redirect()->route('admincpp.getListSuggestKeyword');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function getDeleteSuggestKeyword()
    {

    }
}
