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

    public function getListNew()
    {

    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }

    public function updateById($id, $attributes)
    {

    }

    public function findById($id)
    {

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
}