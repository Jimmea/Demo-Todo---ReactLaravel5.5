<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 16/03/17
 * Time: 19:00
 */

namespace App\Repositories\Files;


trait HandleUploadFile
{
    public function handleUploadFile($uploadName, $uploadPath, $extensionList, $limitSize, $inserLogo)
    {
        $this->setFileName($uploadName);
        $nameFile   = $this->getNameFile();

        if (!$nameFile)
        {
            $this->warningError = 'Vui lòng chọn một file trước khi upload';
            return;
        }

        // check file tam thoi
        if(!$this->checkIsUploadFile())
        {
            $this->warningError = 'Not found file upload temporary';
            return ;
        }

        // Check size file
        if ($this->getSizeFile() > 1024*$limitSize)
        {
            $this->warningError = "Dung lượng lớn hơn giới hạn cho phép $limitSize KB";
            return ;
        }

        // check extenstion filename
        if ($this->checkExtensionFile($extensionList)  !== 1 )
        {
            $this->warningError = "Phần mở rộng của file không đúng. Bạn chỉ
                                   upload được file có phàn mở rộng là " .  implode(', ', $this->getExtentionUseFile());
            return ;
        }

        $uploadPath         = $this->checkOrCreateDirectory($uploadPath);
        $newFileName        = $this->getGenerateNameFile();
        $fullPathFileUpload = $this->makeFullPathFileUpload($uploadPath, $newFileName);
        $uploaded           = move_uploaded_file($this->getTempName(), $fullPathFileUpload);

        if (! $uploaded)
        {
            $this->warningError = 'Not upload file.';
            return ;
        }

        chmod($fullPathFileUpload, 0777);
        //Check upload file path
        if ($this->checkPathFileUpload($uploadPath, $newFileName) != 1)
        {
            $this->warningError = 'Sai đường dẫn khi upload ảnh';
            return ;
        }

        // Chèn ảnh overlap vào ảnh upload lên
        if ($inserLogo == 1)
        {
            $this->imageOverlap($uploadPath, $newFileName);
        }

        return str_replace($this->getLocaleDirectory(), '', $fullPathFileUpload);
    }
}