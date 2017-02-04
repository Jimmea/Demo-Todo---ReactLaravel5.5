<?php

/**
 * Created by PhpStorm.
 * User: hung
 * Date: 01/02/17
 * Time: 00:24
 */

/*$url ="http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?internalSource=popular&referringContentType=home%20page&clickId=cardslot%206";
echo (new \SupportDom($url,array('index'=> 0, 'tag'=> 'html')))->clearAttributeAnguarljs();*/
class ClearAttrHtmlDom
{
    private $strHtml    = null;
    private $index      = 0;
    private $tag        = 'body';

    public function __construct($url, $attr = array())
    {
        $this->strHtml =  $this->get_str_html($url);

        // nhan index thu may
        $index = array_get($attr, 'index');
        if ($index)
        {
            $this->index = $index;
        }

        // get noi dung cua the gi
        $tag = array_get($attr, 'tag');
        if ($tag)
        {
            $this->tag = $tag;
        }
    }

    /**
     * Created by : Hungokata
     * Time : 15:54 / 23/01/17
     * Chua toan bo thuocj tinh lien quan toi angular js
     * @param void
     * @return array
     */
    private function getAttributeAngularjs()
    {
        return [

        ];
    }

    /**
     * Created by : BillJanny
     * Date: 15:50 - 23/01/17
     * Get html theo url
     * @param string $url
     * @return string
     */
    private function get_str_html($url)
    {
        return file_get_contents($url);
    }

    /**
     * Created by : BillJanny
     * Date: 15:50 - 23/01/17
     * get noi dung giua the tag cua mot template html
     * @param void
     * @return string
     */
    public function get_content_between_tag()
    {
        $rt = null;
        $regex = preg_match("/<".$this->tag."[^>]*>(.*?)<\/".$this->tag.">/is", $this->strHtml, $matches);
        if ($regex)
        {
            $rt = rtrim($matches[$this->index]);
        }
        return $rt;
    }

    /**
     * Created by : BillJanny
     * Date: 15:52 - 23/01/17
     * Xoa di tat ca thuoc tinh cua anguarljs
     * @param void
     * @return string
     */
    public function clearAttributeAnguarljs()
    {
        $strHtml            = $this->get_content_between_tag();
        $attribute_removes  = $this->getAttributeAngularjs();

        $strHtml = '<html>' .
            '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' .
            '<body>' .
            $strHtml .
            '</body>' .
            '</html>';

        $htmlReturn = null;
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

        return $DOMDoc->saveHTML();
    }

    public function renderHtmlFile()
    {
        $html = $this->clearAttributeAnguarljs();
        chmod(public_path().'/template', 0740);

        $filePath = public_path().'/template/copy.html';

        if(!\Illuminate\Support\Facades\File::exists($filePath))
        {
            \Illuminate\Support\Facades\File::put($filePath, $html);
        }
        return 'Du lieu save thanh cong trong '. $filePath;
    }
}