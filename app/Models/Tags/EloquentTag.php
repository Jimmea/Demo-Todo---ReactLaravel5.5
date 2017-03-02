<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 3:59 PM
 */

namespace App\Models\Tags;
use App\Repositories\BaseRepository;

class EloquentTag   
{
    public function __construct(Tag $tag)
    {
        $this->model = $tag;
    }

    public function getAllTag()
    {

    }

    public function storeData()
    {

    }

    public function findById()
    {

    }

    public function updateById()
    {

    }
}