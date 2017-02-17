<?php

/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/5/2017
 * Time: 12:49 PM
 */
class DataGrid
{
    public $stt = 0;
    public $items;
    public $arrayField = array();
    public $arrayLabel = array();
    public $arrayType = array();
    public $arrayAttribute = array();
    public $field_id = '';
    public $field_name = '';
    public $image_path = '../../resource/images/grid/';
    public $fs_border = "#C3DAF9";
    public $html = '';
    public $scriptText = '';
    public $title = '';
    public $arraySort = array();
    public $arraySearch = array();
    public $arrayAddSearch = array();
    public $addHTML = array();
    public $quickEdit = false;
    public $total_list = 0;
    public $total_record = 0;
    public $page_size = 20;
    public $edit_ajax = false;
    public $showstt = true;
    public $showid = true;
    public $arrayFieldLevel = array();
    public $delete = true;
    public $fs_filepath = "";

    public $sort = "asc";
    public $sortname = "";
    public $url_full = "";
    public $url_short = "";
    public $url_list = "/list?";
    public $url_active = "/active?";
    public $url_edit = "/edit?";
    public $url_delete = "/delete?";
    public $url_quick_edit = "";


    public function __construct()
    {

    }

    public function setImagePath()
    {
        $this->image_path = STATIC_MEDIA;
    }

    public function setLimit($limit = 0)
    {
        if ($limit > 0) {
            $this->page_size;
        }
    }

    public function add()
    {

    }

    public function ajaxEdit()
    {

    }

    public function getTemplateHeader()
    {

    }

    public function getTemplateBody()
    {

    }

    /**
     * Created by : BillJanny
     * Date: 6:17 PM - 2/5/2017
     * Chuyen 1 mang thanh 1 chuoi
     * @param array $html : mang thong tin chua cac thuoc tinh html
     * @return
     */
    public function getAttribute($attrArr = array())
    {
        $attrStr = null;
        $attrClass = '';

        if ($attrArr)
        {
            foreach ($attrArr as $key => $value)
            {
                if (strtolower($key) == 'class')
                {
                    $attrClass .= $value . ' ';
                }
                else
                {
                    $attrStr .= $key . '=' . $value . ' ';
                }
            }
        }

        return [
            'attr'  => $attrStr,
            'class' => $attrClass
        ];
    }

    public function makeCheckAllRadio()
    {
        return '<input type="checkbox" class="check-all" id="check_all_table" data-set="#dataTableList .check-one" name="check_all">';
    }

    public function makeCheckRadio($id)
    {
        return '<input type="checkbox" class="check-one" name="check-one" value="' . $id . '">';
    }

    public function makeCheckButton($value, $fieldAtive='', $action='updateStatus')
    {
        $fieldAtive = $fieldAtive ? $fieldAtive : '';

        return '<a href="javascript:void(0)">
                <span
                    data-action="'.$action.'"
                    data-id="'.$value->adm_id.'"
                    data-check="'.($value->$fieldAtive ? 'checked' : '').'"                  
                    class="execute_form fa fa-2x '.($value->$fieldAtive ? 'fa-check-circle' : 'fa-circle').'"></span>
                </a>';
    }

    public function makeCopyButton($arrayRoute, $attrArr= [])
    {
        $attribute          = null;
        $attributeClass     = '';
        list($routerName, $id)  = $arrayRoute;
        if ($attrArr)
        {
            $attribute      = $this->getAttribute($attrArr)['attr'];
            $attributeClass = $this->getAttribute($attrArr)['class'];
        }
        return '<a href="'.route($routerName, $id).'"               
                   '.$attribute.'
                   class="fa fa-files-o button_copy btn btn-sm btn-info '.$attributeClass.'"></a>';
    }

//    $value->$this->field_status ?  \'fa-check-circle\' : \'fa-circle\'
    /**
     * Created by : BillJanny
     * Date: 6:16 PM - 2/5/2017
     * Tao button edit
     * @param array $array : mang thong tin chua ten route, id
     * @param array $html : mang chua cac thuoc tinh html
     * @return
     */
    public function makeEditButton($arrayRoute, $attrArr= [])
    {
        $attribute          = null;
        $attributeClass     = '';
        list($router, $id)  = $arrayRoute;
        if ($attrArr)
        {
            $attribute      = $this->getAttribute($attrArr)['attr'];
            $attributeClass = $this->getAttribute($attrArr)['class'];
        }
        return '<a href="'.route($router, $id).'" 
                    '.$attribute.' 
                    class="icon-pencil button_edit btn btn-sm btn-info '.$attributeClass.'"></a>';
    }

    /**
     * Created by : BillJanny
     * Date: 6:16 PM - 2/5/2017
     * Tao button delete
     * @param array $array : mang thong tin chua ten route, id
     * @param array $html : mang chua cac thuoc tinh html
     * @return
     */
    public function makeDeleteButton($arrayRoute, $attrArr=[])
    {
        $attribute          = null;
        $attributeClass     = '';
        list($router, $id)  = $arrayRoute;
        if ($attrArr)
        {
            $attribute      = $this->getAttribute($attrArr)['attr'];
            $attributeClass = $this->getAttribute($attrArr)['class'];
        }

        return '<a href="'.route($router, $id).'" 
                '.$attribute.' 
                onclick="return confirm(`'.trans('admin::message.message_confirm_delete').'`)" 
                data-id="'.$id.'" 
                class="icon-trash button_delete_one btn btn-sm btn-warning '.$attributeClass.'"></a>';
    }

    /**
     * Created by : BillJanny
     * Date: 6:36 PM - 2/5/2017
     * Tao mot doan html footer
     * @param
     * @return
     */
    public function getTemplateFooter($data)
    {
        $this->items = $data;
        $html = '<tfoot>
                    <tr>
                        <td colspan="10">
                            <div class="showing pull-left">
                                <button class="btn btn-sm btn-danger execute_form" data-action="deleteAll">
                                    <i class="icon-trash"></i> Delete all
                                </button>
                                Showing '.$data->firstItem().' to '.$data->lastItem().' of
                                '.$data->total().' | Total record : '.$data->total().' record
                            </div>
                            <div class="paginate pull-right">
                                '.$data->appends(get_query_array())->links().'
                            </div>
                        </td>
                    </tr>
                </tfoot>';

        return $html;
    }

    public function render($dataTable)
    {

    }
}