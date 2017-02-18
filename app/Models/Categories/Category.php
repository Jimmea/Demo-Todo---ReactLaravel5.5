<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table        = 'categories';
    protected $primaryKey   = 'cate_id';
    protected $fillable     = [
        'cate_name', 'cate_picture', 'cate_background', 'cate_meta_keyword', 'cate_meta_title', 'cate_order', 'cate_total_hit',
        'cate_meta_description', 'cate_status', 'cate_parent_id', 'cate_has_child', 'cate_all_child', 'cate_type', 'cate_hot',
        'cate_admin_id', 'cate_show', 'cate_view_type', 'cate_icon'
    ];

    public function getConfigTypeCategory()
    {
        return config('setting.typeCategory');
    }

    public function getTypeView()
    {
        return config('setting.typeViewCategory');
    }
}
