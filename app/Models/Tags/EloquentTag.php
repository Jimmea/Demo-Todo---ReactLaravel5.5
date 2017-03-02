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
}