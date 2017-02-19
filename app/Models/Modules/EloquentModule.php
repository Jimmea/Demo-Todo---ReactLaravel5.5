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
}