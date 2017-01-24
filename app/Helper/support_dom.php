<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 23/01/17
 * Time: 14:29
 */

if (! function_exists('clear_attribute'))
{
    function clear_attribute($strHtml, $attribute_removes= array())
    {
        //Cho thẻ HTML, meta UTF8, <body> vào DOM để tránh lỗi khi loadHTML
        $strHtml = '<html>' .
                        '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' .
                        '<body>' .
                        $strHtml .
                        '</body>' .
                    '</html>';
        $htmlReturn = null;
        if ($strHtml && $attribute_removes)
        {
            // set error level
            $internalErrors = libxml_use_internal_errors(true);

            $DOMDoc = new \DOMDocument("1.0", "UTF-8");
            $DOMDoc->loadHTML($strHtml);
            $node = $DOMDoc->getElementsByTagName("*");

            // Restore error level
            libxml_use_internal_errors($internalErrors);

            // Loop all element
            foreach ($node as $mynode)
            {
                if ($mynode->hasAttributes())
                {
                    //Loop toàn bộ attribute
                    $attributes = array();
                    foreach ($mynode->attributes as $attribute_name => $attribute_node)
                    {
                        foreach ($attribute_removes as $remove)
                        {
                            if ($remove == $attribute_name)
                            {
                                $attributes[] = $attribute_name;
                            }
                        }
                    }
                    foreach ($attributes as $value)
                    {
                        $mynode->removeAttribute($value);
                    }
                }
            }

            $htmlReturn =  $DOMDoc->saveHTML();
        }

        return $htmlReturn;
    }

}

if (! function_exists('get_content_between_tag'))
{
    function get_content_between_tag($strHtml, $index =1 , $tag = 'body')
    {
        $rt = null;
        $regex = preg_match("/<".$tag."[^>]*>(.*?)<\/".$tag.">/is", $strHtml, $matches);
        if ($regex)
        {
            $rt = rtrim($matches[$index]);
        }
        return $rt;
    }
}