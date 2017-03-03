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
    public function getListNew();
    public function storeData($attributes);
    public function updateById($id, $attributes);
    public function findById($id);
    public function delete($id);
    public function attachTag($instance, $tag_id = array());
    public function syncTag($instance, $tag_id = array());
    public function storeNewContentByTable($table, $attribute);
}