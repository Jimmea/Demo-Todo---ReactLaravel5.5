<?php

namespace App\Models\CategoryBanners;

use Illuminate\Database\Eloquent\Model;

class CategoryBanner extends Model
{
    protected $table = 'category_banners';
    protected $primaryKey = 'cab_id';
    protected $fillable = ['cab_category_id', 'cab_title', 'cab_link', 'cab_picture', 'cab_target', 'cab_position', 'cab_order',
        'cab_status', 'cab_start_date', 'cab_end_date', 'cab_description', 'cab_admin_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Categories\Category', 'cab_category_id');
    }

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin', 'cab_admin_id');
    }
}
