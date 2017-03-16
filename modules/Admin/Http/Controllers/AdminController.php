<?php

namespace Modules\Admin\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class AdminController extends Controller
{

    public function __construct()
    {
        $category = app('App\Models\Categories\CategoryRepository');
        View::share('categories', $category->getAllCategory(['cate_name']));
        View::share('configStatus', $this->getArrayBoolean());
    }

    /**
     * Filter list
     * @var array
     */
    protected $filter = [];

    /**
     * Created by : BillJanny
     * Date: 11:42 PM - 2/4/2017
     * Set mot vai thuoc tinh filter
     * @param $field
     * @param $ope
     * @param $defValue
     * @return
     */
    public function setFilter(Request $request, $field, $ope, $defValue = null)
    {
        $value = ($defValue == null) ? $request->get($field) : $defValue;
        if ($value != '' || $value != null)
        {
            if (strtoupper($ope) == 'LIKE')
            {
                $value = '%' . trim($value) . '%';
            }
            $this->filter[] = [$field, $ope, trim($value)];
        }
    }

    /**
     * Get all filter
     * @return [type] [description]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Created by : BillJanny
     * Date: 10:50 PM - 2/10/2017
     * Lay mang gia tri true|false
     * @param void
     * @return array
     */
    public function getArrayBoolean()
    {
        return [
            0 => 'Cho phép ẩn',
            1 => 'Cho phép hiển thị'
        ];
    }

    public function getTarget()
    {
        return [
            '_self' => 'Cùng cửa sổ',
            '_blank' => 'Cửa sổ mới'
        ];
    }

    public function getTypeNew()
    {
        $newType = [
            'crawl'         => 1,
            'user_write'    => 2,
            'albumn'        => 3,
            'friend'        => 4,
        ];

        return $newType;
    }

    public function getNewType()
    {
        $newType = array();
        foreach ($this->getTypeNew() as $name => $stt)
        {
            $newType[$stt] = $name;
        }
        return $newType;
    }


    public function getAdminId()
    {
        return 1;
    }

//    public function getValueXeditTable()
//    {
//        return [
//            strtolower(get_value('name', 'str', 'POST')), // action(desc alias action of any filed)
//            get_value('value', 'int', 'POST'), // value update
//            get_value('pk', 'int', 'POST') // primary key
//        ];
//    }
    public function responseSuccess($message='')
    {
        return response()->json(['status'=>1, 'msg'=> $message ? $message : trans('admin::message.message_update_success')]);
    }
    public function responseError($message='')
    {
        return response()->json(['status'=>0, 'msg'=> $message ? $message : trans('admin::message.message_update_error')]);
    }
}
