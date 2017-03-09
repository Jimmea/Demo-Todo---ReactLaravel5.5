<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 08/03/17
 * Time: 01:56
 */

namespace App\Models\Events;


use App\Repositories\BaseRepository;

class EloquentEvent extends BaseRepository implements EventRepository
{
    public function __construct(Event $event)
    {
        $this->model = $event;
    }

    public function getListEventPaginate($filter, $sort, $limit=30)
    {
        $query = $this->model->whereRaw(1);
        $query = $query->with([
                'category' => function($q)
                {
                    $q->select('cate_id', 'cate_name');
                }
        ]);

        // scopeFilter
        $query = $this->scopeFilter($query, $filter);

        // scopeAdmin
        $query = $this->scopeInforAdmin($query);

        // sap xep
        if ($sort)
        {
            list($col, $dir) = $sort;
            $query->orderBy($col, $dir);
        }

        return $limit ? $query->paginate($limit) : $query->get();
    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }

    public function updateByField($id, $field, $otherValue = '')
    {
        return parent::updateByField($id, $field, $otherValue);
    }

    public function updateById($id, $data)
    {
        return parent::updateById($id, $data);
    }

    public function findEventById($id)
    {
        $query = $this->model
                    ->with([
                        'category' => function($q)
                        {
                            $q->select('cate_id', 'cate_name');
                        }
                    ]);

        $query = $query->where('evn_id', $id)->first();

        return $query;
    }

    public function attachEventNewCategory($instance, $categoryId)
    {
        return $instance->category()->attach($categoryId);
    }

    public function syncEventNewCategory($instance, $categoryId)
    {
        return $instance->category()->sync($categoryId);
    }
}