<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Admins\EloquentAdmin;
use Illuminate\Http\Request;


class AccountController extends AdminController
{
    public function __construct(EloquentAdmin $eloquentAdmin)
    {
        $this->admin = $eloquentAdmin;
    }

    /**
     * Created by : Hungokata
     * Time : 1:55 PM / 2/4/2017
     * @param
     * @return void
     */
    public function getList(Request $request)
    {
        $limit = $this->admin->getLimit();
        $this->setFilter($request, 'adm_loginname', 'LIKE');
        $this->setFilter($request, 'adm_email', 'LIKE');


        $sort   = ['adm_id', 'DESC'];

        $data = [
            'admins' => $this->admin->getAll($filter, $sort, $limit)
        ];


        return view(ADMIN_VIEW.'accounts.list')->with($data);
    }

    /**
     * Created by : Hungokata
     * Time : 1:55 PM / 2/4/2017
     * @param
     * @return void
     */
    public function getAdd()
    {
        $admin = null;
        return view(ADMIN_VIEW.'accounts.add', compact('admin'));
    }

    /**
     * Created by : Hungokata
     * Time : 1:55 PM / 2/4/2017
     * Thêm mới một bản ghi
     * @param void
     * @return reponse
     */
    public function postAdd(Request $request)
    {
        $this->admin->validateRegister($request);
        $data = $request->except('_token');
        $data['adm_active'] = 1;
        $data['adm_password'] = bcrypt($data['adm_password']);
        $admin = $this->admin->store($data);

        set_flash('success', 'Create a new admin successful');
        return redirect()->route('admincpp.getListAccount');
    }

    /**
     * Created by : Hungokata
     * Time : 1:55 PM / 2/4/2017
     * Shơ form sửa thông tin một bản ghi
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
     * Created by : Hungokata
     * Time : 1:55 PM / 2/4/2017
     * Cap nhat lai thong tin cua ban ghi
     * @param int $adm_id : truong khoa chinh cua bang
     * @return void
     */
    public function postEdit(Request $request, $adm_id)
    {
        $this->admin->validateRegister($request, $adm_id);
        $data = $request->except('_token');
        if ($data['adm_password'])
        {
            $data['adm_password'] = bcrypt($data['adm_password']);
        }
        $admin = $this->admin->update($adm_id, $data);

        set_flash('success', 'Update a admin successful');
        return redirect()->route('admincpp.getListAccount');
    }

    /**
     * Created by : Hungokata
     * Time : 1:40 AM / 2/5/2017
     * @param int $id : truong  khoa chinh cua bang
     * @return void
     */
    public function getDelete(Request $request, $id)
    {
        if ($id == 1)
        {
            set_flash('error', 'You not delete this user');
            return redirect()->back();
        }

        $admIdArr = $request->get('adm_id');
        $this->admin->delete($id);
        set_flash('success', 'Delete a admin successful');

        return redirect()->back();
    }

    /**
     * Created by : BillJanny
     * Date: 11:10 PM - 2/8/2017
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
                    $this->admin->delete($adminId);
                    return response()->json(['status'=>1]);
                    break;

                case 'editone':
                    $adminId    = get_value('id','int', 'POST');
                    $admin      = $this->admin->findById($adminId);
                    $active     = ($admin->adm_active == 1) ? 0 : 1;
                    $admin->adm_active = $active;
                    $admin->save();

                    return response()->json(['status'=>1, 'msg'=> trans('admin::message.message_update_success')]);
                    break;
            }
        }
    }
}
