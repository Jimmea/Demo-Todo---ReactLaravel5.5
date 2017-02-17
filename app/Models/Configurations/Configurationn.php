<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/18/2017
 * Time: 12:33 AM
 */

namespace App\Models\Configurations;


use Illuminate\Database\Eloquent\Model;

class Configurationn extends Model
{
    protected $table = 'configurations';
    protected $primaryKey = 'con_id';
    public $fillable = [
        'con_admin_id', 'con_site_title','con_address','con_favicon','con_logo','con_background_img','con_background_color',
        'con_meta_title','con_meta_keyword', 'con_meta_description', 'con_support_online', 'con_support_online',
        'con_hotline', 'con_gmail','con_facebook','con_google','con_instagram','con_pinterest','con_code_analytics',
        'con_code_facebook', 'con_code_param1', 'con_code_param2', 'con_code_param3', 'con_code_param4', 'con_code_param5'
    ];
}