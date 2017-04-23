<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 3:55 PM
 */

namespace App\Models\SuggestKeywords;
use App\Repositories\BaseRepository;

class EloquentSuggestKeyword extends BaseRepository implements SuggestKeywordRepository
{

    public function __construct(SuggestKeyword $suggestKeyword)
    {
        $this->model = $suggestKeyword;
    }

    public function getListKeywordPaginate($filter, $sort, $limit)
    {
        $query = $this->model->whereRaw(1);
        $query = $this->scopeFilter($query, $filter);
        $query = $this->scopeInforAdmin($query);

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

    public function updateById($id, $attributes)
    {
        return parent::updateById($id, $attributes);
    }
}