<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class AdminController extends Controller
{
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
