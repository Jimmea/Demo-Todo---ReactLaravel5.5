<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ModuleRequest;
use App\Models\Modules\ModuleRepository;
use Illuminate\Http\Request;

class AdminConfigController extends AdminController
{
    public function __construct(ModuleRepository $moduleRepository)
    {
        $this->module = $moduleRepository;
    }

    public function getListConfigAdmin(Request $request)
    {
        $this->setFilter($request, 'mod_name', 'LIKE');
        $filter = $this->getFilter();

        $dataView = [
            'modules' => $this->module->getAllData($filter)
        ];
        return view(ADMIN_VIEW . 'configadmin.index')->with($dataView);
    }

    public function getAddConfigAdmin()
    {
        $dataView = [
            'module' => array(),
        ];
        return view(ADMIN_VIEW . 'configadmin.add')->with($dataView);
    }

    public function postAddConfigAdmin(ModuleRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $this->module->storeData($dataForm);

        set_flash_add_success();
        return redirect()->route('admincpp.getListConfigAdmin');
    }

    public function getEditConfigAdmin($id=0)
    {
        $dataView = [
            'module' => $this->module->findById($id)
        ];
        return view(ADMIN_VIEW .  'configadmin.edit')->with($dataView);
    }

    public function postEditConfigAdmin(ModuleRequest $request, $id=0)
    {
        $dataForm = $request->except('_token');
        $this->module->updateData($id, $dataForm);

        set_flash_update_success();
        return redirect()->route('admincpp.getListConfigAdmin');
    }

    public function getDeleteConfigAdmin($id)
    {
        $this->module->deleteModule($id);

        set_flash_delete_success();
        return redirect()->route('admincpp.getListConfigAdmin');
    }

    public function postProcessQuickModule(Request $request)
    {
        if ($request->ajax())
        {
            $action = strtolower(get_value('action', 'str', 'POST'));
            switch ($action)
            {
                case 'deleteall':
                        $id = get_value('id', 'arr', 'POST');
                        $this->module->deleteModule($id);
                    break;
            }
            return $this->responseSuccess();
        }

        return $this->responseError();
    }
}
