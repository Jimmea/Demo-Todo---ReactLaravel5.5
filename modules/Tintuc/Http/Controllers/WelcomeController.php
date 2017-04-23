<?php

namespace Modules\Tintuc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{

    public function getIndex()
    {
        return view(NEW_V1.'.home.index');
    }
}
