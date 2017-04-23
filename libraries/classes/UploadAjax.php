<?php

class UploadAjax
{
    private $extention      = ["gif","jpg" ,"jpe","jpeg","png","swf"];
    private $warningError   = '';
    private $foreground		= "/assets/logo.png";
    private $quantity       = 75;
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

    public function checkDir($path)
    {
        if (!\Illuminate\Support\Facades\File::exists($path))
        {
            \Illuminate\Support\Facades\File::makeDirectory($path);
            chmod($path, 0777);
        };
    }

    public function checkOrCreateDir($upload_path)
    {
        $media = public_path() . DIRECTORY_SEPARATOR . $this->media;
        $this->checkDir($media);

        if ($upload_path)
        {
            foreach (explode('.', $upload_path) as $dir)
            {
                $media .= DIRECTORY_SEPARATOR . $dir;
                $this->checkDir($media);
            }
        }

        return $media;
    }

    public function uploadFile($upload_name, $upload_path = '', $extension_list = array(), $limit_size=500, $inserLogo = 0)
    {
        $upload_path = $this->checkOrCreateDir($upload_path);
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
        $newFilename = $this->generateName($upload_name['name']);
        $uploaded    = move_uploaded_file($upload_name['tmp_name'], $upload_path . DIRECTORY_SEPARATOR . $newFilename);
        if (! $uploaded)
        {
            $this->warningError = 'Not upload file.';
            return ;
        }

        chmod($upload_path . DIRECTORY_SEPARATOR . $newFilename, 0777);
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

        $media =  $upload_path . DIRECTORY_SEPARATOR . $newFilename;

        return str_replace(public_path(), '', $media);
    }

    public function showWarningError()
    {
        return $this->warningError;
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
        $sExtension = substr($filename, (strrpos($filename, ".") + 1));
        $sExtension = strtolower($sExtension);
        return $sExtension;
    }

    /**
     * Tao ảnh logo cty trên sản phẩm
     * @param string $filename : ten file ảnh
     * @return string
     */
    public function imageOverlap($path, $filename)
    {
        // Nếu tồn tại foreground thì mới overlap
        if(file_exists(public_path().$this->foreground))
        {
            $background		= $this->createImage($path, $filename);
            if(!$background) return;
            // Chèn ảnh overlap vào
            $foreground		= imagecreatefrompng(public_path().$this->foreground);
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

    /**
     * Function output_image
     */
    public function outputImage($image_source, $path, $filename)
    {
        $sExtension = $this->getExtenstion($filename);
        switch($sExtension)
        {
            case "gif":
                imagegif($image_source, $path . DIRECTORY_SEPARATOR . $filename);
                break;

            case $sExtension == "jpg" || $sExtension == "jpe" || $sExtension == "jpeg":
                imagejpeg($image_source, $path . DIRECTORY_SEPARATOR . $filename, $this->quantity);
                break;

            case "png":
                imagepng($image_source, $path . DIRECTORY_SEPARATOR . $filename);
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
        $sExtension = $this->getExtenstion($filename);
        //Check image file type extensiton
        $image = false;
        switch($sExtension)
        {
            case "gif":
                $image = @imagecreatefromgif($path . DIRECTORY_SEPARATOR . $filename);
                break;

            case $sExtension == "jpg" || $sExtension == "jpe" || $sExtension == "jpeg":
                $image = @imagecreatefromjpeg($path . DIRECTORY_SEPARATOR . $filename);
                break;

            case "png":
                $image = @imagecreatefrompng($path . DIRECTORY_SEPARATOR . $filename);
                break;
        }
        if(!$image) $this->deleteFile($path, $filename);

        return $image;
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

        if(file_exists($path . DIRECTORY_SEPARATOR .$filename))
        {
            @unlink($path . DIRECTORY_SEPARATOR . $filename);
        }
//        $array_file	= array("small_", "normal_", "larger_", "");
//        for($i=0; $i<count($array_file); $i++)
//        {
//            if(file_exists($path . $array_file[$i] . $filename)) @unlink($path . $array_file[$i] . $filename);
//        }
    }

    /**
	* Check upload file path
    * @param string $path       : duong dan upload
    * @param string $filename   : ten file anh
	*/
    public function checkPathFileUpload($path, $filename)
    {
        if(@filesize($path . DIRECTORY_SEPARATOR . $filename) == 0)
        {
            @unlink($path . DIRECTORY_SEPARATOR . $filename);
            return 0;
        }
        return 1;
    }

}