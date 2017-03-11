<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 5:12 PM
 */

namespace App\Models\Tags;

use App\Repositories\BaseRepository;
class EloquentTag extends BaseRepository implements TagRepository
{
    public function __construct(Tag $tag)
    {
        $this->model = $tag;
    }

    public function getAll($filter = false, $sort = false, $limit = false)
    {
        return parent::getAllAdmin($filter, $sort, $limit);
    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }

    public function updateById($id, $data)
    {
        return parent::updateById($id, $data);
    }

    public function deleteById($id)
    {
        return $this->delete($id);
    }

    public function updateByField($id, $field, $otherValue = '')
    {
        return parent::updateByField($id, $field, $otherValue);
    }

    public function findById($id)
    {
        return parent::findById($id);
    }

    public function searchMd5Tag($tag)
    {
        return $this->model->where('tag_md5', md5($tag))->select('tag_id', 'tag_name')->get();
    }

    public function searchLikeTag($tag)
    {
        return $this->model->where('tag_name', 'LIKE', '%' . $tag. '%')->select('tag_id', 'tag_name')->get();
    }


    public function getListTagIdByListName($listName='')
    {
        if ($listName)
        {
            $nameArray = explode(',', $listName);
            if ($nameArray)
            {
                $listTagMd5 = [];
                foreach ($nameArray as $value)
                {
                    $listTagMd5[] = md5($value);
                }
                $result = $this->model->whereIn('tag_md5', $listTagMd5)->pluck('tag_id');
                if ($result)
                {
                    return $result->toArray();
                }
            }
        }
        return '';
    }

    public function searchTag($tag)
    {
        $json         = array();
        $tagSearchId  = 0;
        // Kiem tra md5
        $searchTags = $this->searchMd5Tag($tag);
        if ($searchTags)
        {
            foreach ($searchTags as $value)
            {
                $json[]         = $value->tag_name;
                $tagSearchId    = $value->tag_id;
            }
        }

        // Truong hop kiem tra = md5 khong co phai dung toi LIKE
        if ($tagSearchId <=0)
        {
            $searchTags = $this->searchLikeTag($tag);
            if ($searchTags)
            {
                foreach ($searchTags as $value)
                {
                    $json[] = $value->tag_name;
                }
            }
        }
        return json_encode($json);
    }
}