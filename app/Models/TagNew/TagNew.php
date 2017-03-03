<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagNew extends Model
{
    protected $table    = 'tag_news';
    protected $fillable = ['tagn_tag_id', 'tagn_new_id'];
}
