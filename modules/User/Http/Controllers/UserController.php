<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class UserController extends Controller
{

    public function getGeneralUser()
    {
    	$data = [
    		'page_type'		=>	'about'
    	];
        return view(USER_V1.'.general.index', $data);
    }

    // hiển thị danh sách bộ sưu tập của người dùng
    public function getUserCollection()
    {
    	$data = [
    		'page_type'		=>	'collection'
    	];
    	return view(USER_V1.'.collection.index', $data);
    }

    // hiển thị danh sách bạn bè
    public function getUserFriend()
    {
    	$data = [
    		'page_type'		=>	'friend'
    	];
    	return view(USER_V1.'.friend.index', $data);
    }

    // hiển thị danh sách món ăn tự làm
    public function getUserMade()
    {
    	$data = [
    		'page_type'		=>	'made'
    	];
    	return view(USER_V1.'.made.index', $data);
    }

    // hiển thị danh sách ảnh
    public function getUserPhoto()
    {
    	$data = [
    		'page_type'		=>	'photo'
    	];
    	return view(USER_V1.'.photo.index', $data);
    }

    // hiển thị danh sách review
    public function getUserReview()
    {
    	$data = [
    		'page_type'		=>	'review'
    	];
    	return view(USER_V1.'.review.index', $data);
    }

    // hiển thị danh sách công thức của người dùng
    public function getUserRecipe()
    {
    	$data = [
    		'page_type'		=>	'recipe'
    	];
    	return view(USER_V1.'.recipe.index', $data);
    }
}
