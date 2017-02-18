<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';
    protected $primaryKey = 'mod_id';
    protected $fillable = [
        'mod_name','mod_path','mod_listname','mod_listrouter','mod_order','mod_help'
    ];
}