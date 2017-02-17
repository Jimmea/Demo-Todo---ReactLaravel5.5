<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 11/02/17
 * Time: 08:50
 */
class Form
{
    // 0 : Hien thi loi ben duoi input | 1 : Hien thi loi tren dau form
    public $formTypeError   = 0;
    public $form;
    // Kieu hien thi inline hoac horizontal form group
    public $formType        = 1;
    public $classFormBegin  = 'form-horizontal';
    // form control cho input
    public $formControl     = 'form-control';
    // Bien luu trua du lieu cua form
    public $formDb;
    // bien errors khi validate
    public $errors;
    // Luu thuoc tinh html
    private $classHtml;

    public function __construct($errors='', $formDb='')
    {
        $this->errors  = $errors;
        $this->formDb  = $formDb;
    }

    /**
     * Created by : BillJanny
     * Date: 09:00 - 11/02/17
     * Add title cua form
     * @param
     * @return
     */
    public function titleForm($title='')
    {

    }

    /**
     * Created by : BillJanny
     * Date: 09:00 - 11/02/17
     * Bat dau tao form
     * @param
     * @return
     */
    public function beginForm($route = array(),$method ='POST',$enctype=' multipart/form-data')
    {
        (count($route) >1)
            ? list($routeName, $routeParam) = $route
            : list($routeName) = $route;

        $action = isset($routeParam)
                ? route($routeName, $routeParam)
                : route($routeName);

        $form ='<form';
            $form .= ' class=' . $this->classFormBegin;
            $form .= ' action=' .$action;
            $form .= ' method=' .$method;
            $form .= ' enctype=' .$enctype;
        $form .='>'.csrf_field();

        return $form;
    }

    /**
     * Created by : BillJanny
     * Date: 15:17 - 11/02/17
     * Create a style for html
     * @param string $id : selector id
     * @param int $width : So px:
     * @param int $height : So px
     * @return string
     */
    public function createStyle($id, $width, $height)
    {
        return 'id='.$id.' class="input-sm '.$this->formControl.$this->classHtml.'" style="width:'.$width.'px; height:'.$height.'px"';
    }

    /**
     * Created by : BillJanny
     * Date: 2:14 AM - 2/12/2017
     * Tao group button submit reset
     * @param void
     * @return string
     */
    public function groupSubmitReset()
    {
        return button_submit_reset();
    }

    /**
     * Created by : BillJanny
     * Date: 09:00 - 11/02/17
     * Dong form
     * @param
     * @return
     */
    public function closeForm()
    {
        return '</div>';
    }

    public function createFormGroup($inputControl, $titleControl, $name='', $require= false, $type='')
    {
        $text_danger    = $require ? label_danger()  : '';
        $previewImage   = $type == 'file' ? '<span class="icon-eye labelPreviewImage hide"></span>' : '';
        $hasError       = $require ? has_error($this->errors, $name)  : '';

        $formGroup = '<div class="form-group '. $hasError .'">';
            $formGroup .= '<label class="control-label '.($this->formType == 1 ? 'col-xs-2' : '').'">' . $titleControl . ' '.$text_danger.' '.$previewImage.'</label>';
            // Truong hop cho form hien thi kieu inline
            $formGroup .= ($this->formType == 1) ? '<div class="col-xs-10">' : '';

                $formGroup .= $inputControl;
                $formGroup .= get_error($this->errors, $name);

            // Truong hop cho form hien thi kieu inline
            $formGroup .= ($this->formType == 1) ? '</div>' : '';
        $formGroup .= '</div>';
        return $formGroup;
    }

    /**
     * Created by : BillJanny
     * Date: 09:00 - 11/02/17
     * Create textNote
     * @param
     * @return
     */
    public function textNote($title="")
    {
        return text_note($title);
    }

    /**
     * Created by : BillJanny
     * Date: 1:51 AM - 2/12/2017
     * Chuyen doi mot mang attribute html
     * @param array $addAttr : mang thuoc tinh html
     * @return string
     */
    public function converArrayAttribute($addAttr= array())
    {
        if (!$addAttr) return '';
        $html = '';
        $classHtml = '';
        foreach ($addAttr as $key => $value)
        {
            if (strtolower($key) == 'class')
            {
                $classHtml .= ' ' . $value;
            }else
            {
                $html  .=' '.$key .'='. $value;
            }
        }

        $this->classHtml = $classHtml;

        return $html;
    }

    /**
     * Created by : BillJanny
     * Date: 08:56 - 11/02/17
     * Tao dau vao input type=text
     * @param
     * @return
     */
    public function groupText($title, $name, $id='',$require= false, $groupAppend = array(),$addAttr= array(),$width='', $height='',
                              $maxLength="")
    {
        $value      = get_value_field($name, $this->formDb);
        $addAttr    = $this->converArrayAttribute($addAttr);
        $expandAttr = $this->createStyle($id, $width, $height);
        if ($groupAppend)
        {
            list($beforeInput, $afterInput) = $groupAppend;
        }

        $formGroup  = '';
        // cho before input
        if (isset($beforeInput) && $beforeInput)
            $formGroup .= '<div class="input-group">';

        $formGroup .= '<input type="text" name='.$name.' '.$expandAttr.' maxLength="'.$maxLength.'" '.$addAttr.' value="'.$value.'">';

        // cho before input
        if (isset($afterInput) && $afterInput)
            $formGroup .= '<span class="input-group-addon makeSlug" title="Make link"><i class="fa fa-reply-all"></i></span></div>';

        $this->classHtml = '';
        return $this->createFormGroup($formGroup, $title, $name, $require);
    }

