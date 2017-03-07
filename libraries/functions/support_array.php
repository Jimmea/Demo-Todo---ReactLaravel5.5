<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 13/01/17
 * Time: 15:34
 * Tong hop cac ham ho tro ve mang trng ung dung
 *
 */


if (! function_exists('break_string_toarray'))
{
    function break_string_toarray($string)
    {
        $string = str_replace(array("\r\n", "\r", "\n", "\t"), '|||', $string);
        return explode('|||', $string);
    }
}

if (! function_exists('break_array_tostring'))
{
    function break_array_tostring($array)
    {
        if ($array)
        {
            $string = implode('|||', $array);
            $string = str_replace('|||',"\r\n", $string);
            return $string;
        };
        return '';
    }
}



if (!function_exists('echo_array'))
{
    /**
     * Created by : BillJanny
     * Date: 19:31 - 13/01/17
     * Show thong tin mang
     * @param array $array : mang truyen vao
     * @return
     */
    function echo_array($array)
    {
        if(!empty($array)){
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        }else{
            echo "ko co hang";
        }
    }
}

if (!function_exists('remove_keyword_domain'))
{
    function remove_keyword_domain($str)
    {
        $array_keyword = array(
            'giadinh.net.vn', 'xahoi.com.vn', 'vietgiaitri.com', '(afamily.vn)', '24h.com.vn',
            'kenh14.vn', 'knorr.com.vn','giadinh.tv','( PHUNUTODAY )','nauanngon123.com','eva.vn', 'webgiadinh.org',
            'niemdamme.com.vn','bepgiadinh.com','yeunoitro.net','amthuchanoi.org','toivaobep.org','dayhocnauan.com', 'sotaynauan.com',
            'monan9.com', 'cachnauan.net', 'tapchiamthuc.com', '- Tạp Chí Gia Đình', 'nauankhongkho.com', 'mongingon.com', 'monngonmoingaydelam.com',
            'monngonmoingay.com', 'agiadinh.net', 'lambanh365.com', 'tapchitieudung.net'
        );

        $str	= str_replace($array_keyword, "", $str);
        $str	= trim($str, ' |-');

        return $str;
    }
}

if (! function_exists('get_query_array'))
{
    function get_query_array()
    {
        $string = get_query_string();
        parse_str($string, $query);
        return $query;
    }
}