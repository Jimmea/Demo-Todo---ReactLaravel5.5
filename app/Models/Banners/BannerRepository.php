<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 2/24/2017
 * Time: 2:01 PM
 */

namespace App\Models\Banners;


interface BannerRepository
{
    public function getListAll();
    public function storeData($attribute);
    public function updateById($id, $attribute);
    public function findById($id);
    public function updateByField($id, $field, $value);
}