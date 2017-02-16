<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 16/02/17
 * Time: 16:26
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterForm extends FormRequest
{
    /**
     * Created by : BillJanny
     * Date: 16:24 - 16/02/17
     * Loc du lieu mang
     * @param array $data : mang du lieu truyen vao can xoa di cac gia tri trong
     * @return array
     */
    public function filterDataForm($data)
    {
        if ($data)
        {
            foreach ($data as $key => $value)
            {
                if (empty($value)) unset($data[$key]);
            }
        }
        return $data;
    }
}