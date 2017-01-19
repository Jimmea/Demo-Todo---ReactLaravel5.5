<?php

namespace Modules\Tintuc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class NewDetailController extends Controller
{
    /**
     * Created by : Hungokata
     * Time : 11:14 / 19/01/17
     * Get tin tuc bai viet chi tiet
     * @param int $new_id : truong khoa chinh cua bang new
     * @param string $slug : url rewrite cua bang new
     * @return void
     */
    public function getNewDetail($id= 0,$slug='')
    {
        return view(NEW_V1.'.news.index');
    }
}
