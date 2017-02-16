<?php
namespace App\Models\Menus;

use App\Repositories\BaseRepository;

class EloquentMenu extends BaseRepository implements MenuRepository
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

    public function getConfigTarget()
    {
        return $this->model->getTarget();
    }

    public function saveMenu($data)
    {
        return $this->storeData($data);
    }

    /**
     * Get tat ca menu
     * @param array $arrayColumn : mang column se duoc chon hien thi
     * @param array $filter : mang filter
     * @param array $arrayField : mang column se duoc chon hien thi
     * @param string $search :
     * @param string $sort :
     * @return
     */
    public function getAllMenu($arrayField = array(), $filter = array(), $search = false, $sort = array())
    {
        // TODO: Implement getAllMenu() method.
        return $this->getAllChild('menus', 'mnu_id', 'mnu_parent_id', 0, $filter, $arrayField, $sort, $search);
    }
}