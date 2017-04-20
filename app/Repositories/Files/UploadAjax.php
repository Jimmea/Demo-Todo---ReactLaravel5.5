<?php
/**
 * Created by PhpStorm.
 * User: IT_PTSP
 * Date: 3/2/2017
 * Time: 9:06 AM
 */

namespace App\Repositories\Files;

trait UploadAjax
{
    private $extention      = ["gif","jpg" ,"jpe","jpeg","png","swf"];
    private $extentionUse   ;
    private $media          = 'media';

    public function checkExtention($filename, $exten= array())
    {
        $extenstionCheck    = $exten ? $exten : $this->extention;
        $extenstion         = $this->getExtenstion($filename);
        $this->extentionUse = $extenstionCheck;

        if (!in_array($extenstion, $extenstionCheck))
            return 0;

        return 1;
    }

    public function uploadFileAjax($upload_name, $upload_path = '', $extension_list = array(), $limit_size=500, $inserLogo = 0)
    {
        if (!$upload_name)
        {
            $this->warningError = 'Vui lòng chọn một file trước khi upload';
            return;
        }
        // check file tam thoi
        if (!@is_uploaded_file($upload_name['tmp_name']))
        {
            $this->warningError = 'Not found file upload temporary';
            return ;
        }

        // Check kich thuoc file
        if ($upload_name['size'] > 1024*$limit_size)
        {
            $this->warningError = "Dung lượng lớn hơn giới hạn cho phép $limit_size KB";
            return ;
        }

        // check extenstion filename
        if ($this->checkExtention($upload_name['name'], $extension_list)  !== 1 )
        {
            $this->warningError = "Phần mở rộng của file không đúng. Bạn chỉ 
                                   upload được file có phàn mở rộng là " .  implode(', ', $this->extentionUse);
            return ;
        }

        // Upload file
        $upload_path        = $this->checkOrCreateDirectory($upload_path);
        $newFilename        = $this->generateName($upload_name['name']);
        $pathFileName       = $this->makeFullPathFileUpload($upload_path, $newFilename);
        $uploaded           = move_uploaded_file($upload_name['tmp_name'], $pathFileName);
        if (! $uploaded)
        {
            $this->warningError = 'Not upload file.';
            return ;
        }

        chmod($pathFileName, 0777);
        //Check upload file path
        if ($this->checkPathFileUpload($upload_path, $newFilename) != 1)
        {
            $this->warningError = 'Sai đường dẫn khi upload ảnh';
            return ;
        }

        // Chèn ảnh overlap vào ảnh upload lên
        if ($inserLogo == 1)
        {
            $this->imageOverlap($upload_path, $newFilename);
        }
        return str_replace($this->getLocaleDirectory(), '', $pathFileName);
    }

    /**
     * Tao ra mot file name
     * @param string $filename : ten file upload
     * @return string
     */
    public function generateName($filename)
    {
        $name = "";
        for($i=0; $i<10; $i++)
        {
            $name .= chr(rand(97,122));
        }
        $today   = getdate();
        $name   .= '-'. $today[0];
        $ext	 = $this->getExtenstion($filename);
        return $name . "." . $ext;
    }

    public function getExtenstion($filename)
    {
        return $this->getExtensionFile($filename);
    }
}