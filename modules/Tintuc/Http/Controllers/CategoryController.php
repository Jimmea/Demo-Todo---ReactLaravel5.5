<?php

namespace Modules\Tintuc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function getCategory()
    {
        return view(NEW_V1.'.category.index');
    }
}