    /**
     * Created by : BillJanny
     * Date: 09:00 - 11/02/17
     * Tao dau vao input type=select
     * @param
     * @return
     */
    public function groupSelect($title, $name, $id='', $require = false, $valueDefault=array(), $listField= array(),$showOptionEmpty = false, $width='', $height='', $separator='')
    {
        $value      = get_value_field($name, $this->formDb);
        $expandAttr = $this->createStyle($id, $width, $height);

        $formGroup  ='';
                $formGroup .= '<select name='.$name.' '.$expandAttr.'>';
                    if ($showOptionEmpty)
                    {
                        $formGroup .= '<option value="">-- [ Select one ] --</option>';
                    }

                    if ($valueDefault)
                    {
                        foreach ($valueDefault as $k => $v)
                        {
                            if (is_array($v))
                            {
                                list($fieldId, $fieldName) = $listField;
                                if (isset($v['level'])) for($i=0; $i < $v["level"];$i++) $separator .="---";
                                $selected   = ($value == $v[$fieldId]) ? 'selected=selected' : '';

                                $formGroup .= '<option '. $selected .' value="'.$v[$fieldId].'">' . $separator . ' ' . $v[$fieldName] . '</option>';
                                $separator  = '';
                            }
                            else
                            {
                                $selected   = ($value == $k) ? 'selected=selected' : '';
                                $formGroup .= '<option '. $selected .' value="'.$k.'">'. $v .'</option>';
                            }
                        }
                    }

                $formGroup .= '</select>';
        $formGroup .= '';
        return $this->createFormGroup($formGroup, $title, $name, $require);
    }

    /**
     * Created by : BillJanny
     * Date: 09:00 - 11/02/17
     * Tao dau vao input type=file
     * @param
     * @return
     */
    public function groupFile($title, $name, $id='', $require = false, $width='', $height='')
    {
        $value      = get_value_field($name, $this->formDb);
        $expandAttr = $this->createStyle($id, $width, $height);

        $formGroup  = '<div class="input-group image-group">';
            $formGroup .= '<input type="text" name="'. $name .'" '.$expandAttr.' value="'.$value.'">'.box_upload();
        $formGroup .= '</div>';

        return $this->createFormGroup($formGroup, $title, $name, $require);
    }

    /**
     * Created by : BillJanny
     * Date: 09:02 - 11/02/17
     * Tao dau vao input textarea
     * @param string $title : tieu de cua tag textarea
     * @param string $name : ten cot trong csdl cua bang
     * @param string $id : selector id
     * @param boolean $require : co bat buoc nhap khong (Vd: true|false)
     * @param int $width : bao nhieu px (Vd: 200)
     * @param int $height : bao nhieu px (Vd: 200)
     * @return string
     */
    public function groupTextArea($title, $name, $id='', $require= false, $width='', $height='')
    {
        $value      = get_value_field($name, $this->formDb);
        $expandAttr = $this->createStyle($id, $width, $height);

        $formGroup  = '<textarea name="'.$name.'" '. $expandAttr .' cols="30" rows="5">' . $value . '</textarea>';
        return $this->createFormGroup($formGroup, $title, $name, $require);
    }

    /**
     * Created by : BillJanny
     * Date: 09:02 - 11/02/17
     * Tao dau vao input radio
     * @param
     * @return
     */
    public function groupRadio()
    {

    }

    /**
     * Created by : BillJanny
     * Date: 09:02 - 11/02/17
     * Tao dau vao input check
     * @param
     * @return
     */
    public function groupCheck()
    {

    }

    /**
     * Created by : BillJanny
     * Date: 09:02 - 11/02/17
     * Tao dau vao input hidden
     * @param
     * @return
     */
    public function inputHidden($name, $id, $value, $addHtml ="")
    {
        $control = '<input type="hidden" id="' . $id . '" name="' . $name . '" value="' . replace_mq($value) . '" ' . $addHtml . '/>';
        return $control;
    }

    /**
     * Created by : BillJanny
     * Date: 09:03 - 11/02/17
     * Tao dau vao input submit
     * @param
     * @return
     */
    public function inputSubmit()
    {

    }

    /**
     * Created by : BillJanny
     * Date: 09:03 - 11/02/17
     * Tao dau vao input reset
     * @param
     * @return
     */
    public function inputReset()
    {

    }

    /**
     * Created by : BillJanny
     * Date: 09:03 - 11/02/17
     * Tao dau vao input redirect
     * @param
     * @return
     */
    public function inputRedirect()
    {

    }
}