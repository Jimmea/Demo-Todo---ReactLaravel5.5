<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ModuleRequest;


class AdminConfigController extends AdminController
{
    public function __construct()
    {

    }

    public function getListConfigAdmin()
    {
        return view(ADMIN_VIEW . 'configadmin.index');
    }

    public function addConfigAdmin()
    {
        return view(ADMIN_VIEW . 'configadmin.add');
    }

    public function postConfigAdmin(ModuleRequest $request)
    {

    }
}
