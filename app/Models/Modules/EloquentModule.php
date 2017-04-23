<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/19/2017
 * Time: 1:40 PM
 */

namespace App\Models\Modules;
use App\Repositories\BaseRepository;

class EloquentModule extends BaseRepository implements ModuleRepository
{
    public function __construct(Module $module)
    {
        $this->model = $module;
    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }

    public function updateData($id, $attribute)
    {
        return $this->updateById($id, $attribute);
    }

    public function findById($id)
    {
        return parent::findById($id);
    }

    public function getAllData($filter= array(), $sort=['mod_order', 'ASC'], $limit=30)
    {
        return $this->getAll($filter, $sort, $limit);
    }

    public function deleteModule($id)
    {
        return $this->delete($id);
    }

    public function getModuleAdminAccess()
    {
        $isAdmin = get_session('isadmin');
        $adm_id  = get_session('adm_id');

        $query = $this->model;
        if ($isAdmin != 1)
        {
            $query = $query->join('admin_user_right', 'adu_admin_module_id', '=', 'mod_id')
                           ->where('adu_admin_id', $adm_id);
        }
        return $query->orderBy('mod_order')
                     ->orderBy('mod_name')
                     ->get();
    }
}