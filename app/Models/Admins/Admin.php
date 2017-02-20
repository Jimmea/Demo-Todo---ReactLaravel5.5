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
     * @param array $allRole : mang vai tro cua router
     * @return boolean
     */
    public function checkRoleOfAdmin($allRole)
    {
        // Check neu loai nay duoc luu adm_isadmin  = 1: Ok admin
        $isAdmin = \Session::get('isadmin');
        if ($isAdmin === 1) return true;

        // Check khong ton tai role
        if (!$allRole) return false;

        // Lay quyen cua he thong



        return false;
    }
}
