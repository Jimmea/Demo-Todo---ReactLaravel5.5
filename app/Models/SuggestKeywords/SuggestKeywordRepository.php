<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 3:56 PM
 */

namespace App\Models\SuggestKeywords;


interface SuggestKeywordRepository
{
    public function getListKeywordPaginate($filter, $sort, $limit);
    public function storeData($attributes);
    public function updateById($id, $attributes);
}