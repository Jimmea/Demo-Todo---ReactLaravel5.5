<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    public function postUploadAndDeleteFile(Request $request)
    {
        if ($request->ajax())
        {
            $action     = $request->get('action');
            $src        = $request->get('src');
            $upload     = new \UploadAjax();

            // Delete anh
            if($action == 'delete')
            {
                if ($src) $upload->deleteFile(public_path(), $src);
                return $this->responseSuccess('Delete successfully');
            }

            // Add file moi
            $file       = isset($_FILES[0]) ?  $_FILES[0] : array();
            $path       = $upload->uploadFile($file, 'recipes');
            if ($src) $upload->deleteFile(public_path(), $src);

            return (!$path) ? $this->responseError($upload->showWarningError()) : $this->responseSuccess($path);
        }
        return $this->responseError();
    }

    /**
     * @param
     * @return void
     */
    public function postUploadAndDeleteFileStep(Request $request)
    {
        if ($request->ajax())
        {
            $action     = $request->get('action');
            $src        = $request->get('src');
            $upload     = new \UploadAjax();
            // Delete anh
            if($action == 'delete')
            {
                if ($src) $upload->deleteFile(public_path(), $src);
                return $this->responseSuccess('Delete successfully');
            }
            // Add file moi
            $file       = isset($_FILES[0]) ?  $_FILES[0] : array();
            $path       = $upload->uploadFile($file, 'recipes');
            if ($src) $upload->deleteFile(public_path(), $src);

            return (!$path) ? $this->responseError($upload->showWarningError()) : $this->responseSuccess($path);
        }
        return $this->responseError();
    }

    public function getDeleteFile(Request $request)
    {
        if ($request->ajax())
        {
            $src = get_value('src', 'str', 'POST');
            if ($src)
            {
                $upload     = new \UploadAjax();
                if ($src) $upload->deleteFile(public_path(), $src);
                return $this->responseSuccess();
            }
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
