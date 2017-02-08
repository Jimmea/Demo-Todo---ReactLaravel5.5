<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/4/2017
 * Time: 5:48 PM
 */

namespace App\Models\Admins;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class EloquentAdmin extends BaseRepository implements InterfaceAdmin
{
    public function __construct(Admin $admin)
    {
        $this->model = $admin;
    }

    /**
     * Created by : BillJanny
     * Date: 12:38 PM - 2/5/2017
     * Get limit cua bang admin
     * @param int $limit : so ban ghi tren moi trang
     * @return int
     */
    public function getLimit($limit='')
    {
        return $limit ? $limit : $this->model->getLimit();
    }

    /**
     * Created by : BillJanny
     * Date: 12:39 PM - 2/5/2017
     * Validate request
     * @param int $id : truong khoa chiinh cua bang admin_users
     * @return void
     */
    public function validateRegister(Request $request, $adm_id = '')
    {
        $rules = [
            'adm_loginname'         => 'required|unique:admin_users,adm_loginname,' . $adm_id . ',adm_id',
            'adm_name'              => 'required',
            'adm_email'             => 'required|email|unique:admin_users,adm_email,' . $adm_id . ',adm_id',
            'adm_password'          => 'required',
            'adm_phone'             => 'regex:/^[0-9]+$/',
        ];

        $message = [
            'adm_loginname.required'          => 'The login name is not blank',
            'adm_loginname.unique'            => 'The login name is already',
            'adm_name.required'               => 'The full name is not blank',
            'adm_email.required'              => 'The email is not blank',
            'adm_email.unique'                => 'The email is already',
            'adm_email.email'                 => 'The email is invalid',
            'adm_phone.regex'                 => 'The phone is invalid. The phone is number',
            'adm_password.required'           => 'The password is not blank',
        ];

        $this->validate($request, $rules, $message);
    }

}