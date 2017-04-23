<?php

namespace Modules\Tintuc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use BaseController;

class NewDetailController extends Controller
{
    public function getNewDetail($id= 0,$slug='')
    {                                   
        return view(NEW_V1.'.new_detail.index');        
    }     
}
