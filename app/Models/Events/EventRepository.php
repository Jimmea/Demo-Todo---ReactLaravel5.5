<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 08/03/17
 * Time: 01:56
 */

namespace App\Models\Events;


interface EventRepository
{
    public function getListEventPaginate($filter, $sort, $limit=30);
    public function findEventById($id);
    public function storeData($attribute);
    public function updateById($id, $attribute);
    public function updateByField($id, $field, $other);
    public function attachEventNewCategory($instance, $categoryId);
    public function syncEventNewCategory($instance, $categoryId);
}