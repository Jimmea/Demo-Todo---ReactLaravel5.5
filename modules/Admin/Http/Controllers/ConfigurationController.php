<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ConfigurationRequest;
use Illuminate\Http\Request;

class ConfigurationController extends AdminController
{
    public function __construct()
    {

    }

    public function getEdit()
    {
        return view(ADMIN_VIEW.'configurations.edit');
    }

    public function postEdit(ConfigurationRequest $request, $id)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);

    }
}
