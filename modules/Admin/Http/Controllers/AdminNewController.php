<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminNewController extends AdminController
{
    public function __construct()
    {
    }

    /**
     * @param
     * @return void
     */
    public function getListNew()
    {
        
    }

    /**
     * @param
     * @return void
     */
    public function getAddNew()
    {
        return view(ADMIN_VIEW . 'new.add');
    }

    /**
     * @param
     * @return void
     */
    public function postAddNew()
    {
        
    }

    /**
     * @param
     * @return void
     */
    public function getEditNew()
    {
        
    }

    /**
     * @param
     * @return void
     */
    public function postEditNew()
    {
        
    }

    public function postAddStep(Request $request)
    {
        $step = get_value('step', 'int', 'POST');
        if ($request->ajax() && $step)
        {
            return response()->json([
                'code'      => 1,
                'message'   => 'success',
                's'         => $step,
                'groupstep' => view(ADMIN_VIEW . 'new/groupstep', compact('step'))->render()
            ]);
        }
        return $this->responseError();
    }
}
