<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Admins\AdminRepository;
use App\Models\AdminUserRights\AdminUserRightRepository;
use App\Models\Categories\CategoryRepository;
use App\Models\Modules\ModuleRepository;
use Illuminate\Http\Request;

class AdminAccountController extends AdminController
{
    public function __construct(AdminRepository $adminRepository,
                                ModuleRepository $moduleRepository,
                                CategoryRepository $categoryRepository,
                                AdminUserRightRepository $adminUserRightRepository)
    {
        $this->admin            = $adminRepository;
        $this->module           = $moduleRepository;
        $this->category         = $categoryRepository;
        $this->adminUserRight   = $adminUserRightRepository;
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
            'admin'             => null,
            'accessModule'      => '',
            'arrayActionAccess' => array(),
            'modules'           => $this->module->getAllData(),
            'categories'        => $this->category->getAllParentCategory(),
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
        $dataForm       = $request->filterDataForm($dataForm);
        $account        = $this->admin->storeData($dataForm);

        $accountLastId  = $account->adm_id;
        $moduleList     = $request->mod_id;

        // Insert vao admin_user_right
        if ($moduleList)
        {
            for ($i=0, $countModuleList = count($moduleList); $i< $countModuleList; $i++)
            {
                $adminUserRight = [
                    'adu_admin_id'        => $accountLastId,
                    'adu_admin_module_id' => $moduleList[$i],
                    'adu_add'             => get_value('adu_add'.$moduleList[$i], 'int', 'POST'),
                    'adu_edit'            => get_value('adu_edit'.$moduleList[$i], 'int', 'POST'),
                    'adu_delete'          => get_value('adu_delete'.$moduleList[$i], 'int', 'POST')
                ];
                $this->adminUserRight->storeData($adminUserRight);
            }
        }


        // Insert vao admin_user_category : xu ly sau

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
        // Select quyen truy cap
        $adminUserRight = $this->admin->findAccessById($adm_id);
        $accessModule = '';
        $arrayActionAccess = array();
        foreach ($adminUserRight as $value)
        {
            $accessModule .= "[" . $value['mod_id'] . "]";
            $arrayActionAccess[$value['mod_id']] = array(
                                                $value["adu_add"],
                                                $value["adu_edit"],
                                                $value["adu_delete"]);
        }

        $dataView = [
            'admin'             => $this->admin->findById($adm_id),
            'accessModule'      => $accessModule,
            'arrayActionAccess' => $arrayActionAccess,
            'modules'           => $this->module->getAllData(),
            'categories'        => $this->category->getAllParentCategory(),
        ];

        return view(ADMIN_VIEW. 'accounts.edit')->with($dataView);
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
        if ($request->has('adm_password')) $dataForm['adm_password'] = bcrypt($request->adm_password);
        $dataForm = $request->filterDataForm($dataForm);
        $this->admin->updateById($adm_id, $dataForm);
        // xoa thong tixn trong bang admin user right va insert thong tin moi
        $this->adminUserRight->deleteAdminId($adm_id);

        // Insert vao admin_user_right
        $accountLastId  = $adm_id;
        $moduleList     = $request->mod_id;
        if ($moduleList)
        {
            for ($i=0, $countModuleList = count($moduleList); $i< $countModuleList; $i++)
            {
                $adminUserRight = [
                    'adu_admin_id'        => $accountLastId,
                    'adu_admin_module_id' => $moduleList[$i],
                    'adu_add'             => get_value('adu_add'.$moduleList[$i], 'int', 'POST'),
                    'adu_edit'            => get_value('adu_edit'.$moduleList[$i], 'int', 'POST'),
                    'adu_delete'          => get_value('adu_delete'.$moduleList[$i], 'int', 'POST')
                ];
                $this->adminUserRight->storeData($adminUserRight);
            }
        }

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
                case 'deleteall':
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
