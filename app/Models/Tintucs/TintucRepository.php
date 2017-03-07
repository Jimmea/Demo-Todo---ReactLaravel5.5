<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 03/03/17
 * Time: 23:39
 */

namespace App\Models\Tintucs;


interface TintucRepository
{
    public function getListNewPaginate($filter, $sort, $limit);
    public function storeData($attributes);
    public function updateById($id, $attributes);
    public function updateByField($id, $field, $otherValue);
    public function findByNewId($id);
    public function delete($id);
    public function attachTag($instance, $tag_id = array());
    public function syncTag($instance, $tag_id = array());
    public function storeNewContentByTable($table, $attribute);
    public function updateNewContentById($table, $id, $attribute);
}