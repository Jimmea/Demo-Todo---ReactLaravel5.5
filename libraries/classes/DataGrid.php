<?php

/**
 * Ham tao danh sach cho trang listing
 *
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


    public function __construct($field_id, $field_name, $title)
    {
        $this->field_id 	= $field_id;
        $this->field_name	= $field_name;
        $this->title 		= $title;
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


    /**
    * Add các trường vào trong table hiển thị
	* @param strin $field_name  : Tên trường trong bảng csdl
	* @param string $lable      : Tiêu đề hiển thị trên header
	* @param string $type       : Kiểu dữ liệu hiển thị
	* @param int $sort          : Có sắp xếp hay không. 1: có | 0  : không
    * @param int $search        : Có tìm kiếm hay không, 1: có | 0 : không
    * @param void
	*/
    public function add($field_name, $lable, $type = "string", $sort=0, $search=0, $attributes = "")
    {
        if($sort == 1) $this->arraySort[$this->stt]     = $field_name;
        if($search == 1) $this->arraySearch[$this->stt] = $field_name;

        $this->arrayField[$this->stt]       = $field_name;
        $this->arrayLabel[$this->stt]       = $lable;
        $this->arrayType[$this->stt]        = $type;
        $this->arrayAttribute[$this->stt]   = $attributes;
        $this->stt++;
        if($type=="array")
        {
            global $$field_name;
            $arrayList = $$field_name;
            $strdata   = array();
            foreach($arrayList as $key=>$value)
            {
                $strdata[] = $key . ':' . "'" . str_replace("'","\'",$value) . "'";
            }

            $strdata = implode(",",$strdata);
        }
    }

    /**
    * Xử lý các kiểu hiển thị trong listing
    * @param row  : truyền array row gọi từ mysql_fetch_assoc ra
    * @param key  : thứ tự trường add vào
    */
    public function checkType($row,$key)
    {
        $level = "";
        if(isset($this->arrayFieldLevel[$this->arrayField[$key]]))
        {
            for($i=0;$i<$row["level"];$i++)
            {
                $level .= $this->arrayFieldLevel[$this->arrayField[$key]];
            }
        }
        switch($this->arrayType[$key])
        {

            //kiểu tiền tệ VNĐ
            case "vnd":
                return '<td ' . $this->arrayAttribute[$key] . ' style="text-align: right;"><span class="clickedit vnd" style="display:inline; color: #E43632;" id="' . $this->arrayField[$key] . ',' . $row[$this->field_id] . ',3">' .  formatCurrency($row[$this->arrayField[$key]]) . '</span></td>';
                break;

            //kiểu tiền tệ USD
            case "usd":
                return '<td ' . $this->arrayAttribute[$key] . ' style="text-align: right;"><span class="clickedit vnd" style="display:inline; color: #E43632;" id="' . $this->arrayField[$key] . ',' . $row[$this->field_id] . ',3">' .  $row[$this->arrayField[$key]] . '</span></td>';
                break;

            //kiểu ngày tháng
            case "date":
                return '<td class="input_text date" style="text-align: center;" ' . $this->arrayAttribute[$key] . '>' .  date("d/m/Y",$row[$this->arrayField[$key]]) . '</td>';
                break;

            //kiểu ngày tháng
            case "date_all":
                return '<td class="input_text date" align="center" ' . $this->arrayAttribute[$key] . '>' .  date("d/m/Y - H:i:s",$row[$this->arrayField[$key]]) . '</td>';
                break;

            //kiểu ngày tháng
            case "ip":
                return '<td class="date" style="text-align: center;" ' . $this->arrayAttribute[$key] . '>' .  long2ip($row[$this->arrayField[$key]]) . '</td>';
                break;

            //kiểu hình ảnh
            case "picture":
                if($row[$this->arrayField[$key]]!='')
                {
                    global $fs_filepath;
                    return '<td width="90" align="center" style="padding:1px;" ><a target="_blank" title="<img src=\'' . $fs_filepath . $row[$this->arrayField[$key]] . '\' border=\'0\'>" href="#"><img src="' . $fs_filepath . $row[$this->arrayField[$key]] . '" style="max-width: 80px;" border="0"></a></td>';
                }
                else
                {
                    return '<td width="30">&nbsp;</td>';
                }
                break;

            //kiểu mãng dùng cho combobox có thể edit
            case "array":
                $field = $this->arrayField[$key];
                global $$field;
                $arrayList = $$field;
                $value = isset($arrayList[$row[$this->arrayField[$key]]]) ? $arrayList[$row[$this->arrayField[$key]]] : '';
                return '<td ' . $this->arrayAttribute[$key] . '  title="' . translate_text("Click sửa đổi sau đó chọn save") . '"><span class="editable_select_' . $this->arrayField[$key] . '" style="display:inline" id="select_2" name="' . $this->arrayField[$key] . ',' . $row[$this->field_id] . ',0">' . str_replace("-","",$value)  . '</span></td>';
                break;

            //kiểu mãng chỉ hiển thị không edit được
            case "arraytext":
                $field = $this->arrayField[$key];
                global $$field;
                $arrayList = $$field;
                $value = isset($arrayList[$row[$this->arrayField[$key]]]) ? $arrayList[$row[$this->arrayField[$key]]] : '';
                return '<td ' . $this->arrayAttribute[$key] . '>' . str_replace("-","",$value)  . '</td>';
                break;

            //kiểu copy bản ghi
            case "copy":
                return '<td width="10" style="text-align: center;"><a title="' . translate_text("Nhân bản thêm một bản ghi mới") . '" href="copy.php?record_id=' .  $row[$this->field_id] . '&url=' . base64_encode($_SERVER['REQUEST_URI']) . '"><img src="' . $this->image_path . 'copy.gif" border="0"></a></td>';
                break;

            //kiểu check box giá trị là 0 hoặc 1
            case "checkbox":
                return '<td width="10"  style="text-align: center;"><a onclick="update_check(this); return false" href="listing.php?field=' . $this->arrayField[$key] . '&checkbox=1&record_id=' .  $row[$this->field_id] . '&url=' . base64_encode($_SERVER['REQUEST_URI']) . '"><img src="' . $this->image_path . 'check_' . $row[$this->arrayField[$key]] . '.gif" border="0"></a></td>';
                break;

            //kiểu hiển thị nút edit
            case "edit":
                return '<td width="10" style="text-align: center;"><a title="' . translate_text("Bạn muốn sửa đổi bản ghi") . '" href="edit.php?record_id=' .  $row[$this->field_id] . '&url=' . base64_encode($_SERVER['REQUEST_URI']) . '"><img src="' . $this->image_path . 'edit.png" border="0"></a></td>';
                break;

            //kểu hiện thị nút xóa
            case "delete":
                if($this->delete){
                    return '<td width="10" style="text-align: center;"><a class="delete" href="#" onclick="if (confirm(\''  . str_replace("'","\'",translate_text("Bạn muốn xóa bản ghi?") . ': ' . $row[$this->field_name])  . '\')){ deleteone(' . $row[$this->field_id] . '); }"><img src="' . $this->image_path . 'delete.gif" border="0"></a></td>';
                }else{
                    return '';
                }
                break;
            //Kiểu view source widget
            case "wgt_source":
                return '<td width="80" align="center"><a  href="../widget/show_source.php?record_id=' .  $row[$this->field_id] . '&url=' . base64_encode($_SERVER['REQUEST_URI']) . '&height=300&width=600"  rel="tooltip" title="' . translate_text("Click xem mã nhúng") . '" class="thickbox"><img src="' . $this->image_path . 'view.gif" border="0"></a></td>';
                break;
            //kểu hiện thị nút xem toàn bộ phá giá của doanh nghiệp
            case "view_phagia":
                return '<td width="80" class="align_c"><a class="btn-mini btn-info" title="' . translate_text("Xem toàn bộ phá giá") . '" href="../phagia/listing.php?iBus=' .  $row[$this->field_id] . '&url=' . base64_encode($_SERVER['REQUEST_URI']) . '">Xem</a></td>';
                break;

            //kiểu hiển thị text có sửa đổi
            case "string":
                return '<td ' . $this->arrayAttribute[$key] . ' title="' . translate_text("Click vào để sửa đổi sau đó enter để lưu lại") . '">' . $level . '<span class="clickedit" style="display:inline" id="' . $this->arrayField[$key] . ',' . $row[$this->field_id] . ',0">' .  $row[$this->arrayField[$key]] . '</span></td>';
                break;

            //kiểu hiện thị text không sửa đổi
            case "text":
                return '<td ' . $this->arrayAttribute[$key] . '>'  .  $row[$this->arrayField[$key]] . '</td>';
                break;

            //kiểu hiển thị số có sửa đổi
            case "number":
                return '<td style="text-align:center; font-weight:bold;" ' . $this->arrayAttribute[$key] . ' title="' . translate_text("Click vào để sửa đổi sau đó enter để lưu lại") . '" width="10%" nowrap="nowrap">' . $level . '<span class="clickedit" id="' . $this->arrayField[$key] . ',' . $row[$this->field_id] . ',0">' . number_format($row[$this->arrayField[$key]], 0, ",", ".") . '</span></td>';
                break;

            //kiểu hiển thị số ko sửa đổi
            case "numbernotedit":
                return '<td class="align_c" ' . $this->arrayAttribute[$key] . ' nowrap="nowrap">' . number_format($row[$this->arrayField[$key]], 0, ",", ".") . '</td>';
                break;

            //kiểu hiện nút reset
            case "resetpass":
                return '<td width="10"  align="center"><a class="thickbox noborder" href="resetpass.php?record_id=' .  $row[$this->field_id] . '&TB_iframe=true&amp;height=170&amp;width=380" )){ resetpass(' . $row[$this->field_id] . '); }"><img src="' . $this->image_path . 'reset.gif" border="0"></a></td>';
                break;

            //kểu hiện thị nút gui email
            case "sent_email":
                return '<td width="80" align="center"><a  href="../phagia/select_mail.php?record_id=' .  $row[$this->field_id] . '&url=' . base64_encode($_SERVER['REQUEST_URI']) . '&height=450&width=900"  rel="tooltip" title="' . translate_text("Gửi email thông báo tới thành viên") . '" class="thickbox"><img src="' . $this->image_path . 'send.gif" border="0"></a></td>';
                break;

            case "resetcache":
                return '<td width="10" class="align_c"><input type="button" class="btn btn-mini" onclick="resetcache('. $row[$this->field_id] .');" value="Reset"></td>';
                break;

            //dạng mặc định
            default:
                return '<td ' . $this->arrayAttribute[$key] . '>' .  $row[$this->arrayField[$key]] . '</td>';
                break;
        }
    }

    /**
	* Format kiểu số
	*/
    public function formatNumber($number)
    {
        $number = number_format(round($number/1000)*1000,0,"",".");
        return $number;
    }

    /**
	* Hàm tạo ra nút sắp xếp
	* field : tên trường
	*/
    public function urlsort($field)
    {
        $str 	= '';

        if(in_array($field,$this->arraySort))
        {

            $url 		= getURL(0,1,1,1,"sort|sortname");
            $sort 		= get_value("sort","str","GET","");
            $sortname 	= get_value("sortname","str","GET","");
            $img			= 'sort.gif';
            if($sortname!=$field) $sort = "";
            switch($sort){
                case "asc":
                    $url 	= $url . "&sort=desc";
                    $img	= 'sort-asc.gif';
                    break;
                case "desc":
                    $url 	= $url . "&sort=asc";
                    $img	= 'sort-desc.gif';
                    break;
                default:
                    $url 	= $url . "&sort=asc";
                    $img	= 'sort.gif';
                    break;
            }

            $url 	= $url . "&sortname=" . $field;

            $str = '&nbsp;<span><a href="' . $url . '" title="' . translate_text("Sort A->Z or Z->A") . '" onclick="loadpage(this); return false" ><img src="' . $this->image_path . $img . '" align="absmiddle" border="0"></a></span>';

        }

        return $str;
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