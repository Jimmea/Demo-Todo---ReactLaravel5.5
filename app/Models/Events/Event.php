<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'evn_id';
    protected $fillable = ['evn_name', 'evn_teaser'];
}
