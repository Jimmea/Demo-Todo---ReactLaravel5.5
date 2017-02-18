<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class AdminController extends Controller
{
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
            0 => 'Disable',
            1 => 'Unable'
        ];
    }

    public function getAdminId()
    {
        return 1;
    }

    public function getValueXeditTable()
    {
        return [
            strtolower(get_value('name', 'str', 'POST')), // action(desc alias action of any filed)
            get_value('value', 'int', 'POST'), // value update
            get_value('pk', 'int', 'POST') // primary key
        ];
    }
    public function responseSuccess()
    {
        return response()->json(['status'=>1, 'msg'=> trans('admin::message.message_update_success')]);
    }
    public function responseError()
    {
        return response()->json(['status'=>0, 'msg'=> trans('admin::message.message_update_error')]);
    }
}
