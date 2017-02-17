<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ConfigurationRequest;
use App\Models\Configurations\ConfigurationRepository;

class ConfigurationController extends AdminController
{
    public function __construct(ConfigurationRepository $configurationRepository)
    {
        $this->configuration = $configurationRepository;
    }

    public function getEdit()
    {
        $dataView = [
            'configuration' => $this->configuration->findById(1)
        ];

        return view(ADMIN_VIEW.'configurations.edit')->with($dataView);
    }

    public function postEdit(ConfigurationRequest $request, $id)
    {
        $dataForm = $request->except('_token');
        $dataForm['con_admin_id'] = $this->getAdminId();
        $dataForm = $request->filterDataForm($dataForm);
        $this->configuration->updateById($id, $dataForm);

        set_flash_update_success();
        return redirect()->back();
    }
}
