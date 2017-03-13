<?php

namespace App\Models\Tags;

use Illuminate\Database\Eloquent\Model;
class Tag extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'tag_id';
    protected $fillable = ['tag_name','tag_active','tag_md5','tag_admin_id', 'tag_count', 'tag_category_id'];

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin', 'tag_admin_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Categories\Category', 'tag_category_id');
    }

    public function tintucs()
    {
        return $this->belongsToMany('App\Models\Tintucs\Tintuc', 'tag_news', 'tagn_tag_id', 'tagn_new_id');
    }
}
