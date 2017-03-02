<?php

namespace App\Models\Tags;

use Illuminate\Database\Eloquent\Model;
class Tag extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'tag_id';
    protected $fillable = ['tag_name','tag_active','tag_md5','tag_admin_id'];

    public function admins()
    {
        return $this->belongsTo('App\Models\Admins\Admin', 'tag_admin_id');
    }
}
