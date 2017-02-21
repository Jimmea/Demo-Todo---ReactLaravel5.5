<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 11/02/17
 * Time: 08:50
 */
class Form
{
    // @var show error validate with 2  type : top | under input
    public $formTypeError   = 0;

    public $form;

    // var $type show form : inline - horizontal
    public $formType        = 1;

    // @var class form begin with bootstrap
    public $classFormBegin  = 'form-horizontal';

    // @var class input with bootstrap
    public $formControl     = 'form-control';

    // @var save temporary databse
    public $formDb;

    // @var errors validate form
    public $errors;

    // @var class of div input form group
    private $classDivInput;

    // @var class of input in form group
    private $classInput;

    // @var class of label form group
    private $classLabel;

    public function __construct($errors='', $formDb='')
    {
        $this->errors  = $errors;
        $this->formDb  = $formDb;
    }


    /**
     * Created by : BillJanny
     * Date: 09:00 - 11/02/17
     * Bat dau tao form
     * @param
     * @return
     */
    public function beginForm(array $route = array(),$method ='POST',$enctype=' multipart/form-data')
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

        return (new \Illuminate\Support\HtmlString($form));
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
    public function createStyle($id, $width='', $height='')
    {
        $style = 'id='.$id.' class="input-sm ' . $this->formControl . $this->classInput. '" style="width:'.$width.'px; height:'.$height.'px"';
        $this->classInput = '';
        return $style;
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
        return (new \Illuminate\Support\HtmlString(button_submit_reset()));
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
        return (new \Illuminate\Support\HtmlString('</div>'));
    }

