<?php

namespace App\Models\CategoryTabActions;

use Illuminate\Database\Eloquent\Model;

class CategoryTabAction extends Model
{
    protected $table        = 'category_tab_actions';
    protected $primaryKey   = 'cta_id';
    protected $fillable     = ['cta_tabaction_id', 'cta_status', 'cta_category_id', 'cta_group_category_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Categories\Category', 'cta_category_id');
    }

}

