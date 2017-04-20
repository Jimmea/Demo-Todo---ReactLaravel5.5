<?php
namespace App\Models\SuggestSearchs;

use Illuminate\Database\Eloquent\Model;

class SuggestSearch extends Model
{
    public $table = 'suggest_searchs';
    public $primaryKey = 'sus_id';
    public $fillable = ['sus_name', 'sus_link', 'sus_color', 'sus_order', 'sus_status', 'sus_action', 'sus_admin_id'];

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin', 'sus_admin_id');
    }
}