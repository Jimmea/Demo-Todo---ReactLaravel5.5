<?php

namespace App\Models\Cities;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table  = 'cities';
    protected $primaryKey = 'cit_id';
    protected $fillable = ['cit_name','cit_slug','cit_md5','cit_parent_id','cit_order',
        'cit_short','cit_phone','cit_phone_reference','cit_map_longitude','cit_map_latitude',
        'cit_status', 'cit_cskh_ym', 'cit_cskh_phone', 'cit_free_transport'
    ];
}
