<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/19/2017
 * Time: 1:40 PM
 */

namespace App\Models\Modules;


interface ModuleRepository
{
    public function getAllData($filter, $sort, $limit);
    public function storeData($attribute);
    public function updateData($id, $attribute);
    public function findById($Id);
    public function deleteModule($id);
}