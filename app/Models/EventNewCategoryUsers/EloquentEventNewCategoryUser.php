<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 09/03/17
 * Time: 11:36
 */

namespace App\Models\EventNewCategoryUsers;


use App\Repositories\BaseRepository;

class EloquentEventNewCategoryUser extends BaseRepository implements EventNewCategoryUserRepository
{
    public function __construct(EventNewCategoryUser $eventNewCategoryUser)
    {
        $this->model = $eventNewCategoryUser;
    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }

    public function findByEventId($eventId)
    {
        $query = $this->model
                    ->where('encu_evn_id', $eventId)
                    ->select('encu_category_id', 'encu_new_id')
                    ->get()->toArray();
        return $query;
    }

    public function deleteByCondition($newId='', $eventId='', $categoryId='')
    {
        $query = $this->model->whereRaw(1)
                        ->where('encu_evn_id', $eventId)
                        ->where('encu_category_id', $categoryId);

        // Co new Id thi xoa di
        if ($newId) $query = $query->where('encu_new_id', $newId);

        return $query->delete();
    }
}