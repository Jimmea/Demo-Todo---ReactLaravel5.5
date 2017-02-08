<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 13/01/17
 * Time: 15:33
 */


if (! function_exists('get_value'))
{
    function get_value($value_name, $data_type = "int", $method = "GET", $default_value = 0, $advance = 0)
    {

        $value = $default_value;
        switch ($method) {
            case "GET":
                if (isset($_GET[$value_name])) $value = $_GET[$value_name];
                break;
            case "POST":
                if (isset($_POST[$value_name])) $value = $_POST[$value_name];
                break;
            case "COOKIE":
                if (isset($_COOKIE[$value_name])) $value = $_COOKIE[$value_name];
                break;
            case "SESSION":
                if (isset($_SESSION[$value_name])) $value = $_SESSION[$value_name];
                break;
            default:
                if (isset($_GET[$value_name])) $value = $_GET[$value_name];
                break;
        }
        $valueArray = array
        (
            "int" => @intval($value),
            "str" => trim(@strval($value)),
            "flo" => @floatval($value),
            "dbl" => @doubleval($value),
            "arr" => $value
        );

        foreach ($valueArray as $key => $returnValue)
        {
            if ($data_type == $key)
            {
                if ($advance != 0)
                {
                    switch ($advance)
                    {
                        case 1:
                            $returnValue = replace_mq($returnValue);
                            break;
                        case 2:
                            $returnValue = htmlspecialbo($returnValue);
                            break;
                        case 3:
                            $returnValue = htmlspecialbo(replace_mq($returnValue));
                            break;
                    }
                }
                //Do số quá lớn nên phải kiểm tra trước khi trả về giá trị
                if (
                    ($data_type != "str") &&
                    ($data_type != "arr") &&
                    (strval($returnValue) == "INF"))
                    return 0;

                return $returnValue;
                break;
            }
        }
        return (intval($value));
    }
}



if (! function_exists('get_param'))
{
    function get_param($param)
    {
        return Request::has($param) ? Request::get($param) : '';
    }
}

if (!function_exists('get_uri'))
{
    /**
     * Tra ve cac tham so query tren url
     *
=======
if (! function_exists('get_query_string'))
{
    /**
     * Created by : BillJanny
     * Date: 2:24 PM - 2/5/2017
     * Tra ve tat ca cac tham so query tren url
     * @param void
     * @return string
     */
    function get_query_string()
    {
        return $_SERVER['QUERY_STRING'];
    }
}


if (! function_exists('get_uri'))
{
    /**
     * Tra ve duong dan cung voi cac tham so query tren url
     * @return string
     */
    function get_uri()
    {
        return $_SERVER['REQUEST_URI'];;
    }
}


if (! function_exists('get_full_url')) {
    /**
     *  Tra ve toan bo duong dan url
     *
     * @return string
     */
    function get_full_url()
    {
        return 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://'
            . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    }
}

/**
 * render ra url muốn append vào url phân tr
 *
 * @param array $append : mang truyen vao can append
 * @return str
 */

if (! function_exists('append_param_url'))
{
    function append_param($append= array(), $page= array())
    {
        $url_uri      = get_uri();
        $data_url     = explode('?', $url_uri);
        $redirect_url = ($data_url[0] && $data_url[0] != '/') ? $data_url[0] : '';
        $url_query    = (isset($data_url[1]) && $data_url[1]) ? $data_url[1] : '';
        parse_str($url_query, $data);

        // check mảng append link để xuất ra link
        $append_link =  array();
        $append     = $page ? array_merge($append, $page) : $append;

        foreach($append as $ka => $va)
        {
            if (preg_match('/^\d+$/', $ka))
                throw new Exception('Giá trị '.$va .' gán link có key= '. $ka . ' phải là một chuoi');
            if($va)
            {
                $append_link[urlencode($ka)]= urlencode($va);
            }
        }

        // check mang param query để thay đổi nếu có k
        if ($data)
        {
            foreach ($data as $k => $value)
            {
                if($append_link)
                {
                    foreach ($append_link as $ka => $valuea)
                    {
                        if ($valuea) $data[$ka] = urlencode($valuea);
                    }
                }
            }
        }

        $query = $data ? $data : $append_link;
        return $redirect_url .'?'.http_build_query($query);
    }
}

if (!function_exists('get_separator_url'))
{
    function get_separator_url($url)
    {
        if (strpos($url, '?') === false)
        {
            $url .= '?';
        }
        else if (substr($url, strlen($url)-1, 1) != '?' && strpos($url, '&') === false)
        {
            // Nếu biến $url có '?' nhưng không kết thúc bằng '?' và có chứa dấu '&' thì bổ sung vào cuối
            $url .= '&';
        }
        return $url;
    }
}

/**
 * Check URL
 *
 * @param  string  $url
 * @return boolean
 */
if (! function_exists('is_url'))
{
    function is_url($url) {
        return filter_var($url, FILTER_VALIDATE_URL);
    }
}


