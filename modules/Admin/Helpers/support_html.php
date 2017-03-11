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
        $bread  = '<div class="row bg-title row-breadcrumbs">';
            $bread  .= '<div class="col-xs-12">';
                $bread  .= '<ol class="breadcrumb">';
                    $bread .= '<li><a href="'.url('/admincpp').'">Admin</a></li>';
                    foreach ($link as $route => $value)
                    {
                        if ($value) $bread .= '<li><a href="'.generate_url_from_route($route).'">'.$value.'</a></li>';
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
        return '<small class="text-danger" style="margin-bottom: 15px;display: block">'.trans('admin::form.titleRequired').'.</small>';
    }
}

if (! function_exists('box_title'))
{
    function box_title($title, $message = true)
    {
        $str = '<h3 class="box-title">'.$title.'</h3>'.($message ? note_required() : '');
        return new \Illuminate\Support\HtmlString($str);
    }
}

if(!function_exists('header_title_action'))
{
    function header_title_action($title, $route="", $titleAdd="ADD NEW")
    {
        $html = '<div class="header-title pull-left">';
            $html .= box_title($title, false);
        $html .= '</div>';
        $html .= '<div class="header-action pull-right">';
            if(is_string($route))
            {
                $html .= '<a href="'.route($route).'" class="btn btn-info btn-sm"><i class="icon-plus"></i> ' . $titleAdd . '</a>';
            }else
            {
                $routeName  = isset($route[0]) ? $route[0] : '';
                $routeParam = isset($route[1]) ? $route[1] : '';
                $html .= '<a href="'.route($routeName, $routeParam).'" class="btn btn-info btn-sm"><i class="icon-plus"></i> ' . $titleAdd . '</a>';
            }
        $html .= '</div>';

        return new \Illuminate\Support\HtmlString($html);
    }
}

if (! function_exists('box_upload'))
{
    function box_upload()
    {
        return '<span class="input-group-addon getlink_media" style="background:#428bca;color: #fff;cursor: pointer;padding: 3px 8px" title="My media"><i class="icon-picture"></i></span>';
    }
}