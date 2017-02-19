<?php
namespace App\Models\Admins;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table     = 'admin_users';
    public $primaryKey   = 'adm_id';

    public $fillable = [
        'adm_loginname', 'adm_name', 'adm_phone', 'adm_password', 'adm_email', 'adm_picture', 'adm_address',
        'adm_access_module', 'adm_access_category', 'adm_access_category', 'adm_isadmin', 'adm_active', 'adm_admin_id'
    ];

    protected $limit = 15;

    public function getLimit()
    {
        return $this->limit;
    }

//    public function adminUserRight()
//    {
//        return $this->hasMany('App\Models\AdminUserRights\AdminUserRight', 'adu_admin_id');
//    }
}
