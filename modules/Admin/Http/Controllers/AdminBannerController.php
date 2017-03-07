<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Banners\BannerRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\BannerRequest;

class AdminBannerController extends AdminController
{

    public function __construct(BannerRepository $bannerRepository)
    {
        $this->banner = $bannerRepository;
    }

    public function getListBanner(Request $request)
    {
        if ($request->ajax())
        {
            $field  = get_value('field', 'str', 'POST');
            $id     = get_value('record_id', 'int', 'POST');
            if ($field && $id)
            {
                switch ($field)
                {
                    case 'ban_status':
                        $this->banner->updateByField($id,$field);
                        break;
                }
                return $this->responseSuccess();
            }
            return $this->responseError();
        }

        // Lọc sản phẩm theo cac tieu chi sau
        $this->setFilter($request, 'ban_id', '=');
        $this->setFilter($request, 'ban_title', 'LIKE');

        $filter = $this->getFilter();
        $sort = [['ban_id', 'DESC']];

        $dataView  = [
            'banners'        => $this->banner->getListAll($filter, $sort),
            'defaultTarget'  => $this->getTarget(),
            'defaultStatus'  => $this->getArrayBoolean(),
        ];
        return view(ADMIN_VIEW . 'banners.index')->with($dataView);
    }

    public function getAddBanner()
    {
        $dataView = [
            'defaultStatus'  => $this->getArrayBoolean(),
            'defaultTarget'  => $this->getTarget(),
            'banner'         => array()
        ];
        return view(ADMIN_VIEW . 'banners.add')->with($dataView);
    }

    public function postAddBanner(BannerRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $dataForm['ban_admin_id'] = $this->getAdminId();
        $banner   = $this->banner->storeData($dataForm);

        // Truong hop khong co thi thanh link event
        if ($dataForm['ban_link'] == 0)
        {
            $link = '/e/' . $banner->ban_id  . '/'. str_remove_accent($dataForm['ban_title']);
            $banner->ban_isevent  = 1;
            $banner->ban_link     = $link;
            $banner->save();
        }
        
        set_flash_add_success();
        return redirect()->route('admincpp.getListBanner');
    }

    public function getEditBanner($id)
    {
        $dataView = [
            'defaultStatus'  => $this->getArrayBoolean(),
            'defaultTarget'  => $this->getTarget(),
            'banner'         => $this->banner->findById($id)
        ];
        return view(ADMIN_VIEW . 'banners.edit')->with($dataView);
    }

    public function postEditBanner(BannerRequest $request, $id)
    {
        $bannerSelect = $this->banner->findById($id);
        if (!$bannerSelect)
        {
            set_flash_update_error();
            return redirect()->back();
        }
        $dataForm       = $request->except('_token');
        $dataForm       = $request->filterDataForm($dataForm);
        $bannerUpdate   = $this->banner->updateById($id, $dataForm);
        if ($dataForm['ban_link'] == 0)
        {
            $link = '/e/' . $bannerUpdate->ban_id  . '/'. str_remove_accent($dataForm['ban_title']);
            $bannerUpdate->ban_isevent  = 1;
            $bannerUpdate->ban_link     = $link;
            $bannerUpdate->save();
        }
        set_flash_update_success();
        return redirect()->route('admincpp.getListBanner');
    }
}
