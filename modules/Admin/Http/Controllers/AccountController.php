<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Admins\AdminRepository;
use Illuminate\Http\Request;

class AccountController extends AdminController
{
    public function __construct(AdminRepository $adminRepository)
    {
        $this->admin = $adminRepository;
    }

    /**
     * Show danh sach account
     * @param void
     * @return void
     */
    public function getList(Request $request)
    {
        $limit = $this->admin->getLimit();
        $this->setFilter($request, 'adm_loginname', 'LIKE');
        $this->setFilter($request, 'adm_email', 'LIKE');

        $filter = $this->getFilter();
        $sort   = ['adm_id', 'DESC'];

        $dataView = [
            'admins' => $this->admin->getListAccount($filter, $sort, $limit)
        ];

        return view(ADMIN_VIEW.'accounts.list')->with($dataView);
    }

    /**
     * Show form add a account
     * @param void
     * @return void
     */
    public function getAdd()
    {
        $dataView = [
            'admin' => null,
        ];
        return view(ADMIN_VIEW.'accounts.add')->with($dataView);
    }

    /**
     * Thêm mới một bản ghi
     * @param void
     * @return reponse
     */
    public function postAdd(AccountRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm['adm_password'] = bcrypt($dataForm['adm_password']);
        $dataForm['adm_admin_id'] = $this->getAdminId();
        $dataForm = $request->filterDataForm($dataForm);

        $this->admin->storeData($dataForm);
        set_flash_add_success();
        return redirect()->route('admincpp.getListAccount');
    }

    /**
     * Show form sửa thông tin một bản ghi
     * @param int $adm_id : truong khoa chinh cua bang
     * @return void
     */
    public function getEdit($adm_id)
    {
        $data = [
            'admin' => $this->admin->findById($adm_id)
        ];

        return view(ADMIN_VIEW. 'accounts.edit')->with($data);
    }

    /**
     * Cap nhat lai thong tin cua ban ghi
     * @param int $adm_id : truong khoa chinh cua bang
     * @return void
     */
    public function postEdit(AccountRequest $request, $adm_id)
    {
        $dataForm = $request->except('_token');
        $dataForm['adm_admin_id'] = $this->getAdminId();
        if (isset($data['adm_password']) && $data['adm_password'])
            $data['adm_password'] = bcrypt($data['adm_password']);
        $dataForm = $request->filterDataForm($dataForm);
        $this->admin->updateById($adm_id, $dataForm);

        set_flash_update_success();
        return redirect()->route('admincpp.getListAccount');
    }

    /**
     * Xoa di mot ban ghi
     * @param int $id : truong  khoa chinh cua bang
     * @return void
     */
    public function getDelete($id)
    {
        if ($id == 1)
        {
            set_flash_delete_error();
            return redirect()->back();
        }

        $this->admin->deleteByid($id);
        set_flash_delete_success();

        return redirect()->back();
    }

    /**
     * Xu ly nhanh cac hanh dong
     * @param void
     * @return json
     */
    public function getProcessQuick(Request $request)
    {
        if ($request->ajax())
        {
            $action     = strtolower(get_value('action','str', 'POST'));
            switch ($action)
            {
                case 'deletemany':
                    $adminId    = get_value('id','arr', 'POST');
                    // Khong cho phep xoa di phan tu admin dau tien
                    foreach ($adminId as $key => $value)
                    {
                        if ($value == 1) unset($adminId[$key]);
                    }
                    $this->admin->deleteByid($adminId);
                    break;

                case 'editstatus':
                    $adminId    = get_value('id','int', 'POST');
                    $this->admin->updateByField($adminId, 'adm_active');
                    break;
            }

            return $this->responseSuccess();
        }
        return $this->responseError();
    }
}
