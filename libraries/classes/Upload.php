<?php
use Illuminate\Support\Facades\File;

class Upload
{
    /**
	* Upload Function
	* $upload_name		    : Ten textbox upload vi du : new_picture
	* $upload_path		    : duong dan save file upload vi du : "../news_data/"
	* $extension_list	    : danh sach cac duoi mo rong duoc phep upload vi du : gif,jpg
	* $limt_size			: dung luong gioi han (tinh bang Kbyte) vi du : 200 (KB)
	* $insert_logo		    : có chèn thêm logo vào hay không
	*/
    public static function uploadFile($upload_name, $upload_path, $extension_list, $limit_size=2, $insert_logo=0)
    {

    }

    public static function getExtention($filename)
    {

    }

    public function getExtentionV2($filename)
    {
        $sExtension = substr($filename, (strrpos($filename, ".") + 1));
        $sExtension = strtolower($sExtension);
        return $sExtension;
    }
}