<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'evn_id';
    protected $fillable = ['evn_name', 'evn_picture', 'evn_meta_title', 'evn_meta_keyword', 'evn_meta_description', 'evn_admin_id'];

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin');
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Categories\Category', 'event_new_categories', 'enc_evn_id', 'enc_category_id');
    }
}
