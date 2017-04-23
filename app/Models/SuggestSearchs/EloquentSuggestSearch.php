<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 10/03/17
 * Time: 15:43
 */

namespace App\Models\SuggestSearchs;
use App\Repositories\BaseRepository;

class EloquentSuggestSearch extends BaseRepository implements SuggestSearchRepository
{
    public function __construct(SuggestSearch $suggestSearch)
    {
        $this->model = $suggestSearch;
    }

    public function getAll($filter = false, $sort = false, $limit = false)
    {
        return parent::getAllAdmin($filter, $sort, $limit);
    }

    public function storeData($attribues)
    {
        return parent::storeData($attribues);
    }

    public function updateById($id, $attributes)
    {
        return parent::updateById($id, $attributes);
    }
}