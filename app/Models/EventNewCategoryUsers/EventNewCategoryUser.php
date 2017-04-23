<?php

namespace App\Models\EventNewCategoryUsers;

use Illuminate\Database\Eloquent\Model;

class EventNewCategoryUser extends Model
{
    protected $table    = 'event_new_category_users';
    protected $fillable = ['encu_new_id', 'encu_evn_id', 'encu_category_id', 'encu_admin_id', 'encu_order'];
}
