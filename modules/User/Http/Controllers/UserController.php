<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class UserController extends Controller
{

    public function getGeneralUser()
    {
        return view(USER_V1.'.general.index');
    }
}
