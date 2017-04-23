<?php

namespace Modules\Admin\Http\Controllers\Files;

use App\Repositories\Files\FileRepositoryInterface;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AdminController;

class AdminFileController extends AdminController
{
    public function __construct(FileRepositoryInterface $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    /**
     * Method danh cho upload file ajax
     * @param dau vao request
     * @return string
     */
    public function uploadFileAjax(Request $request)
    {
        if ($request->ajax())
        {
            $file = isset($_FILES[0]) ?  $_FILES[0] : array();
            $src  = get_value('src', 'str', 'POST');
            $path = $this->fileRepository->uploadAjax($file, 'recipes');

            if ($src) $this->fileRepository->delete($src);
            if (!$path) return $this->responseError($this->fileRepository->getWarningError());

            return $this->responseSuccess($path);
        }
        return $this->responseError();
    }

    /**
     * Xoa file thong qua ajax
     * @return string
     */
    public function deleteFile(Request $request)
    {
        if ($request->ajax())
        {
            $src  = get_value('src', 'str', 'POST');
            $this->fileRepository->delete($src);
            return $this->responseSuccess();
        }
        return $this->responseError();
    }
}
