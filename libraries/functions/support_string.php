<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 13/01/17
 * Time: 15:34
 */

if (!function_exists('title_replace'))
{
    /**
     * Created by : BillJanny
     * Date: 23:24 - 13/01/17
     * thay the chuoi chuoi vao
     * @param string $title
     * @return string
     */
    function title_replace($title)
    {
        $arrayReplace = array(
            '&#8211;', '&nbsp;', '&#226;', '&#224;', '&#244;', '&#225;', '&#234;', '&#243;', '&#237;', '&#236;', '&#249;', '&#250;',
            '&#253;', '&#227;', '&#242;'
        );

        $arrayText		= array(
            '', '', 'â', 'à', 'ô', 'á', 'ê', 'ó', 'í', 'ì', 'ù', 'ú',
            'ý', 'ã', 'ò'
        );
        $title	= strip_tags($title);
        $title	= str_replace($arrayReplace, $arrayText, $title);
        $title	= replace_mq($title);
        $title	= trim($title);

        return $title;
    }
}

if (! function_exists('format_currency'))
{
    function format_currency($interge)
    {
        return number_format($interge, 0, ',', '.');
    }
}


if (!function_exists('convert_array_tostring'))
{
    function convert_array_tostring ($params, $url_params='')
    {
        // Tạo đoạn url chứa tham số
        foreach ($params as $key=>$value)
        {
            if ($url_params == '')
                $url_params .= $key . '=' . urlencode($value);
            else
                $url_params .= '&' . $key . '=' . urlencode($value);
        }

        return $url_params;
    }
}

if (! function_exists('conver_unique_array_tostring'))
{
    function conver_unique_array_tostring($data, $separator=',')
    {
        $data = array_unique($data);

        return implode($separator, $data);
    }
}

if (! function_exists('conver_array_to_string_form'))
{
    function conver_array_to_string_form($data)
    {
        if (!$data) return '';
        $html = '';
        foreach ($data as $key => $value)
        {
            $html  .=' '.$key .'='. $value;
        }

        return $html;
    }
}

if (! function_exists('replace_mq'))
{
    /**
     * Created by : BillJanny
     * Date: 23:23 - 13/01/17
     * Thay the cac ki tu khong can thiet
     * @param string $text
     * @return string
     */
    function replace_mq($text)
    {
        $text	= str_replace("\'", "'", $text);
        $text	= str_replace("'", "''", $text);
        return $text;
    }
}

/**
 * @param $str
 * @param string $separator
 * @return mixed
 */
if ( ! function_exists('str_remove_accent'))
{
    function str_remove_accent($str, $separator = ' ')
    {
        $str = trim($str);
        $str = stripslashes($str);
        $str = str_replace(array("&quot;", ":", ".", "'", ",", ";", ")", "(", "?", "@", "%", "*", "&", "^", "!", "=", "{", "}", "\\", '"', '-', '‘', '’', '•', "&nbsp;"), " ", $str);
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        $str = str_replace(array(' ', '--', '|', "/", '_', "[", "]", "+"), $separator, $str);
        $str = strtolower($str);
        return $str;
    }
}

if ( ! function_exists('str_slug_uft8')) {
    /**
     * @param $title
     * @param string $separator
     * @return string
     */
    function str_slug_uft8($title, $separator = '-')
    {
        $title = str_remove_accent($title);
        $flip = $separator == '-' ? '_' : '-';
        $title = preg_replace('![' . preg_quote($flip) . ']+!u', $separator, $title);
        $title = preg_replace('![^' . preg_quote($separator) . '\pL\pN\s]+!u', '', mb_strtolower($title));
        $title = preg_replace('![' . preg_quote($separator) . '\s]+!u', $separator, $title);

        return trim($title, $separator);
    }
}

if (! function_exists('htmlspecialbo'))
{
    function htmlspecialbo($str)
    {
        $arrDenied = array('<', '>', '\"', '"');
        $arrReplace = array('&lt;', '&gt;', '&quot;', '&quot;');
        $str = str_replace($arrDenied, $arrReplace, $str);
        return $str;
    }
}

if (! function_exists('cut_str'))
{
    function cut_string()
    {
        return mb_substr($str,0,$length,"UTF-8");
    }
}

if (! function_exists('cut_str_separator'))
{
    function cut_str_separator($str, $length, $char="...")
    {
        //Nếu chuỗi cần cắt nhỏ hơn $length thì return luôn
        $strlen = mb_strlen($str, "UTF-8");
        if($strlen <= $length) return $str;

        //Cắt chiều dài chuỗi $str tới đoạn cần lấy
        $substr = mb_substr($str, 0, $length, "UTF-8");
        if(mb_substr($str, $length, 1, "UTF-8") == " ") return $substr . $char;

        //Xác định dấu " " cuối cùng trong chuỗi $substr vừa cắt
        $strPoint= mb_strrpos($substr, " ", "UTF-8");

        //Return string
        if($strPoint < $length - 20) return $substr . $char;
        else return mb_substr($substr, 0, $strPoint, "UTF-8") . $char;
    }
}