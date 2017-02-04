<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 03/02/17
 * Time: 14:36
 */

if (! function_exists('bread_crumb'))
{
    function bread_crumb($link =array())
    {
        if (!$link) return '';
        $bread  = '<div class="row bg-title">';
            $bread  .= '<div class="col-xs-12">';
                $bread  .= '<ol class="breadcrumb">';
                    $bread .= '<li><a href="'.url('/admincpp').'">Admin</a></li>';
                    foreach ($link as $key => $value)
                    {
                        if ($value)
                        {
                            $href   = (string)$key ? route($key) : 'javascript:void(0)';
                            $bread .= '<li><a href="'.$href.'">'.$value.'</a></li>';
                        }
                    }
                $bread .= '</ol>';
            $bread .='</div>';
        $bread .='</div>';

        return $bread;
    }
}