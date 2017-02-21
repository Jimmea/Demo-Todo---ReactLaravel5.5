<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/4/2017
 * Time: 5:48 PM
 */

namespace App\Models\Admins;
use App\Repositories\BaseRepository;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Http\Request;

class EloquentAdmin extends BaseRepository implements AdminRepository
{
    public function __construct(Admin $admin)
    {
        $this->model = $admin;
    }

    public function getLimit($limit='')
    {
        return $limit ? $limit : $this->model->getLimit();
    }

    public function getListAccount($filter = array(), $sort = array(), $limit= 20)
    {
        return $this->getAll($filter, $sort, $limit);
    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }

    public function findById($id)
    {
        return parent::findById($id);
    }

    public function updateById($id, $data)
    {
        return parent::updateById($id, $data);
    }

    public function deleteByid($id)
    {
        return $this->delete($id);
    }

    public function updateByField($id, $field, $otherValue = '')
    {
        return parent::updateByField($id, $field, $otherValue);
    }

    public function findAccessById($id)
    {
        return $this->model->join('admin_user_right', 'adm_id', '=', 'adu_admin_id')
                           ->join('modules', 'mod_id', '=', 'adu_admin_module_id')
                           ->where('adm_id', $id)
                           ->select('admin_users.*', 'adu_add', 'adu_edit', 'adu_delete', 'mod_id', 'mod_name')
                           ->get();
    }

    public function mapAccessAction($data)
    {
        return $this->model->mapAccessAction($data);
    }
}