<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 13/03/17
 * Time: 11:46
 */

namespace App\Models\TabActions;


use App\Repositories\BaseRepository;

class ELoquentTabAction extends BaseRepository implements TabActionRepository
{
    public function __construct(TabAction $tabAction)
    {
        $this->model = $tabAction;
    }
}