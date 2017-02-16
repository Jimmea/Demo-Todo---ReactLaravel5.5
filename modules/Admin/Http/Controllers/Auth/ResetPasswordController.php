<?php

namespace Modules\Admin\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ResetPasswordController
{
    public function getResetPassword()
    {
        return view(ADMIN_VIEW .'auths.mailpassword');
    }

    public function postResetPassword(Request $request)
    {

    }
}