<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 03/03/17
 * Time: 23:39
 */

namespace App\Models\Tintucs;

use App\Repositories\BaseRepository;
use DB;

class EloquentTintuc extends BaseRepository implements TintucRepository
{
    public function __construct(Tintuc $tintuc)
    {
        $this->model = $tintuc;
    }

    public function countNewTrash($filter= array())
    {
        $queryCount = $this->model->onlyTrashed();

        // get today
        $today = array_get($filter, 'today');
        if($today)
        {
            $queryCount = $queryCount->whereRaw('Date(deleted_at)= CURDATE()');
        }

        return $queryCount->count();
    }


    public function restoreNewTrashById($id)
    {
        return $this->model->onlyTrashed()->find($id)->restore();
    }

    /**
     * Tim kiem tin tuc
     * @param array $filter : mang gia tri loc theo LIKE, =
     * @param $sort: mang gia tri sap xep
     * @param $limit : gioi han tren 1 trang
     * @param $filterAdvanced : dieu kien loc nang cao
     * @return
     */
    public function getListNewPaginate($filter, $sort, $limit=30, $filterAdvanced= array())
    {
        $query = $this->model->whereRaw(1);

        // Ton tai filter
        if ($filter)
        {
            $query = $this->scopeFilter($query, $filter);
        }

        // Ton tai eventCategory // Ton tai even_id
        $eventCategory  = array_get($filterAdvanced, 'evc_category_id');
        $eventId        = array_get($filterAdvanced, 'evc_event_id');
        if($eventId && $eventCategory)
        {
            $query = $query->join('event_new_category_users', 'encu_new_id', '=', 'new_id')
                            ->where('encu_category_id', $eventCategory);
        }

        // Relation ...
        $query->with([
            'tags' => function ($q)
            {
                $q->select('tag_id', 'tag_name');
            },
            'categories' => function($q)
            {
                $q->select('cate_id', 'cate_name');
            }        
        ]);

        // with tat ca cac tin da xoa
        $onlyTrashed = array_get($filterAdvanced, 'onlyTrashed');
        if ($onlyTrashed)
        {
            $query = $query->onlyTrashed();
        }

        // Get infomation admin
        $query = $this->scopeInforAdmin($query);
    
        // Ton tai $sorts
        if ($sort)
        {
            list($key_part1, $key_part2) = $sort;
            $query = $query->orderBy($key_part1, $key_part2);
        }

        return $query->paginate($limit);
    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }

    public function updateById($id, $attributes)
    {
        return parent::updateById($id, $attributes);
    }

    public function updateByField($id, $field, $otherValue = '')
    {
        return parent::updateByField($id, $field, $otherValue);
    }

    public function findByNewId($id)
    {
        $tableContent   = get_table_of_content_new($id);
        $query          = $this->model
                            ->with([
                                'tags' => function ($q)
                                {
                                    $q->select('tag_id', 'tag_name');
                                },
                                'categories'=> function($q)
                                {
                                    $q->select('cate_id', 'cate_name');
                                }
                            ])
                            ->leftJoin($tableContent, 'new_id', '=', 'nec_id')
                            ->where('new_id', $id)
                            ->first();

        return $query;

    }

    /*
    * Xoa tam thoi bang ban ghi tin tuc
    */
    public function delete($id)
    {
        return parent::delete($id);
    }

    /**
     * Gan mang tag_id vao bang tag_new
     * @param $instance : the instance of object tintuc
     * @param $tag_id : mang tag id
     * @return
     */
    public function attachTag($instance, $tag_id = array())
    {
        return $instance->tags()->attach($tag_id);
    }

    /**
     * Đồng bộ lại thông tin bảng tag_new
     * @param $instance : the instance of object tintuc
     * @param $tag_id : mang tag id
     * @return mixed
     */
    public function syncTag($instance, $tag_id = array())
    {
        return $instance->tags()->sync($tag_id);
    }

    
    /*
    * Gan mang the new product 
    * @param object $instance the instance of object tin tuc
    * @param array $categoryId  : mang category nguoi dufng chon
    * @return mixed
    */
    public function attachCategory($instance, $categoryId = array())
    {   
        return $instance->categories()->attach($categoryId);
    }
    
    /**
     * Sync lai thong tin bang tintuc_categories
     * @param object $instance the instance of object tin tuc
     * @param array $categoryId  : mang category nguoi dufng chon
     * @return mixed
    */
    public function syncCategory($instance, $categoryId = array())
    {
        return $instance->categories()->sync($categoryId);
    }
    

    /*
    * Luu thong tin content cua tin tuc vao bang phu hop ung voi id bang duoc kiem tra ben controller
    * @param string $table : ten table luu noi dung
    * @param array $attribute : mang du lieu duoc insert vao
    */
    public function storeNewContentByTable($table, $attribute = array())
    {
        return DB::table($table)->insert($attribute);
    }

    /*
    * Cap nhat thong tin content cua tin tuc vao bang phu hop ung voi id bang duoc kiem tra ben controller
    * @param string $table : ten table luu noi dung
    * @param integer $id : key chinh cua bang tin tuc
    * @param array $attribute : mang du lieu duoc insert vao
    */
    public function updateNewContentById($table, $id, $attribute)
    {
        return DB::table($table)->where('nec_id', $id)->update($attribute);
    }
}