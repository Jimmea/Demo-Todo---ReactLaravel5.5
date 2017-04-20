<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 9:00 AM
 */

namespace App\Repositories\Files;
use App\Repositories\BaseFileController;


class FileController extends BaseFileController implements FileRepository
{
    use UploadAjax, ValidateAndUploadFile;

    public $warningError;

    public function getLocaleDirectory()
    {
        return public_path();
    }

    /**
     * Upload file
     * @param string $upload_name ten upload
     * @param string $upload_path duong dan luu upload
     * @param array $extension_list : list extension
     * @param int $limit_size : size file dung luong toi da co the upload tinh theo kb
     * @param int $inserLogo : cos cho insert logo khong . 1 co | 0 khong
     * @return string
     */
    public function uploadAjax($upload_name, $upload_path = '', $extension_list = array(), $limit_size=500, $inserLogo = 0)
    {
        return $this->uploadFileAjax($upload_name, $upload_path , $extension_list, $limit_size, $inserLogo);
    }

    public function uploadMulti($uploadName, $uploadPath='', $extensionList= array(), $limitSize=500, $inserLogo=0)
    {

    }

    public function upload($uploadName, $uploadPath='', $extensionList= array(), $limitSize=500, $inserLogo=1)
    {
        $fileUpload = $this->validateFile($uploadName, $uploadPath, $extensionList, $limitSize, $inserLogo);
        return $fileUpload;
    }

    /**
     * Created by : BillJanny
     * Date: 9:14 AM - 3/2/2017
     * Get error neu co loi
     * @return string
     */
    public function getWarningError()
    {
        return $this->warningError;
    }

    /**
     * Created by : BillJanny
     * Date: 9:20 AM - 3/2/2017
     * @param string $src : Duong dan file anh
     * @return string
     */
    public function delete($src='')
    {
        return $this->deleteFile($this->getLocaleDirectory(), $src);
    }
}