<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Menus\EloquentMenu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminMenuController extends Controller
{
    public function __construct(EloquentMenu $eloquentMenu)
    {
        $this->menu = $eloquentMenu;
    }

    /**
     * Created by : Hungokata
     * Time : 11:56 PM / 2/9/2017
     * Show danh sach menu
     * @param void
     * @return response
     */
    public function getList()
    {
        return view(ADMIN_VIEW.'menus.index');
    }


    public function getAdd()
    {
        $data = [
            'configPosition' => $configPosition = $this->menu->getConfigPosition(),
            'menu'           => array(),
            'menus'          => array()
        ];

        return view(ADMIN_VIEW.'menus.add')->with($data);
    }

    public function postAdd(Request $request)
    {
        dd($request->except('_token'));
        return view(ADMIN_VIEW.'menus.add');
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
