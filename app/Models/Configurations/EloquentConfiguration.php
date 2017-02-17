<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/18/2017
 * Time: 12:42 AM
 */

namespace App\Models\Configurations;


use App\Repositories\BaseRepository;

class EloquentConfiguration extends BaseRepository implements ConfigurationRepository
{
    public function __construct(Configurationn $configurationn)
    {
        $this->model = $configurationn;
    }

    public function updateById($id, $data)
    {
        return parent::updateById($id, $data);
    }

    public function findById($id)
    {
        return parent::findById($id);
    }
}