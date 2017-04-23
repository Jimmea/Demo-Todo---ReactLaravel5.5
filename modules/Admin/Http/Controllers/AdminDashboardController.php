<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Modules\ModuleRepository;

class AdminDashboardController extends AdminController
{
    public function __construct(ModuleRepository $moduleRepository)
    {
        $this->module = $moduleRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view(ADMIN_VIEW.'dashboards.index');
    }

    public function getContentDashboard()
    {
        return view(ADMIN_VIEW.'dashboards.section');
    }

    public function getMaster()
    {
        return view(ADMIN_VIEW.'dashboards.master');
    }
}
