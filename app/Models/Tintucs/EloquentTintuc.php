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

    public function getListNewPaginate($filter, $sort, $limit=30)
    {
        $query = $this->model->whereRaw(1);
        // Ton tai filter
        if ($filter)
        {
            $query = $this->scopeFilter($query, $filter);
        }

        // Get admin
        $query = $this->scopeInforAdmin($query);

        // get category
        $query = $query->with([
            'categories' => function($q)
            {
                $q->select('cate_id', 'cate_name');
            }
        ]);

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
                                }
                            ])
                            ->leftJoin($tableContent, 'new_id', '=', 'nec_id')
                            ->where('new_id', $id)
                            ->first();

        return $query;

    }

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
     * @return
     */
    public function syncTag($instance, $tag_id = array())
    {
        return $instance->tags()->sync($tag_id);
    }


    /**
     * Inser noi dung text vao ben trong bang nay
     * @param string $table : Ten table se insert vao
     * @return mixed
     */
    public function storeNewContentByTable($table, $attribute = array())
    {
        return DB::table($table)->insert($attribute);
    }

    public function updateNewContentById($table, $id, $attribute)
    {
        return DB::table($table)->where('nec_id', $id)->update($attribute);
    }
}