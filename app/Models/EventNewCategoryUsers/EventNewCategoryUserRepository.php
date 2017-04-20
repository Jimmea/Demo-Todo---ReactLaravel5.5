<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 09/03/17
 * Time: 11:36
 */

namespace App\Models\EventNewCategoryUsers;


interface EventNewCategoryUserRepository
{
    public function storeData($attribute);
    public function findByEventId($eventId);
    public function deleteByCondition($newId, $eventId, $categoryId);
}