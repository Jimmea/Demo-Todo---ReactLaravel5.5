<?php

namespace App\Models\Tintucs;

use App\Models\ModelBase;

class Tintuc extends ModelBase
{
    protected $table = 'tintucs';
    protected $primaryKey = 'new_id';
    protected $fillable = ['new_title', 'new_slug', 'new_more_slug', 'new_title_md5', 'new_domain_id',
        'new_link_from_domain', 'new_picture', 'new_cate_id', 'new_description', 'new_top', 'new_hot', 'new_status',
        'new_order', 'new_type', 'new_admin_id', 'new_pre_time','new_cook_time', 'new_people'
    ];

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin', 'new_admin_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Categories\Category', 'tintuc_categories' , 'tc_new_id', 'tc_category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags\Tag', 'tag_news', 'tagn_new_id', 'tagn_tag_id');
    }


}
