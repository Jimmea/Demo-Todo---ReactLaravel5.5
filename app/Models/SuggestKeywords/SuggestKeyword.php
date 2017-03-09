<?php

namespace App\Models\SuggestKeywords;
use Illuminate\Database\Eloquent\Model;

class SuggestKeyword extends Model
{
    protected $table = 'suggest_keywords';
    protected $primaryKey = 'suk_id';
    protected $fillable = ['suk_name', 'suk_link', 'suk_position','suk_icon', 'suk_color', 'suk_order', 'suk_status', 'suk_target', 'suk_admin_id'];

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin', 'suk_admin_id');
    }
}
