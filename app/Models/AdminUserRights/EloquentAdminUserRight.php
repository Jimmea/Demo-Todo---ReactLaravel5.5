<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/19/2017
 * Time: 11:53 PM
 */

namespace App\Models\AdminUserRights;
use App\Repositories\BaseRepository;

class EloquentAdminUserRight extends BaseRepository implements AdminUserRightRepository
{
    public function __construct(AdminUserRight $adminUserRight)
    {
        $this->model = $adminUserRight;
    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }

    public function deleteAdminId($id)
    {
        return $this->model->where('adu_admin_id', $id)->delete();
    }

    public function findAdminRightBy($condition = array())
    {
        // get admin_id
        $adm_id = array_get($condition, 'adm_id');
        // get mod_id
        $mod_id = array_get($condition, 'mod_id');

        return $this->model->where('adu_admin_id', $adm_id)
                    ->where('adu_admin_module_id', $mod_id)
                    ->first();
    }
}