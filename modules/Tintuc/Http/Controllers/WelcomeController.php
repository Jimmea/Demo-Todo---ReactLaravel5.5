<?php

namespace Modules\Tintuc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{

    /**
     * Created by : BillJanny
     * Date: 11:02 - 19/01/17
     * Hien thi trang tru bai viet
     * @param void
     * @return void
     */
    public function getIndex()
    {
        return view(NEW_V1.'.index');
    }
}
