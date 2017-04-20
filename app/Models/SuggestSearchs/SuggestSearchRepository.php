<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 10/03/17
 * Time: 15:43
 */

namespace App\Models\SuggestSearchs;


interface SuggestSearchRepository
{
    public function getAll($filter, $sort, $limit);
    public function storeData($attribues);
    public function updateById($id, $attributes);
}