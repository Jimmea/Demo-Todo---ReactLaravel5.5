<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 28/02/17
 * Time: 23:37
 */

namespace App\Repositories\Files;


interface FileRepository
{
    public function delete($path);
    public function uploadAjax($upload_name, $upload_path, $extension_list, $limit_size, $inserLogo);
    public function uploadMulti($uploadName, $uploadPath, $extensionList, $limitSize, $inserLogo);
    public function upload($uploadName, $uploadPath, $extensionList, $limitSize, $inserLogo);
    public function getWarningError();
}