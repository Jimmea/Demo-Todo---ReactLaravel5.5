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
        $filter = $this->getFilter();
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
            'admin' => $this->admin->getById($adm_id)
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
    public function getDeleteAccount(Request $request, $id)
    {
        if ($id == 1)
        {
            set_flash('error', 'You not delete this user');
            return redirect()->back();
        }

        $admIdArr = $request->get('adm_id');

        $delete = $this->admin->delete($id);
        $delete ? set_flash('success', 'Delete a admin successful')
                : set_flash('error', 'Delete a admin not successful. Please refresh your browser');

        return redirect()->back();
    }

    public function getProcessQuickAccount(Request $request)
    {

    }
}
