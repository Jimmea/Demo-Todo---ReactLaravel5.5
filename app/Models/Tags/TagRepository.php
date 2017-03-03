<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 5:12 PM
 */

namespace App\Models\Tags;


interface TagRepository
{
    public function getAll($filter = false, $sort = false, $limit = false);
    public function findById($id);
    public function storeData($attributes);
    public function updateById($id, $data);
    public function updateByField($id, $field, $otherValue);
    public function deleteById($id);
    public function searchTag($tag);
    public function searchMd5Tag($tag);
    public function searchLikeTag($tag);
}