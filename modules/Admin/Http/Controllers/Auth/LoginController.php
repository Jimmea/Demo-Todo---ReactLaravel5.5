<?php

namespace Modules\Admin\Http\Controllers\Auth;

use Illuminate\Http\Request;

class LoginController
{
    /**
     * Created by : Hungokata
     * Time : 6:05 PM / 2/4/2017
     * @param
     * @return void
     */
    public function getLogin()
    {
        return view(ADMIN_VIEW. 'auths.login');
    }

    public function postLogin()
    {

    }
}
