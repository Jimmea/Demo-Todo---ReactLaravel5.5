<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/19/2017
 * Time: 11:52 PM
 */

namespace App\Models\AdminUserRights;
use Illuminate\Database\Eloquent\Model;

class AdminUserRight extends Model
{
    public $table ='admin_user_right';
    public $fillable = ['adu_admin_id', 'adu_admin_module_id', 'adu_add', 'adu_edit', 'adu_delete'];
    public $timestamps = false;

//    public function admin()
//    {
//        return $this->belongsTo('App\Models\Admins\Admin', 'adu_admin_id');
//    }
}