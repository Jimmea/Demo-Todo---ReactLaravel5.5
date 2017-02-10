<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\EloquentCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminCategoryController extends AdminController
{

    public function __construct(EloquentCategory $eloquentCategory)
    {
        $this->category = $eloquentCategory;
    }

    public function getListCategory()
    {
        return view(ADMIN_VIEW.'categories.index');
    }

    /**
     * Created by : BillJanny
     * Date: 11:17 PM - 2/10/2017
     * Hien thi form them moi category
     * @param void
     * @return response
     */
    public function getAddCategory()
    {
        $data = [
            'categories'    => array(),
            'category'      => $this->category->getAllCategory(),
            'cateShowMod'   => $this->getArrayBoolean(),
            'typeView'      => $this->category->getTypeView(),
            'typeCategory'  => $this->category->getConfigTypeCategory()
        ];
        return view(ADMIN_VIEW.'categories.add')->with($data);
    }

    /**
     * Created by : Hungokata
     * Time : 9:35 PM / 2/10/2017
     * @param
     * @return void
     */
    public function postAddCategory(Request $request)
    {
        $this->category->validateCategory($request);
        $dataForm = $request->except('_token');
        dd($dataForm);
    }

    /**
     * Created by : Hungokata
     * Time : 9:36 PM / 2/10/2017
     * @param
     * @return void
     */
    public function getEditCategory(Request $request, $cate_id)
    {
        dd($request->except('_token'));
    }

    /**
     * Created by : Hungokata
     * Time : 9:36 PM / 2/10/2017
     * @param
     * @return void
     */
    public function PostEditCategory()
    {

    }

    /**
     * Created by : Hungokata
     * Time : 9:36 PM / 2/10/2017
     * @param
     * @return void
     */
    public function postProcessQuickCategory()
    {

    }
}
