<?php

namespace App\Models\Configurations;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'configurations';
    public $primaryKey = 'con_id';
    public $fillable = [
        'co'
    ];

}
