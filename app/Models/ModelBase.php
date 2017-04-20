<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 13/03/17
 * Time: 21:08
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelBase extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}