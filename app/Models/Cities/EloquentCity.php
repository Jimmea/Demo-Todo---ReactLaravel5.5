<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 3:40 PM
 */

namespace App\Models\Cities;
use App\Repositories\BaseRepository;

class EloquentCity extends BaseRepository implements CityRepository
{
    public function __construct(City $city)
    {
        $this->model = $city;
    }

}