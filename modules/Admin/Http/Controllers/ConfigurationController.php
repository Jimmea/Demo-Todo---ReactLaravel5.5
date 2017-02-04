<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ConfigurationController extends Controller
{

    /**
     * Created by : Hungokata
     * Time : 14:21 / 03/02/17
     * Lay danh sach cau hinh
     *
     * @param void
     * @return void
     */
    public function getEdit()
    {
        return view(ADMIN_VIEW.'configurations.edit');
    }

    /**
     * Created by : BillJanny
     * Date: 14:22 - 03/02/17
     * Sua thong tin cau hinh
     * @param  int $id : truong khoa chinh cua bang cau hinh
     * @return response
     */
    public function postEdit(Request $request, $id)
    {

    }
}
