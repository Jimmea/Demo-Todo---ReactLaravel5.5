<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Models\Menus\MenuRepository;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminMenuController extends AdminController
{
    public function __construct(MenuRepository $menuRepository)
    {
        $this->menu = $menuRepository;
    }

    /**
     * Created by : Hungokata
     * Time : 11:56 PM / 2/9/2017
     * Show danh sach menu
     * @param void
     * @return response
     */
    public function getList(Request $request)
    {
        $arrayField = [
            'mnu_picture', 'mnu_name','mnu_link', 'mnu_position', 'mnu_order','mnu_target', 'mnu_status'
        ];

        $this->setFilter($request, 'mnu_name', 'LIKE');
        $this->setFilter($request, 'mnu_position', '=');
        $filter = $this->getFilter();
        $seach  = '';
        $sort   = '';

        $dataView = [
            'menus'         => $this->menu->getAllMenu($arrayField, $filter, $seach, $sort),
            'configPosition'=> $this->menu->getConfigPosition(),
            'configTarget'  => $this->menu->getConfigTarget(),
        ];


        return view(ADMIN_VIEW.'menus.index')->with($dataView);
    }

    public function getAdd()
    {
        $dataView = $this->getDataViewDefault();
        return view(ADMIN_VIEW.'menus.add')->with($dataView);
    }

    public function getDataViewDefault()
    {
        return [
            'configPosition' => $this->menu->getConfigPosition(),
            'configTarget'   => $this->menu->getConfigTarget(),
            'menus'          => $this->menu->getAllMenu(['mnu_name']),
            'menu'           => array()
        ];
    }

    public function postAdd(MenuRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm['mnu_status'] = 1;
        $dataForm = $request->filterDataForm($dataForm);
        $this->menu->saveMenu($dataForm);
        set_flash_add_success();
        return redirect()->route('admincpp.getListMenu');
    }

    /**
     * Created by : BillJanny
     * Date: 12:57 AM - 2/17/2017
     * Show form cap nhat thong tin
     * @param int $mnu_id truong khoa chinh cua bang menu
     * @return response
     */
    public function getEdit($mnu_id)
    {
        $dataView = $this->getDataViewDefault();
        $dataView['menu'] = $this->menu->findMenuById($mnu_id);

        return view(ADMIN_VIEW.'menus.edit')->with($dataView);
    }

    /**
     * Created by : BillJanny
     * Date: 12:58 AM - 2/17/2017
     * Cap nhat lai thong tin menu
     * @param int $mnu_id : truong khoa chinh cua bang menu
     * @return response
     */
    public function postEdit(MenuRequest $request, $mnu_id)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $this->menu->updateMenuById($mnu_id, $dataForm);

        set_flash_update_success();
        return redirect()->route('admincpp.getListMenu');
    }

    public function getDelete($id)
    {
        $this->menu->deleteMenuById($id) ? set_flash_delete_success() : set_flash_delete_error();

        set_flash_update_success();
        return redirect()->route('admincpp.getListMenu');
    }

    public function postProcessQuickMenu(Request $request)
    {
        if ($request->ajax())
        {
            $mnu_id = get_value('id', 'int', 'POST');
            $action = strtolower(get_value('action', 'str', 'POST'));

            if (!$action) list($action, $orderValue, $mnu_id) = $this->getValueXEditTable();

            switch ($action)
            {
                case 'deleteall':
                    $mnu_id = get_value('id','arr', 'POST');
                    $this->menu->deleteMenuById($mnu_id);
                    break;

                case 'editorder':
                    if (!$orderValue) return 0;
                    $this->menu->updateByField($mnu_id, 'mnu_order', $orderValue);
                    break;

                case 'editstatus':
                    $this->menu->updateByField($mnu_id, 'mnu_status');
                    break;

                case 'editname':
                    $orderValue = get_value('value', 'str', 'POST');  if (!$orderValue) return 0;
                    $this->menu->updateByField($mnu_id, 'mnu_name', $orderValue);
                    break;
            }

            return $this->responseSuccess();
        }
        return $this->responseError();
    }
}
