<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 13/01/17
 * Time: 15:33
 */
function http_get_api($username='', $password ='',$url, $params= array())
{
    $params = convert_array_tostring($params);
    $params = $params ? '?'.$params : '';
    $url    = $url.$params;
//    return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if ($username && $password)
    {
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    }
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
    $output=curl_exec($ch);

    if(curl_errno($ch))
    {
        throw new Exception(curl_error($ch), 500);
    }

//    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//
//    if ($status_code != 200){
//        throw new Exception("Response with Status Code [" . $status_code . "].", $status_code);
//    }

    curl_close($ch);
    return $output ? json_decode($output, true) : array();
}

function http_post_api($email, $password, $url)
{
//    $params = convert_array_tostring($params);
    $data = [
        'email' => $email,
        'password' => $password
    ];

    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//    curl_setopt($ch, CURLOPT_USERPWD, "$email:$password");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $output=curl_exec($ch);

    if(curl_errno($ch))
    {
        throw new Exception(curl_error($ch), 500);
    }

    curl_close($ch);
    return $output ? json_decode($output, true) : array();
}