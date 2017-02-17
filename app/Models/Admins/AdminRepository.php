<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/4/2017
 * Time: 5:48 PM
 */
namespace App\Models\Admins;
interface AdminRepository
{
    public function getLimit($limit);
    public function getListAccount($filter, $sort, $limit);
    public function storeData($data);
    public function findById($id);
    public function updateById($id, $data);
    public function deleteByid($id);
    public function updateByField($id, $field, $otherValue);
}