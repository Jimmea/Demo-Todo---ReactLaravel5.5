<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 27/01/17
 * Time: 17:38
 *  File nay gom cac function ho tro ve form
 */


/**
 * Created by : BillJanny
<<<<<<< HEAD
=======
 * Date: 9:13 PM - 2/5/2017
 * Đóng form
 * @param array $route : mang chua thong tin ten route va param route
 * @param boolean $file : Cho phep tao form voi file
 * @return string
 */
if (! function_exists('form_begin'))
{
    function form_begin($route, $file = true)
    {
        (count($route) >1)
                ? list($routeName, $routeParam) = $route
                : list($routeName) = $route;

        $route = isset($routeParam)
                    ? route($routeName, $routeParam)
                    : route($routeName);

        return '<form class="form-horizontal" method="post" action="'.$route.'" '.($file ? 'enctype="multipart/form-data"' : '').'>';
    }
}

/**
 * Created by : BillJanny
 * Date: 9:13 PM - 2/5/2017
 * Đóng form
 * @param void
 * @return string
 */
if (! function_exists('form_close'))
{
    function form_close()
    {
        return button_submit_reset().'</form>';
    }
}

/**
 * Created by : BillJanny
>>>>>>> 3390a7e96e5d47ba9652b289b54ee082e230de91
 * Date: 17:50 - 27/01/17
 * Kiem tra co loi khong xuat ra mot chuoi de cho form-group hien mau do neu co loi
 * @param string $key : key loi cua form
 * @return string
 */
if (! function_exists('has_error'))
{
    function has_error($errors, $key)
    {
        return isset($errors) && $errors->has($key) ? 'has-error' : '';
    }
}

/**
 * Created by : BillJanny
 * Date: 18:17 - 27/01/17
 * Lay thong tin loi duoc thiet lap
 * @param string $key key cua loi
 * @return string
 */
if (! function_exists('get_error'))
{
    function get_error($errors, $key)
    {
        return isset($errors) ? '<span class="help-block">'.$errors->first($key).'</span>' : '';
    }
}

/**
 * Created by : BillJanny
 * Date: 18:17 - 27/01/17
 * giu data trong form
 * @param  string $field : truong du lieu
 * @param  array $dataform : mang du lieu
 * @return string
 */
if (! function_exists('get_value_field'))
{
    function get_value_field($field, $dataform= array())
    {
        return old($field, isset($dataform) && $dataform ? $dataform->$field : '');
    }
}

if (! function_exists('label-danger'))
{
    function label_danger()
    {
        return '<span class="text-danger">(*)</span>';
    }
}

if (! function_exists('submit_reset'))
{
    function button_submit_reset()
    {
        return '<div class="form-group">
                <button type="submit" class="btn btn-info btn-sm"><i class="icon-check"></i> Save</button>
                <button type="reset" class="btn btn-info btn-sm"><i class="icon-refresh"></i> Reset</button>
            </div>';
    }
}

if (! function_exists('li_tab'))
{
    function li_tab($html= array(), $active= false)
    {
        $id = $html['id'];
        $title = $html['title'];
        $active = $active ? 'active' : '';

        return ' <li role="presentation" class="'.$active.'">
                    <a href="#'.$id.'" aria-controls="general" class="text-uppercase"
                       role="tab" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs">
                            <i class="icon-home"></i></span>
                        <span class="hidden-xs">'.$title.'</span>
                    </a>
                 </li>';
    }
}

if (! function_exists('ul_tab_begin'))
{
    function ul_tab_begin()
    {
        return '<ul class="nav customtab nav-tabs" role="tablist">';
    }
}
if (! function_exists('ul_tab_close'))
{
    function ul_tab_close()
    {
        return '</ul>';
    }
}

if (! function_exists('input_hidden'))
{
    function input_hidden($link, $name)
    {
        return '<input type="hidden" name="'.$name.'" value="'.$link.'"/>';
    }
}

if (! function_exists('form_group'))
{
    /**
     * Created by : BillJanny
     * Date: 10:17 PM - 2/4/2017
     * ham tao mot form group kieu checkbox, text,file, radio, textarea
     * @param string $title : tên label của form-group
     * @param string $name : tên name cuar input
     * @param string $type : kiểu input
     * @param string $required :Thông tin có bắt buộc nhập không true|false
     * @param string $errors :Mảng lỗi truyền vào
     * @param array $dataForm : Mảng giữ liệu từ form
     * @param array $attributes : Mảng thuộc tinhsc của input
     * @return
     */
    function form_group($title,$name,$type, $required = false, $errors, $dataForm = [], $attributes= array())
    {
        $html           = null;
        $has_error      = $required ? has_error($errors,$name) : '';
        $text_danger    = $required ? label_danger()  : '';
        $first_error    = get_error($errors, $name);
        $value          = get_value_field($name, $dataForm);
        $previewImage   = $type == 'file' ? '<span class="icon-eye hide"></span>' : '';


        // Bắt đầu form group
        $html = '<div class="form-group '.$has_error.'">';
        $html .= '<label>' . $title . ' ' . $text_danger. $previewImage. '</label>';
        switch ($type)
        {
            case 'text' :
                $input  = '<input type="text"  class="form-control" name="'.$name.'" value="'.$value.'" />';
                break;

            case 'email' :
                $input  = '<input type="email" class="form-control" name="'.$name.'" value="'.$value.'" />';
                break;

            case 'select' :
                break;

            case 'radio' :
                break;

            case 'file' :
                $input =  '<div class="input-group image-group">
                                <input type="text" name="'.$name.'" class="form-control" value="'.$value.'" />
                                '.box_upload().'
                           </div>';
                break;

            case 'textarea' :
                $input = '<textarea name="'.$name.'" class="form-control" cols="30" rows="5">'.$value.'</textarea>';
                break;
        }

                $html .= $input;
            $html .= $first_error;
        $html .= '</div>';
        // Kết thúc form group

        return $html;
    }
}




