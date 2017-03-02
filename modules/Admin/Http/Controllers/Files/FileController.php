<?php

namespace Modules\Admin\Http\Controllers\Files;

use App\Repositories\Files\FileRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;

class FileController extends AdminController
{
    public function __construct(FileRepository $fileRepository)
    {
        $this->file = $fileRepository;
    }

    public function uploadFileAjax(Request $request)
    {
        if ($request->ajax())
        {
            $file = isset($_FILES[0]) ?  $_FILES[0] : array();
            $src  = get_value('src', 'str', 'POST');
            $path = $this->file->uploadAjax($file, 'recipes');
            if ($src) $this->file->delete($src);
            if (!$path) return $this->responseError($this->file->getWarningError());

            return $this->responseSuccess($path);
        }
        return $this->responseError();
    }

    /**
     * Xoa file
     * @param string $path duong dan cua file
     * @return string
     */
    public function deleteFile(Request $request)
    {
        if ($request->ajax())
        {
            $src  = get_value('src', 'str', 'POST');
            $this->file->delete($src);
            return $this->responseSuccess();
        }
        return $this->responseError();
    }
}
