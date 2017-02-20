<?php

namespace App\Http\Controllers\AuthAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AccountController extends Controller
{
    public function __contadruct()
    {
        $this->middleware('checkAdmin');
    }
       
    public function changeInfo(Request $request)
    {
    	$admin = Auth::guard('admin')->user();
    	if($request->name) $admin->name = $request->name;

    	if($request->password && $request->retype && 
            $request->retype == $request->password && 
            strlen($request->password) >= 6)
        {
    		$admin->password = bcrypt($request->password);
    	}


    	$admin->save();

    	return redirect()->back();
    }
}
