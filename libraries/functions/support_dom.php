<?php

if (! function_exists('get_content_between_bytag'))
{
    function get_content_between_bytag($string, $tagname)
    {
        $pattern = "#<\s*?$tagname\b[^>]*>(.*?)</$tagname\b[^>]*>#s";
        preg_match($pattern, $string, $matches);
        return $matches[1];
    }
}
