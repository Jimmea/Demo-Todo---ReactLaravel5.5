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
            'menus' => $this->menu->getAllMenu($arrayField, $filter, $seach, $sort),
        ];
//        dd($dataView);

        return view(ADMIN_VIEW.'menus.index')->with($dataView);
    }


    public function getAdd()
    {
        $dataView = [
            'configPosition' => $this->menu->getConfigPosition(),
            'configTarget'   => $this->menu->getConfigTarget(),
            'menu'           => array(),
            'menus'          => array()
        ];

        return view(ADMIN_VIEW.'menus.add')->with($dataView);
    }


    public function postAdd(MenuRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $this->menu->saveMenu($dataForm);
        set_flash_add_success();
        return redirect()->route('admincpp.getListMenu');
    }

    public function getEdit()
    {
        return view(ADMIN_VIEW.'menus.add');
    }

    public function getDelete()
    {
        return view(ADMIN_VIEW.'menus.add');
    }

    public function postProcessQuick()
    {
        return view(ADMIN_VIEW.'menus.add');
    }
}
