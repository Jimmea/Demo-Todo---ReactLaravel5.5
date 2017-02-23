<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\BannerRequest;

class AdminBannerController extends AdminController
{

    public function __construct()
    {

    }

    public function getListBanner()
    {
        return view(ADMIN_VIEW . 'banners.index');
    }

    public function getAddBanner()
    {
        return view(ADMIN_VIEW . 'banners.add');
    }

    public function postAddBanner(BannerRequest $request)
    {
        return redirect()->route('admincpp.getListBanner');
    }

    public function getEditBanner($id)
    {
        return view(ADMIN_VIEW . 'banners.edit');
    }

    public function postEditBanner(BannerRequest $request, $id)
    {
        return redirect()->route('admincpp.getListBanner');
    }
}
