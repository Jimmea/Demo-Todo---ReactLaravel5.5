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


    /**
     * Tong hop cac module tai day
     * @param string : name module
     * @return int
     */
    public function getIdModule($nameModule)
    {
        $modules = config('configModuleID');

        return $modules[$nameModule];
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
        $isAdmin = \Session::get('isadmin');
        $admId   = \Session::get('adm_id');
        if ($isAdmin === 1) return true;

        // Check khong ton tai role
        if (!$permissions) return false;

        // Bat buoc phai co permission
        if(!isset($permissions[0]) || !isset($permissions[1])) return false;
        $nameModule  = $permissions[0];
        $actionRight = $permissions[1];

        $moduleID    = $this->getIdModule($nameModule);
        if (!$moduleID) return false;
        $row         =  app('App\Models\AdminUserRights\AdminUserRightRepository');
        $row         =  $row->findAdminRightBy(['adm_id'=> $admId, 'mod_id'=> $moduleID]);

        switch ($actionRight)
        {
            case "add":
                if($row["adu_add"] == 0) return false;
                break;

            case "edit":
                if($row["adu_edit"] == 0) return false;
                break;

            case "delete":
                if($row["adu_delete"] == 0) return false;
        }

        return true;
    }
}
