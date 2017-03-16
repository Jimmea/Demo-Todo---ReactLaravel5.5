<?php

namespace App\Models\Events;

use App\Models\ModelBase;

class Event extends ModelBase
{
    protected $table = 'events';
    protected $primaryKey = 'evn_id';
    protected $fillable = ['evn_name','evn_slug', 'evn_picture', 'evn_meta_title', 'evn_meta_keyword', 'evn_meta_description', 'evn_admin_id'];

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin', 'evn_admin_id');
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Categories\Category', 'event_new_categories', 'enc_evn_id', 'enc_category_id');
    }
}
