<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/18/2017
 * Time: 12:43 AM
 */

namespace App\Models\Configurations;


interface ConfigurationRepository
{
    public function findById($Id);
    public function updateById($id, $data);
    public function updateOrCreateData($id, $data);

}