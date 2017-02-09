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


if (! function_exists('note_required'))
{
    function note_required()
    {
        return '<small class="text-danger">'.trans('admin::form.titleRequired').'.</small>';
    }
}

if (! function_exists('box_title'))
{
    function box_title($title, $message = true)
    {
        return '<h3 class="box-title">'.$title.'</h3>'.($message ? note_required() : '');
    }
}

if (! function_exists('box_upload'))
{
    function box_upload()
    {
        return '<span class="input-group-addon getlink_local" title="My devide"><i class="icon-cloud-upload"></i></span>
        <span class="input-group-addon getlink_media" title="My media"><i class="icon-picture"></i></span>';
    }
}