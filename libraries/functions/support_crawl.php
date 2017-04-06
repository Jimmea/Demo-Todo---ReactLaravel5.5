<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 13/01/17
 * Time: 15:33
 */

if (!function_exists('use_curl_get_html'))
{
    /**
     * Created by : BillJanny
     * Date: 19:26 - 13/01/17
     * Get thong tin trang html boi url
     * @param string $url : thong in url
     * @param string $cookie : bien cookie
     * @return array
     */
    function use_curl_get_html($url ='', $cookie='')
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36');
        if($cookie)
        {
            curl_setopt($ch, CURLOPT_COOKIE, $cookie);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_ENCODING , "gzip");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        $data = curl_exec($ch);
        if(curl_error($ch))
        {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        return $data;
    }
}

if (!function_exists('use_curl_get_data'))
{
    /**
     * Created by : BillJanny
     * Date: 19:28 - 13/01/17
     * Nhan thong tin data tu mot url
     * @param $string $url : any path $url
     * @return array
     */
    function use_curl_get_data($url, $showHeader= false)
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_ENCODING , "gzip");
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        $data 	= curl_exec($ch);
        if($showHeader)
        {
            $header = curl_getinfo($ch);
            echo_array($header);
        }
        curl_close($ch);

        return $data;
    }
}

if (!function_exists('use_curl_get_content'))
{
    //Function lấy html của 1 url truyền vào
    function use_curl_get_content($url, $post = "", $refer = "", $usecookie = false) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);

        if($post) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt ($curl, CURLOPT_POSTFIELDS, $post);
        }

        if($refer) {
            curl_setopt($curl, CURLOPT_REFERER,$refer);
        }

        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/6.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3");
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        //curl_setopt($curl, CURLOPT_TIMEOUT_MS, 5000);

        if ($usecookie) {
            curl_setopt($curl, CURLOPT_COOKIEJAR, $usecookie);
            curl_setopt($curl, CURLOPT_COOKIEFILE, $usecookie);
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);

        $html = curl_exec($curl);
        curl_close($curl);
        return $html;
    }
}

if (!function_exists('use_curl_post_data'))
{
    function use_curl_post_data($url, $data)
    {
        $str		= base64_encode(json_encode($data));
        $array 	= array('data' => $str);
        $ch 		= curl_init();                    // initiate curl
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, true);  // tell curl you want to post something
        curl_setopt($ch, CURLOPT_POSTFIELDS, $array); // define what you want to post
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
        $output = curl_exec ($ch); // execute

        curl_close ($ch); // close curl handle

        return $output;
    }
}

/**
 * Dùng để download hình ảnh thông qua curl
 * @param string $url : Đường dẫn url của hình ảnh
 * @param string $path : đường dẫn chứa thứ mục ảnh
 * @param string $name_img="" : Tên ảnh
 * @return string
 */
if (! function_exists('use_curl_download_file'))
{
    function use_curl_download_file($url, $path='', $name_img="")
    {
        //tạo folder images của truyện
        $path  = $path ? MEDIA.DIRECTORY_SEPARATOR.$path : MEDIA.DIRECTORY_SEPARATOR.'images';
        if(!file_exists(ROOTSTATIC.$path))
        {
            mkdir(ROOTSTATIC.$path);
            chmod(ROOTSTATIC.$path,0777);
        }

        $path    =  $path.DIRECTORY_SEPARATOR;
        if($name_img  != "")
        {
            $filename   =  $name_img;
        } else {
            $filename	=	generate_name($url);
        }
        $filePath	= $path . $filename;
        $ch	=	curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/6.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.7) Gecko/20050414 Firefox/1.0.3");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        $result	=	curl_exec($ch);
        curl_close($ch);
        $fp	   =	fopen(ROOTSTATIC.$filePath,'w+');
        fwrite($fp, $result);
        fclose($fp);
        return $filePath;
    }
}