<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function collection()
    {
    	return view(VIEW_FRONTEND_MODULES . '.account.collection');
    }

    public function about()
    {
    	return view(VIEW_FRONTEND_MODULES . '.account.about');
    }

    public function friend()
    {
    	return view(VIEW_FRONTEND_MODULES . '.account.friend');
    }

    public function made()
    {
    	return view(VIEW_FRONTEND_MODULES . '.account.made');
    }

    public function photo()
    {
    	return view(VIEW_FRONTEND_MODULES . '.account.photo');
    }

    public function review()
    {
    	return view(VIEW_FRONTEND_MODULES . '.account.review');
    }
    
    public function recipe()
    {
    	return view(VIEW_FRONTEND_MODULES . '.account.recipe');
    }
}
