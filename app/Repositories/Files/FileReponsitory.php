<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 9:00 AM
 */

namespace App\Repositories\Files;
use App\Repositories\BaseFileController;


class FileReponsitory extends BaseFileController implements FileRepositoryInterface
{
    use HandleUploadFileAjax, HandleUploadFile;

    public $warningError;


    public function getLocaleDirectory()
    {
        return public_path();
    }

    /**
     * Upload file thong qua ajax
     * @param string $upload_name ten upload
     * @param string $upload_path duong dan luu upload
     * @param array $extension_list : list extension
     * @param int $limit_size : size file dung luong toi da co the upload tinh theo kb
     * @param int $inserLogo : cos cho insert logo khong . 1 co | 0 khong
     * @return string
     */
    public function uploadAjax($upload_name, $upload_path = 'images', $extension_list = array(), $limit_size=500, $inserLogo = 0)
    {
        return $this->handleUploadFileAjax($upload_name, $upload_path , $extension_list, $limit_size, $inserLogo);
    }


    /**
     * Upload nhieu file cung mot luc
     * @param
     * @return
     */
    public function uploadMulti($uploadName, $uploadPath='', $extensionList= array(), $limitSize=500, $inserLogo=0)
    {

    }

    /**
     * Upload file binh thuong
     * @param string $uploadName ten upload
     * @param string $uploadPath duong dan luu upload
     * @param array $extensionList : list extension
     * @param int $limitSize : size file dung luong toi da co the upload tinh theo kb
     * @param int $inserLogo : cos cho insert logo khong . 1 co | 0 khong
     * @return string
     */
    public function uploadFile($uploadName, $uploadPath='images', $extensionList= array(), $limitSize=500, $inserLogo=0)
    {
        $fileUpload = $this->handleUploadFile($uploadName, $uploadPath, $extensionList, $limitSize, $inserLogo);
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
     * @param string $src : Duong dan file anh can xoa
     * @return integer
     */
    public function delete($src='')
    {
        return $this->deleteFile($this->getLocaleDirectory(), $src);
    }
}