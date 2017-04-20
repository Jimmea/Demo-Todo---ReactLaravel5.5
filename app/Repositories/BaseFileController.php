<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 9:07 AM
 */

namespace App\Repositories;
use Illuminate\Support\Facades\File;

abstract class BaseFileController
{
    private $extentionUseFile;
    private $fileName;
    private $media          = 'media';
    private $extensionList  = ["gif","jpg" ,"jpe","jpeg","png","swf"];

    public $foreground		= "/assets/logo.png";
    public $quantity        = 75;


    public function setFileName($uploadName)
    {
        $this->fileName = $_FILES[$uploadName];
    }

    public function getNameFile()
    {
        return $this->fileName['name'];
    }

    public function checkIsUploadFile()
    {
        $isUploadFile = $this->fileName['tmp_name'];
        return @is_uploaded_file($isUploadFile) ? 1 : 0;
    }

    public function getTempName()
    {
        return $this->fileName['tmp_name'];
    }

    public function getSizeFile()
    {
        return $this->fileName['size'];
    }

    public function getExtensionFile($filename = '')
    {
        $filename = $filename ? $filename : $this->getNameFile();
        $sExtension = substr($filename, (strrpos($filename, ".") + 1));
        $sExtension = strtolower($sExtension);
        return $sExtension;
    }

    public function checkExtensionFile($extensionList='')
    {
        $extenstionCheck    = $extensionList ? $extensionList : $this->extensionList;
        $this->extentionUseFile = $extenstionCheck;
        $extension          = $this->getExtensionFile();
        if (!in_array($extension, $extenstionCheck))
            return 0;

        return 1;
    }

    public function getExtentionUseFile()
    {
        return $this->extentionUseFile;
    }

    /**
     * Tao ra mot file name
     * @param string $filename : ten file upload
     * @return string
     */
    public function getGenerateNameFile()
    {
        $name = "";
        for($i=0; $i<10; $i++)
        {
            $name .= chr(rand(97,122));
        }
        $today   = getdate();
        $name   .= '-'. $today[0];
        $ext	 = $this->getExtensionFile();
        return $name . "." . $ext;
    }

    public function createDirectory($path)
    {
        if (!File::exists($path))
        {
            File::makeDirectory($path);
            chmod($path, 0777);
        };
    }

    public function checkOrCreateDirectory($uploadPath)
    {
        $media = $this->makeFullPathFileUpload($this->getLocaleDirectory(), $this->media);
        $this->createDirectory($media);
        if ($uploadPath)
        {
            foreach (explode('.', $uploadPath) as $dir)
            {
                $media .= DIRECTORY_SEPARATOR . $dir;
                $this->createDirectory($media);
            }
        }
        return $media;
    }

    /**
     * Check upload file path
     * @param string $path       : duong dan upload
     * @param string $filename   : ten file anh
     */
    public function checkPathFileUpload($path, $filename)
    {
        $fullPathFileDelete = $this->makeFullPathFileUpload($path, $filename);
        if(@filesize($fullPathFileDelete) == 0)
        {
            @unlink($fullPathFileDelete);
            return 0;
        }
        return 1;
    }

    public function makeFullPathFileUpload($path, $filename)
    {
        return $path . DIRECTORY_SEPARATOR .$filename;
    }

    /**
     * Xóa file
     * @param $path : duong dan file
     * @param $filename : ten file
     * @return int
     */
    public function deleteFile($path, $filename)
    {
        if($filename == "") return;
        $fullPathFileDelete = $this->makeFullPathFileUpload($path, $filename);
        if(file_exists($fullPathFileDelete))
        {
            @unlink($fullPathFileDelete);
        }
//        $array_file	= array("small_", "normal_", "larger_", "");
//        for($i=0; $i<count($array_file); $i++)
//        {
//            if(file_exists($path . $array_file[$i] . $filename)) @unlink($path . $array_file[$i] . $filename);
//        }
    }

    /**
     * Tao ảnh logo cty trên sản phẩm
     * @param string $filename : ten file ảnh
     * @return string
     */
    public function imageOverlap($path, $filename)
    {
        // Nếu tồn tại foreground thì mới overlap
        if(file_exists($this->getLocaleDirectory().$this->foreground))
        {
            $background		= $this->createImage($path, $filename);
            if(!$background) return;
            // Chèn ảnh overlap vào
            $foreground		= imagecreatefrompng($this->getLocaleDirectory().$this->foreground);
            $insertWidth	= imagesx($foreground);
            $insertHeight	= imagesy($foreground);
            $imageWidth		= imagesx($background);
            $imageHeight	= imagesy($background);
            $overlapX		= 30;
            $overlapY		= $imageHeight - $insertHeight - 30;
            imagecolortransparent($foreground, imagecolorat($foreground, 0, 0));
            imagecopy($background, $foreground, $overlapX, $overlapY, 0, 0, $insertWidth, $insertHeight);

            $this->outputImage($background, $path, $filename);

            // Hủy biến để giải phóng bộ nhớ
            unset($background);
            unset($foreground);
        }
    }

    public function outputImage($image_source, $path, $filename)
    {
        $sExtension     = $this->getExtenstion($filename);
        $pathFileName   = $this->makeFullPathFileUpload($path, $filename);
        switch($sExtension)
        {
            case "gif":
                imagegif($image_source, $pathFileName);
                break;

            case $sExtension == "jpg" || $sExtension == "jpe" || $sExtension == "jpeg":
                imagejpeg($image_source, $pathFileName, $this->quantity);
                break;

            case "png":
                imagepng($image_source, $pathFileName);
                break;
        }
    }

    /**
     * Check image file type
     * @param string $path : duong dan cua file anh
     * @param string $filename : ten file ảnh
     */
    public function createImage($path, $filename)
    {
        $image          = false;
        $sExtension     = $this->getExtenstion($filename);
        $pathFileName   = $this->makeFullPathFileUpload($path, $filename);
        switch($sExtension)
        {
            case "gif":
                $image = @imagecreatefromgif($pathFileName);
                break;

            case $sExtension == "jpg" || $sExtension == "jpe" || $sExtension == "jpeg":
                $image = @imagecreatefromjpeg($pathFileName);
                break;

            case "png":
                $image = @imagecreatefrompng($pathFileName);
                break;
        }
        if(!$image) $this->deleteFile($path, $filename);

        return $image;
    }
}