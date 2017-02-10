<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/10/2017
 * Time: 10:29 PM
 */

namespace App\Models\Categories;


interface InterfaceCategory
{
    public function getTypeView();
    public function getConfigTypeCategory();
    public function getAllCategory();
}