<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 3:58 PM
 */

namespace App\Models\Tags;

interface TagRepository
{
    public function getAllTag();
    public function storeData();
    public function findById();
    public function updateById();
}