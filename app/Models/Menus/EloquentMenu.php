<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/10/2017
 * Time: 12:46 AM
 */

namespace App\Models\Menus;


use App\Repositories\BaseRepository;

class EloquentMenu extends BaseRepository implements InterfaceMenu
{
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }

    /**
     * Created by : BillJanny
     * Date: 12:49 AM - 2/10/2017
     * Lay thong tin vi tri mac dih cua category duoc theit lap truoc ton trai trong model Menus
     * @param void
     * @return array
     */
    public function getConfigPosition()
    {
        return $this->model->getPosition();
    }


}