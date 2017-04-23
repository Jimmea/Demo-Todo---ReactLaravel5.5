<?php
namespace App\Models\Admins;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table     = 'admin_users';
    public $primaryKey   = 'adm_id';

    public $fillable = [
        'adm_loginname', 'adm_name', 'adm_phone', 'adm_password', 'adm_email', 'adm_picture', 'adm_address',
        'adm_access_module', 'adm_access_category', 'adm_access_category', 'adm_isadmin', 'adm_active', 'adm_admin_id'
    ];

    protected $limit = 15;

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin', 'adm_admin_id');
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function getAuthPassword()
    {
        return $this->adm_password;
    }

    public function mapAccessAction($data)
    {
        $rtn = array();
        if ($data)
        {
            foreach ($data as $key => $value)
            {
                $rtn[$value['mod_id']] = array(
                                        $value["adu_add"],
                                        $value["adu_edit"],
                                        $value["adu_delete"]);
            }
        }
        return $rtn;
    }


    /**
     * Check cac quyen cua he thong
     * @param string $permissions : mang vai tro cua router  ($allRole : ten table, action)
     * @return boolean
     */
    public function checkRoleOfAdmin($permissions)
    {
        // Check neu loai nay duoc luu adm_isadmin  = 1: Ok admin
        $isAdmin = get_session('isadmin');
        $admId   = get_session('adm_id');

        // Neu la admin thi redirect luon
        if ($isAdmin === 1) return true;

        // Check khong ton tai role
        if (!$permissions) return false;

        // Bat buoc phai co permission
        if(!isset($permissions[0]) || !isset($permissions[1])) return false;
        $moduleId    = $permissions[0];
        $actionRight = $permissions[1];

        if (!$moduleId) return false;
        $row         =  app('App\Models\AdminUserRights\AdminUserRightRepository');
        $row         =  $row->findAdminRightBy(['adm_id'=> $admId, 'mod_id'=> $moduleId]);

        if ($row)
        {
            switch ($actionRight)
            {
                case "list":
                        return true;
                    break;

                case "add":
                    if($row["adu_add"]) return true;
                    break;

                case "edit_quick":
                    if($row["edit_quick"]) return true;
                    break;

                case "edit":
                    if($row["adu_edit"]) return true;
                    break;

                case "delete":
                    if($row["adu_delete"]) return true;
                    break;
            }
        }

        return false;
    }

    public function banners()
    {
        return $this->hasMany('App\Models\Banners\Banner', 'ban_admin_id');
    }
}
