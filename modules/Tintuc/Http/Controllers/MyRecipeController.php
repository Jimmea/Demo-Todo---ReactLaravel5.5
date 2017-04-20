<?php

namespace Modules\Tintuc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MyRecipeController extends Controller
{
    public function getPopularRecipe()
    {
        return view(NEW_V1.'.recipes.popular');
    }

}
