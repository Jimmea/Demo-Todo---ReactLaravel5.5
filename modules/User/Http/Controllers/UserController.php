<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\User\Http\Controllers\FrontendUserController;

class UserController extends FrontendUserController
{   
    const lAYOUT_IS_MY      = "my";       

    public function getTabUser($visit,$tab='')
    {
    	// User xem chinh ban thna
        if ($visit === self::lAYOUT_IS_MY) 
        {        	        	
        	switch ($tab) 
        	{
        		case 'about-me':
        			return view(USER_V1 . '.my.my_about');
        			break;	

        		case 'collections':
        			return view(USER_V1 . '.my.my_collection');
        			break;

        		case 'favorites':
        			return view(USER_V1 . '.my.my_favorite');
        			break;

        		case 'findfriends': 
        		case 'following': 
        		case 'followers':
        			return view(USER_V1 . '.my.my_friend');	
        			break;
        				
        		case 'made-it':
        			return view(USER_V1 . '.my.my_made_it');
        			break;

        		case 'photos':
        			return view(USER_V1 . '.my.my_photo');
        			break;

        		case 'reviews':
        			return view(USER_V1 . '.my.my_review');
        			break;
        	
        		case 'recipes':
        			return view(USER_V1 . '.my.my_recipe');
        			break;

        		case 'create-recipe':
        			return view(USER_V1 . '.my.my_create_recipe');
        			break;

        		case 'profile-settings':
        			return view(USER_V1 . '.my.my_profile_setting');
        			break;

        		case 'account-settings':
        			return view(USER_V1 . '.my.my_create_recipe');
        			break;

        		default:
        			return view(USER_V1 . '.my.my_collection');
        			break;
        	}
            
        }
        
        // User xem ban be
        switch ($tab) 
    	{
    		case 'about-me':
    			return view(USER_V1 . '.user.user_about');
    			break;	

    		case 'collections':
    			return view(USER_V1 . '.user.user_collection');
    			break;

    		case 'favorites':    		
    			return view(USER_V1 . '.user.user_index');
    			break;

    		case 'findfriends': 
    		case 'following': 
    		case 'followers':
    			return view(USER_V1 . '.user.user_friend');	
    			break;
    				
    		case 'made-it':
    			return view(USER_V1 . '.user.user_made_it');
    			break;
 
    		case 'reviews':
    			return view(USER_V1 . '.user.user_review');
    			break;
    	
    		case 'recipes':
    			return view(USER_V1 . '.user.user_recipe');
    			break;
    		    	    
    		default:
    			return view(USER_V1 . '.user.user_index');
    			break;
    	}
                
    }   
}
