<?php

namespace Modules\Admin\Http\Controllers;

use App\Exceptions\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use PhpParser\Node\Stmt\Throw_;

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

    /**
     * Upload file avatar
     * @param void
     * @return json
     */
    public function postUploadFile(Request $request)
    {
        if ($request->ajax())
        {
            $action     = $request->has('action') ? $request->get('action') : '';
            $upload     = new \UploadAjax();

            // Delete anh
            if($action == 'delete')
            {
                $path   = $request->get('src');
                $upload->deleteFile(public_path(), $path);
                return $this->responseSuccess('Delete successfully');
            }

            $src        = $request->has('src') ? $request->get('src') : '';
            $file       = isset($_FILES[0]) ?  $_FILES[0] : array();
            $path       = $upload->uploadFile($file, 'recipes');

            if ($src) $upload->deleteFile(public_path(), $src);

            return (!$path) ? $this->responseError($upload->showWarningError()) : $this->responseSuccess($path);
        }
        return $this->responseError();
    }

    /**
     * Add thêm một group step
     * @param void
     * @return json
     */
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