    public function createFormGroup($inputControl, $titleControl, $name='', $require= false, $type='')
    {
        $text_danger    = $require ? label_danger()  : '';
        $previewImage   = $type == 'file' ? '<span class="icon-eye labelPreviewImage hide"></span>' : '';
        $hasError       = $require ? has_error($this->errors, $name)  : '';
        $classLabel     = $this->classLabel     ? $this->classLabel     : 'col-md-2';
        $classDivInput  = $this->classDivInput  ? $this->classDivInput  : 'col-md-10';

        $formGroup = '<div class="form-group '. $hasError .'">';

            $formGroup .= '<label class="control-label '.($this->formType == 1 ? $classLabel : '').'">'
                        . $titleControl . ' ' . $text_danger . ' ' . $previewImage .
                        '</label>';

            // Truong hop cho form hien thi kieu inline
            $formGroup .= ($this->formType == 1) ? '<div class="' . $classDivInput . '">' : '';

            $formGroup .= $inputControl;
            $formGroup .= get_error($this->errors, $name);

            // Truong hop cho form hien thi kieu inline
            $formGroup .= ($this->formType == 1) ? '</div>' : '';
        $formGroup .= '</div>';

        $this->classDivInput = '';
        $this->classLabel    = '';

        return (new \Illuminate\Support\HtmlString($formGroup));
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
     * @param array $arrayAttribute :chứa các giá trị của thuộc tính html
     * @return string
     */
    public function converArrayAttribute($arrayAttribute= array())
    {
        if (!$arrayAttribute) return '';
        $attributeHtml       = '';
        $inputDivClass       = '';
        $labelClass          = '';
        $inputClass          = '';

        foreach ($arrayAttribute as $key => $value)
        {
            switch (strtolower($key))
            {
                case 'div':
                    $inputDivClass .= ' ' . $value;
                    break;

                case 'input':
                    $inputClass .= ' ' . $value;
                    break;

                case 'label':
                    $labelClass .= ' ' . $value;
                    break;

                default:
                    $attributeHtml  .=' '. $value;
                    break;
            }
        }

        $this->classDivInput = $inputDivClass;
        $this->classLabel    = $labelClass;
        $this->classInput    = $inputClass;

        return $attributeHtml;
    }

    /**
     * Hàm tạo group text addon bootstrap
     * @param  string $labelControl : Tieu de label
     * @param  string $nameInput : ten field trong csdl cua input
     * @param  string $inputId : selector id
     * @param  boolean $require : false không bắt buộc nhập | true bắt buôc nhập
     * @param  array $attributeHtml : giá trị thuộc tính html (Support : classdivinput, classinput, classlabel ...)
     * @param  array $classInputAddon : tên class của input group addon với tag span và i
     * @param  string $maxLength : Độ dài nhập tối đa của input
     * @return string html
     */
    public function groupTextAddon($labelControl, $nameInput, $inputId ='', $require = false, $attributeHtml = array(),
                                   $classInputAddon = array(), $maxLength='')
    {
        $value          = get_value_field($nameInput, $this->formDb);
        $attribute      = $this->converArrayAttribute($attributeHtml);
        $styleInput     = $this->createStyle($inputId);
        $classSpan      =  array_get($classInputAddon, 'span');
        $classIcon      =  array_get($classInputAddon, 'i');

        $formGroup  = '<div class="input-group">';
            $formGroup .= '<input type="text" name='.$nameInput.' '.$styleInput.' maxLength="'.$maxLength.'" '.$attribute.' value="'.$value.'">';
            $formGroup .= '<span class="input-group-addon ' . $classSpan . ' " title="You can lick here"><i class="fa ' . $classIcon . ' "></i></span>';
        $formGroup  .= '</div>';

        return $this->createFormGroup($formGroup, $labelControl, $nameInput, $require);
    }

    /**
     * Method create group text
     * @param  string $labelControl : Tieu de label
     * @param  string $nameInput : ten field trong csdl cua input
     * @param  string $inputId : selector id
     * @param  boolean $require : false không bắt buộc nhập | true bắt buôc nhập
     * @param  array $attributeHtml : giá trị thuộc tính html (Support : classdivinput, classinput, classlabel ...)
     * @param  string $maxLength : Độ dài nhập tối đa của input
     * @param string html
     */
    public function groupText($labelControl, $nameInput, $inputId ='', $require = false, $attributeHtml = array(), $maxLength='')
    {
        $value          = get_value_field($nameInput, $this->formDb);
        $attribute      = $this->converArrayAttribute($attributeHtml);
        $styleInput     = $this->createStyle($inputId);

        $formGroup  = '<div>';
            $formGroup .= '<input type="text" name='.$nameInput.' '.$styleInput.' maxLength="'.$maxLength.'" '.$attribute.' value="'.$value.'">';
        $formGroup .= '</div>';

        return $this->createFormGroup($formGroup, $labelControl, $nameInput, $require);
    }


    /**
     * Method create group select
     * @param  string $labelControl : Tieu de label
     * @param  string $nameInput : ten field trong csdl cua input
     * @param  string $inputId : selector id
     * @param  boolean $require : false không bắt buộc nhập | true bắt buôc nhập
     * @param  array $valueDefault :Mảng option mặc định được truyền vào
     * @param  array $activeDefault : Mảng active thông thường bao gồm id, name
     * @param  boolean $showOptionEmpty : show placeholder true | false
     * @param  string $separator : kí tự ---
     * @param string html
     */
    public function groupSelect($labelControl, $nameselect, $inputId ='', $require = false,  $valueDefault=array(),
                                $activeDefault= array(), $showOptionEmpty = false, $separator='')
    {
        $value      = get_value_field($nameselect, $this->formDb);
        $styleInput = $this->createStyle($inputId);
        $fieldId    = $activeDefault ? $activeDefault[0] : '';
        $fieldName  = $activeDefault ? $activeDefault[1] : '';

        $formGroup = '<select name='.$nameselect.' '.$styleInput.'>';
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
        return $this->createFormGroup($formGroup, $labelControl, $nameselect, $require);
    }

    /**
     * Show form group file
     * @param string $title : mang tieu de cho form groupp file
     * @param  string $nameInput : ten field trong csdl cua input
     * @param  string $inputId : selector id
     * @param boolean $require : mang tieu de cho form groupp file
     * @param array $attributeHtml : giá trị thuộc tính html (Support : classdivinput, classinput, classlabel ...)
     * @return
     */
    public function groupFile($title, $nameInput, $inputId='', $require = false, $attributeHtml = array())
    {
        $value          = get_value_field($nameInput, $this->formDb);
        $attributeHtml  = $this->converArrayAttribute($attributeHtml);
        $styleInput     = $this->createStyle($inputId);

        $formGroup  = '<div class="input-group image-group">';
            $formGroup .= '<input type="text" name="'. $nameInput .'" '.$styleInput.' ' . $attributeHtml . ' value="'.$value.'">';
            $formGroup .= box_upload();
        $formGroup .= '</div>';

        return $this->createFormGroup($formGroup, $title, $nameInput, $require);
    }


    /**
     * Show form group file
     * @param string $title : mang tieu de cho form groupp file
     * @param string $nameInput : ten field trong csdl cua input
     * @param string $inputId : selector id
     * @param boolean $require : mang tieu de cho form groupp file
     * @param array $attributeHtml : giá trị thuộc tính html (Support : classdivinput, classinput, classlabel ...)
     * @return
     */
    public function groupTextArea($title, $nameInput, $inputId='', $require= false, $attributeHtml = array())
    {
        $value          = get_value_field($nameInput, $this->formDb);
        $attributeHtml  = $this->converArrayAttribute($attributeHtml);
        $styleInput     = $this->createStyle($inputId);

        $formGroup  = '<textarea name="'.$nameInput.'" '. $attributeHtml .' '. $styleInput .' cols="30" rows="5">' . $value . '</textarea>';

        return $this->createFormGroup($formGroup, $title, $nameInput, $require);
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
    public function inputHidden($name, $id, $value, $attributeHtml = array())
    {
        $attributeHtml  = $this->converArrayAttribute($attributeHtml);

        $control = '<input type="hidden" id="' . $id . '" name="' . $name . '" value="' . replace_mq($value) . '" ' . $attributeHtml . '/>';
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