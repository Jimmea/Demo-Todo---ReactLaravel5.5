<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table        = 'categories';
    protected $primaryKey   = 'cat_id';
    protected $fillable     = [''];


    public function getConfigTypeCategory()
    {
        return [
            1 => 'Trang tĩnh',
            2 => 'Tin tức',
            3 => 'Sản phẩm',
            4 => 'Giới thiệu',
            5 => 'Giải pháp',
            6 => 'Hỏi đáp'
        ];
    }

    public function getTypeView()
    {
        return [
            1 => 'Type one',
            2 => 'Type two',
            3 => 'Type Three',
        ];
    }

}
