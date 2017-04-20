<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\ConfigurationRequest;
use App\Models\Configurations\ConfigurationRepository;

class AdminConfigurationController extends AdminController
{
    public function __construct(ConfigurationRepository $configurationRepository)
    {
        $this->configuration = $configurationRepository;
    }

    public function getEdit()
    {
        $configuration = $this->configuration->findById(1);
        $configuration = $configuration ? $configuration : array();

        $dataView = [
            'configuration' => $configuration
        ];

        return view(ADMIN_VIEW.'configurations.edit')->with($dataView);
    }

    public function postEdit(ConfigurationRequest $request, $id)
    {
        $dataForm   = $request->except('_token');
        $dataForm['con_admin_id'] = $this->getAdminId();
        $dataForm   = $request->filterDataForm($dataForm);

        $this->configuration->updateOrCreateData($id, $dataForm);
        set_flash_update_success();
        return redirect()->back();
    }
}
