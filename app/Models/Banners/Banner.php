<?php

namespace App\Models\Banners;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
    protected $primaryKey = 'ban_id';
    protected $fillable = ['ban_picture','ban_isevent','ban_link','ban_title','ban_description','ban_target',
        'ban_type','ban_position','ban_start_date', 'ban_end_date','ban_order', 'ban_status'];

    public function admins()
    {
        return $this->belongsTo('App\Models\Admin', 'ban_admin_id');
    }
}
