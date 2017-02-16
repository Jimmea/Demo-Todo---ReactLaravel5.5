<?php

namespace App\Models\Menus;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    public $primaryKey = 'mnu_id';
    public $fillable =  [
        'mnu_name', 'mnu_picture', 'mnu_link', 'mnu_target', 'mnu_type', 'mnu_position',
        'mnu_order', 'mnu_parent_id', 'mnu_has_child', 'mnu_defined', 'mnu_status', 'mnu_admin_id', 'mnu_icon'
    ];

    public function getPosition()
    {
        return [
            1  => 'Menu Top',
            2  => 'Menu footer',
            3  => 'Menu Detail',
            4  => 'Menu Bar',
            5  => 'Menu Left',
        ];
    }

    public function getTarget()
    {
        return [
            '_self' => 'Cùng cửa sổ',
            '_blank' => 'Cửa sổ mới'
        ];
    }
}