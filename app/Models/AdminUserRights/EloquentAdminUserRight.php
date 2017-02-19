<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/19/2017
 * Time: 11:53 PM
 */

namespace App\Models\AdminUserRights;
use App\Repositories\BaseRepository;

class EloquentAdminUserRight extends BaseRepository implements AdminUserRightRepository
{
    public function __construct(AdminUserRight $adminUserRight)
    {
        $this->model = $adminUserRight;
    }

    public function storeData($attributes)
    {
        return parent::storeData($attributes);
    }
}