<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function collection()
    {
    	return view(USER_V1 . 'collection');
    }

    public function about()
    {
    	return view(USER_V1 . '.account.about');
    }

    public function friend()
    {
    	return view(USER_V1 . '.account.friend');
    }

    public function made()
    {
    	return view(USER_V1 . '.account.made');
    }

    public function photo()
    {
    	return view(USER_V1 . '.account.photo');
    }

    public function review()
    {
    	return view(USER_V1 . '.account.review');
    }
    
    public function recipe()
    {
    	return view(USER_V1 . '.account.recipe');
    }
}
