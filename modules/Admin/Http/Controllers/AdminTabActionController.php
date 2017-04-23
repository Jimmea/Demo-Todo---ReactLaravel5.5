<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\TabActions\ELoquentTabAction;
use Modules\Admin\Http\Requests\TabActionRequest;
use Illuminate\Http\Request;

class AdminTabActionController extends AdminController
{
    public function __construct(ELoquentTabAction $eloquentTabAction)
    {
        $this->tabAction = $eloquentTabAction;
    }

    public function getListTabAction(Request $request)
    {
        if ($request->ajax())
        {
            $field  = get_value('field', 'str', 'POST');
            $id     = get_value('record_id', 'int', 'POST');
            $value  = get_value('value', 'str', 'POST');

            if ($field && $id)
            {
                switch ($field)
                {
                    case 'ta_name':
                        $this->tabAction->updateByField($id, $field, $value);
                        break;
                }
                return $this->responseSuccess();
            }
            return $this->responseError();
        }
        $dataView = [
            'tabActions' => $this->tabAction->getAll(array(), ['ta_id', 'DESC']),
        ];
        return view(ADMIN_VIEW . 'tabactions.list')->with($dataView);
    }

    public function getAddTabAction()
    {
        $dataView = [
            'tabAction' => ''
        ];
        return view(ADMIN_VIEW . 'tabactions.add')->with($dataView);
    }

    public function postAddTabAction(TabActionRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $this->tabAction->storeData($dataForm);
        set_flash_add_success();
        return redirect()->route('admincpp.getListTabAction');
    }

    public function getEditTabAction($id)
    {
        $dataView = [
            'tabAction' => $this->tabAction->findById($id)
        ];
        return view(ADMIN_VIEW. 'tabactions.edit')->with($dataView);
    }

    public function postEditTabAction(TabActionRequest $request, $id)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $this->tabAction->updateById($id, $dataForm);
        set_flash_add_success();
        return redirect()->route('admincpp.getListTabAction');
    }
}
