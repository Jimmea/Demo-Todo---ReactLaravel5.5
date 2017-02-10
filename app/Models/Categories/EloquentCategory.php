<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/10/2017
 * Time: 10:29 PM
 */

namespace App\Models\Categories;

use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class EloquentCategory extends BaseRepository implements InterfaceCategory
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    /**
     * Created by : Hungokata
     * Time : 10:45 PM / 2/10/2017
     * Lay cac kieu hien thi
     * @param void
     * @return array
     */
    public function getTypeView()
    {
        return $this->model->getTypeView();
    }

    /**
     * Created by : BillJanny
     * Date: 10:33 PM - 2/10/2017
     * Lay kieu danh muc
     * @param void
     * @return array
     */
    public function getConfigTypeCategory()
    {
        return $this->model->getConfigTypeCategory();
    }

    /**
     * Created by : BillJanny
     * Date: 11:25 PM - 2/10/2017
     * Validate add category
     * @param int $cate_id truong khoa chinh cua bang
     * @return void
     */
    public function validateCategory(Request $request, $cate_id="")
    {
        $rules = [
            'cate_type'         => 'required',
            'cate_name'         => 'required|unique:categories,cate_name,'. $cate_id . ', cate_id'
        ];

        $messages = [
             'cate_type.required'  => 'The type category field is required',
             'cate_name.required'  => 'The name category field is required',
        ];

        $this->validate($request, $rules, $messages);
    }

    /**
     * Created by : Hungokata
     * Time : 11:15 PM / 2/10/2017
     * Lay tat ca danh muc
     * @param void
     * @return array
     */
    public function getAllCategory()
    {
        return [];
    }
}