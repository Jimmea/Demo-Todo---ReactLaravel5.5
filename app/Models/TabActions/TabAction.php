<?php

namespace App\Models\TabActions;

use Illuminate\Database\Eloquent\Model;

class TabAction extends Model
{
    protected $table = 'tab_actions';
    protected $primaryKey = 'ta_id';
    protected $fillable = ['ta_name', 'ta_icon'];
}
