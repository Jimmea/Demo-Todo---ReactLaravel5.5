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
        if ($limit > 0)
        {
            $this->page_size;
        }
    }

    public function setArrayFieldLevel($data)
    {
        $this->arrayFieldLevel = $data;
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
        $type = strtolower($this->arrayType[$key]);
        switch($type)
        {

            //kiểu tiền tệ VNĐ
            case "vnd":
                return '<td ' . $this->arrayAttribute[$key] . ' style="text-align: right;"><span class="clickedit vnd" style="display:inline; color: #E43632;" id="' . $this->arrayField[$key] . ',' . $row[$this->field_id] . ',3">' .  format_currency($row[$this->arrayField[$key]]) . '</span></td>';
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
                if($this->delete)
                {
                    return '<td width="10" style="text-align: center;"><a class="delete" href="#" onclick="if (confirm(\''  . str_replace("'","\'",translate_text("Bạn muốn xóa bản ghi?") . ': ' . $row[$this->field_name])  . '\')){ deleteone(' . $row[$this->field_id] . '); }"><img src="' . $this->image_path . 'delete.gif" border="0"></a></td>';
                }else
                {
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

            $url 		= get_url(0,1,1,1,"sort|sortname");
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

    /**
	* ham tao cau lanh sql sort
	* hàm sinh ra câu lênh query sort tương ứng
	*/
    public function sqlSort()
    {
        $sort 		= get_value("sort","str","GET","");
        $field	 	= get_value("sortname","str","GET","");
        $str 			= '';
        if(in_array($field,$this->arraySort) && ($sort == "asc" || $sort == "desc"))
        {
            $str 		= $field . ' ' . $sort . ',';
        }
        return $str;
    }

    /**
	* Hàm thêm các trường search
	* @param string name : tiêu đề
	* @param string field : tên trường
	* @param type : kiểu search
	* @param array|int value : giá trị nếu kiểu array thì truyền vào một array
	* @param string default: giá trị mặc định
	* @param $count_date = 0 mặc định, nếu ko thì tính theo số ngày
	*/
    public function addSearch($name, $field, $type, $value = '', $default="", $count_date = 0)
    {
        $str = '';
        switch($type)
        {
            //kiểu array
            case "array":
                $str .= '<select name="' . $field . '" id="' . $field . '" class="form-control">';
                foreach($value as $id=>$text)
                {
                    $str .= '<option value="' . $id . '" ' . (($default==$id) ? 'selected' : '') . '>' . $text . '</option>';
                }
                $str .= '</select>';
                break;

            //kiểu ngày tháng
            case "date":
                if($count_date != 0)
                {
                    $star_time = time() - 60*60*24*$count_date;
                    $star_time = convert_datetime(date('d/m/Y', $star_time), "00:00:00");
                    $star_time = date('d/m/Y', $star_time);

                    $value = get_value($field,"str","GET",$star_time);
                    $str .= '<input type="text"  class="input_text date" name="' . $field . '" id="' . $field . '" onKeyPress="displayDatePicker(\'' . $field . '\', this);" onClick="displayDatePicker(\'' . $field . '\', this);" onfocus="if(this.value==\'' . translate_text("Enter date") . '\') this.value=\'\'" onblur="if(this.value==\'\') this.value=\'' . translate_text("Enter date")  . '\'" value="' . $value . '">';

                }else
                {
                    $value = get_value($field,"str","GET","dd/mm/yyyy");
                    $str .= '<input type="text"  class="input_text date" name="' . $field . '" id="' . $field . '" onKeyPress="displayDatePicker(\'' . $field . '\', this);" onClick="displayDatePicker(\'' . $field . '\', this);" onfocus="if(this.value==\'' . translate_text("Enter date") . '\') this.value=\'\'" onblur="if(this.value==\'\') this.value=\'' . translate_text("Enter date")  . '\'" value="' . $value . '">';
                }
                break;

            //kiểu text box
            case "text":
                $value = get_value($field,"str","GET",translate_text($name));
                $str .= '<input type="text"  class="input_text" name="' . $field . '" id="' . $field . '"  onfocus="if(this.value==\'' . translate_text($name) . '\') this.value=\'\'" onblur="if(this.value==\'\') this.value=\'' . translate_text($name)  . '\'" value="' . $value . '">';
                break;
        }
        $this->arrayAddSearch[] = array($str,$field,$name);
    }

    public function addHTML($html)
    {
        $this->addHTML[]	= trim($html);
    }

    /*
	Ham hien thi ra listing
	db : ket qua tra ve cua cau lenh query gọi từ class db_query
	$type_search : Show button search o dau hay cuoi cua url seach 1 o cuoi, 0 o dau
	*/
    public function showTable($db, $multi = 0, $type_search = 0){

        //goi phan template
        $this->html .= template_top($this->title,$this->urlsearch($type_search), $this->html_ext());
        // khoi tao table
        $this->html .= '<div class="content"><table cellpadding="5" cellspacing="0" width="100%" class="table table-hover table-bordered">';

        //phan header

        $this->html .= '<tr class="warning">';

        $this->total_list 		= mysql_num_rows($db->result);

        //trường STT
        if($this->showstt) $this->html .= '<td class="h" width="40" style="text-align: center;">STT</td>';

        //phan checkbok all
        if($this->delete) $this->html .= '<td width="50" class="h check"><input type="checkbox" id="check_all" onclick="checkall(' . $this->total_list . ')"></td>';

        if($this->quickEdit)
        {
            //phan quick edit
            $this->html .= '<td class="h"><img src="' . $this->image_path . 'qedit.png" border="0"></td>';
        }

        foreach($this->arrayLabel as $key=>$lable)
        {
            $this->html .= '<td class="h">' . $lable . $this->urlsort($this->arrayField[$key]) . ' </td>';
        }

        $this->html .= '</tr>';


        $i=0;

        $page = get_value("page");
        if($page<1) $page = 1;

        while($row = mysql_fetch_assoc($db->result)){
            $i++;
            $this->html .= '<tr id="tr_' . $row[$this->field_id] . '">';

            //phan so thu tu
            if($this->showstt){
                $this->html .= '<td width=40 style="text-align:center"><span style="color:#142E62; font-weight:bold">' . ($i+(($page-1)*$this->page_size)) . '</span></td>';
            }

            //phan checkbok cho tung record
            if($this->delete)  $this->html .= '<td class="check" style="text-align: center;"><input type="checkbox" class="check" name="record_id[]" id="record_' . $i . '" value="' . $row[$this->field_id] . '"></td>';

            if($this->quickEdit){
                //phan quick edit
                $this->html .= '<td width=15 align="center"><a class="thickbox" rel="tooltip" title="' . translate_text("Do you want quick edit basic") . '" href="quickedit.php?record_id=' . $row[$this->field_id] . '&url=' . base64_encode($_SERVER['REQUEST_URI']) . '&KeepThis=true&TB_iframe=true&height=300&width=400"><img src="' . $this->image_path . 'qedit.png" border="0"></a></td>';
            }
            foreach($this->arrayField as $key=>$field){

                $this->html .= $this->checkType($row,$key);

            }

            $this->html .= '</tr>';
        }

        $this->html .= '</tr>';
        $this->html .= '</table>';
        $this->html	.= '</div>';

        // Phần footer
        $this->html	.= "<div class='footer'>" . $this->footer() . "</div>";
        //khet thuc phan template
        $this->html .= template_bottom();

        return $this->html;
    }

    /**
    * Ham xu ly hien thi theo dang multi
    * @return string
    */
    public function showTableMulti($database)
    {
        // Đếm tổng số bản ghi
        $this->total_list .= count($database);

        // Call phần đầu của trang listing
        $this->html .= $this->templateTop($this->title,$this->urlsearch());

        // Khởi tạo table
        $this->html .= '<div class="white-box-content"><table id="dataTableList" cellpadding="0" cellspacing="0"  width="100%" class="table table-hover table-bordered table-striped">';

        // Phần thead của table
        $this->html .= '<thead>';
//            bgcolor="#428BCA" style="color: #fff"
            $this->html .= '<tr class="header">';
                $this->html .= '<td width="50" align="center" class="bold">STT</td>';
                // Column check all table
                $this->html .= '<td width="3%" class="h check bold" align="center"><input type="checkbox" id="check_all" onclick="checkall(' . $this->total_list . ')"></td>';

                // Phần quick edit
                if($this->quickEdit)
                {
                    $this->html .= '<td class="h bold"><img src="' . $this->image_path . 'qedit.png" border="0"></td>';
                }
                // phần hiển thị tiêu đề
                foreach($this->arrayLabel as $key =>$lable)
                {
                    $this->html .= '<td '. $this->arrayAttribute[$key] .' class="h bold">' . $lable . $this->urlsort($this->arrayField[$key]) . ' </td>';
                }
            $this->html .= '</tr>';
        $this->html .= '<thead>';   // Kết thúc phần thead của table

        // Phần tbody của table
        $page       = get_value("page");
        if($page<1) $page = 1;
        $i=0;
        $this->html .= '<tbody id="tableContent">';
            if($database)
            {
                foreach($database as $key=>$row)
                {
                    $i++;
                    $this->html .= '<tr id="tr_' . $row[$this->field_id] . '" ' . (($i%2==0) ? 'bgcolor="#f7f7f7"' : '') . '>';

                    //phan so thu tu
                    $this->html .= '<td width=15 align="center"><span style="color:#142E62; font-weight:bold">' . ($i+(($page-1)*$this->page_size)) . '</span></td>';

                    //phan checkbok cho tung record
                    $this->html .= '<td class="check align_c"><input type="checkbox" class="check" name="record_id[]" id="record_' . $i . '" value="' . $row[$this->field_id] . '"></td>';

                    //phan quick edit
                    if($this->quickEdit)
                    {
                        $this->html .= '<td width=15 align="center"><a class="thickbox" title="' . translate_text("Do you want quick edit basic") . '" href="quickedit.php?record_id=' . $row[$this->field_id] . '&url=' . base64_encode($_SERVER['REQUEST_URI']) . '&KeepThis=true&TB_iframe=true&height=300&width=400"><img src="' . $this->image_path . 'qedit.png" border="0"></a></td>';
                    }


                    foreach($this->arrayField as $key => $field)
                    {
                        $this->html .= $this->checkType($row, $key);
                    }

                    $this->html .= '</tr>';
                }
            }

            $this->html .= '</tbody>'; // Kết thúc phần tbody của table
        $this->html .= '</table>';

        // Phần footer
        $this->html .= '<div class="footer">' . $this->footer() . '</div>';

        // Call phần cuối trang listing
        $this->html .= $this->templateBottom();

        return $this->html;
    }

    public function templateTop($title = '', $search='', $html='')
    {
        $str = '<div class="white-box padd-0">';
        /**********------------------- Begin Template V3 - Do not Modify -------------------**********/
        $str .= '<div class="white-box-header padd-10">';
            $str .= '<h3>' . $title . '</h3>';
            if($search!='') $str .= '<div class="search">' . $search . '</div>';
        $str .= '</div>';

        if($html!='')
        {
            $str .= $html;
        }

        return $str;
    }


    public function templateBottom()
    {
        $str = '';
        /*----------...................... End WEB CONTENT here .....................----------*/
                    $str .= '	</div>';
                $str .= '</div>';
            $str .= '</div>';
        $str .= '</div>';

        return $str;
    }

    /**
	* Hàm tạo form search
	* @param int $type_search : 1 :Button search ở đầu, Mặc định ở cuối
    * @param string
	*/
    public function urlsearch($type_search = 0)
    {
        $str = '';
        $str = '<form action="' . $_SERVER['SCRIPT_NAME'] . '" methor="get" name="form_search" onsubmit="check_form_submit(this); return false">';
        $str .= '<input type="hidden" name="search" id="search" value="1" />';
        $str .= '<table cellpadding="0" cellspacing="0" border="0"><tr>';

        // Show nút search ở đầu
        if($type_search == 1)
        {
            $str .= '<td>&nbsp;<input type="submit" class="btn btn-sm btn-info" value="' . translate_text("Tìm kiếm") . '"></td>';
        }

        foreach($this->arraySearch as $key=>$field)
        {
            switch($this->arrayType[$key])
            {

                case "string":
                case "text":
                    $value = get_value($field,"str","GET", $this->arrayLabel[$key]);
                    $str .= '<td class="text">' . $this->arrayLabel[$key] . '</td><td><input type="text" class="form-control" ' . $this->arrayAttribute[$key] . ' name="' . $field . '" id="' . $field . '" onfocus="if(this.value==\'' . $this->arrayLabel[$key] . '\') this.value=\'\'" onblur="if(this.value==\'\') this.value=\'' . $this->arrayLabel[$key] . '\'" value="' . $value . '"></td>';
                    break;

                case "numbernotedit":
                    $value = get_value($field,"str","GET",$this->arrayLabel[$key]);
                    $str .= '<td class="text">' . $this->arrayLabel[$key] . '</td><td><input type="text" class="form-control" ' . $this->arrayAttribute[$key] . ' name="' . $field . '" id="' . $field . '" onfocus="if(this.value==\'' . $this->arrayLabel[$key] . '\') this.value=\'\'" onblur="if(this.value==\'\') this.value=\'' . $this->arrayLabel[$key] . '\'" value="' . $value . '"></td>';
                    break;

                case "date":
                    $value = get_value($field,"str","GET","dd/mm/yyyy");
                    $str .= '<td class="text">' . $this->arrayLabel[$key] . '</td><td>&nbsp;<input type="text"  class="form-control date" ' . $this->arrayAttribute[$key] . ' name="' . $field . '" id="' . $field . '"  onKeyPress="displayDatePicker(\'' . $field . '\', this);" onClick="displayDatePicker(\'' . $field . '\', this);" onfocus="if(this.value==\'' . translate_text("Enter") . ' ' . $this->arrayLabel[$key] . '\') this.value=\'\'" onblur="if(this.value==\'\') this.value=\'' . translate_text("Enter") . ' ' . $this->arrayLabel[$key] . '\'" value="' . $value . '"></td>';
                    break;

                case "array":
                    $field = $this->arrayField[$key];
                    global $$field;
                    $arrayList = $$field;
                    $str 			.= '<td class="text">' . $this->arrayLabel[$key] . '</td><td><select class="form-control" name="' . $field . '" id="' . $field . '" ' . $this->arrayAttribute[$key] . '>';
                    $str 			.= '<option value="-1">' . $this->arrayLabel[$key] . '</option>';
                    $selected 		= get_value($field,"str","GET",-1);
                    foreach($arrayList as $key => $value)
                    {
                        $str 		.= '<option value="' . $key . '" ' . (($selected==$key) ? 'selected' : '') . '>' . $value . '</option>';
                    }
                    $str .= '</select></td>';
                    break;

            }
        }

        foreach($this->arrayAddSearch as $key=>$value)
        {
            if($value[2] != ""){
                $str .= "<td>&nbsp;<b>";
                $str .= $value[2];
                $str .= "</b>&nbsp;&nbsp;</td>";
            }

            $str .= "<td>";
            $str .= $value[0];
            $str .= "</td>";
        }

        // Show nút search ở cuối
        if($type_search != 1)
        {
            $str .= '<td>&nbsp;<input type="submit" class="btn btn-sm btn-info" value="' . translate_text("Tìm kiếm") . '"></td>';
        }

        $str .= '</tr></table>';
        $str .= '</form>';

        //phần check javascript cho form tìm kiếm
        $str .= '<script type="text/javascript">';
        $str .= 'function check_form_submit(obj){';
        foreach($this->arraySearch as $key=>$field)
        {
            switch($this->arrayType[$key])
            {
                case "string":
                    $str .= 'if(document.getElementById("' . $field . '").value == \'' . translate_text("Enter") . ' ' . $this->arrayLabel[$key] . '\'){document.getElementById("' . $field . '").value = \'\'}';
                    break;
            }
        }
        $str .= 'document.form_search.submit(); ';
        $str .= '};';
        $str .= '</script>';

        return $str;
    }

    public function html_ext()
    {
        $returnHTML	= "";
        foreach($this->addHTML as $html)
        {
            $returnHTML	.= $html;
        }

        return $returnHTML;
    }

    /**
	* Hàm tạo câu lệnh sql search
	*/
    public function sqlSearch()
    {
        $search		= get_value("search","int","GET",0);
        $str 			= '';
        if($search == 1)
        {
            foreach($this->arraySearch as $key=>$field)
            {

                $keyword		= get_value($field,"str","GET","");
                if($keyword == $this->arrayLabel[$key]) $keyword = "";
                $keyword		= str_replace(" ","%",$keyword);
                $keyword		= str_replace("\'","'",$keyword);
                $keyword		= str_replace("'","''",$keyword);

                switch($this->arrayType[$key])
                {
                    case "string":
                    case "text":
                        if(trim($keyword)!='') $str 		.= " AND " . $field . " LIKE '%" . $keyword . "%'";
                        break;

                    case "numbernotedit":
                        if(intval($keyword)> 0) $str 		.= " AND " . $field . " = " . $keyword;
                        break;

                    case "array":
                        if(intval($keyword)> -1) $str 		.= " AND " . $field . "=" . intval($keyword) . "";
                        break;
                }
            }
        }

        return $str;
    }

    /**
     * Hàm xử lys phần footer
     * @param void
     * @return string
     */
    public function footer()
    {

        $str = '<table cellpadding="5" cellspacing="0" width="100%" class="page_break"><tr>';

        if($this->delete)
        {

            $str .= '<td width="150">';
            $str .= '<a class="btn-sm btn-danger" href="#" onclick="if (confirm(\''  . str_replace("'","\'",translate_text("Do you want to delete the product you\'ve selected ?"))  . '\')){ deleteall(' . $this->total_list . '); }">' . translate_text("Delete all selected") . '</a>';
            $str .= '</td>';
            $str .= '<td width="150">';
            $str .= '' . translate_text("Total record") . ' : ';
            $str .= '<span id="total_footer">' . format_currency($this->total_record). '</span>';
            $str .= '</td>';
        }
        $str .= '<td>';
        $str .= $this->generate_page();
        $str .= '</td>';
        $str .= '</tr></table>';
        return $str;
    }

    // Hàm phân trang cho dnah sách table
    public function generate_page()
    {
        $str = '';
        if($this->total_record > $this->page_size)
        {
            $total_page 	= $this->total_record/$this->page_size;
            $page			   = get_value("page","int","GET",1);
            if($page<1) $page = 1;
            $str 				.= '<a href="' . get_url(0,1,1,1,"page") . '&page=1"><img src="' . $this->image_path . 'first.gif" border="0" align="absmiddle" /></a>';
            if($page>1) $str 	.= '<a href="' . get_url(0,1,1,1,"page") . '&page=' . ($page-1) .'" onclick="loadpage(this); return false;"><img src="' . $this->image_path . 'prev.gif" border="0" align="absmiddle" /></a>';

            $start = $page-5;
            if($start<1) $start = 1;

            $end = $page+5;
            if($page<5) $end = $end+(5-$page);

            if($end > $total_page) $end=intval($total_page);
            if($end < $total_page) $end++;

            for($i=$start;$i<=$end;$i++)
            {
                $str 			.= '<a href="' . get_url(0,1,1,1,"page") . '&page=' . $i . '">' . (($i==$page) ? '<span class="page_current">[' . $i . ']</span>' : '<span class="page">' . $i . '</span>') . '</a>';
            }

            if($page<$total_page) $str 	.= '<a href="' . get_url(0,1,1,1,"page") . '&page=' . ($page+1) .'"><img src="' . $this->image_path . 'next.gif" border="0" align="absmiddle" /></a>';
            $str 				.= '<a href="' . get_url(0,1,1,1,"page") . '&page=' . $total_page . '"><img src="' . $this->image_path . 'last.gif" border="0" align="absmiddle" /></a>';

        }
        return $str;
    }

    /**
     * Hàm tạo ra phân trang
     * @param int $total_record : tong so ban ghi
     * @return int
     */
    public function limit($total_record)
    {
        $this->total_record = $total_record;
        $page			   = get_value("page","int","GET",1);
        if($page<1) $page = 1;

        $str = "LIMIT " . ($page-1) * $this->page_size . "," . $this->page_size;
        return $str;
    }

    public function startStr($i, $record_id, $add_html = "", $bg = 0)
    {
        $page = get_value("page");
        $class_color	=	'';
        if($bg == 1)
        {
            $class_color	=	'bg_color';
        }
        if($page<1) $page = 1;

        $str = '<tbody class="'. $class_color .'" id="tr_' . $record_id . '">
					<tr ' . (($i%2==0) ? 'bgcolor="#f7f7f7"' : '') . '>';
        $str .= $this->showid($i, $page);
        $str .= $this->showCheck($i, $record_id);
        return $str;

    }

    public function showHeader($total_list)
    {
        //goi phan template
        $str = template_top($this->title,$this->urlsearch());
        if($this->quickEdit)
        {
            //phan quick edit
            $str .= '<form action="quickedit.php?url=' . base64_encode($_SERVER['REQUEST_URI']) . '" method="post" enctype="multipart/form-data" name="listing">
						<input type="hidden" name="iQuick" value="update">';
        }
        // khoi tao table
        $str .= '<table id="listing" cellpadding="5" cellspacing="0" border="1" bordercolor="' . $this->fs_border . '" width="100%" class="table">';

        //phan header

        $str .= '</tr>';

        //tru?ng ID
        $str .= '<th class="h" width="30">ID</th>';

        //phan checkbok all
        if($this->delete) $str .= '<th class="h check"><input type="checkbox" id="check_all" onclick="checkall(' . $total_list . ')"></th>';

        if($this->quickEdit)
        {
            //phan quick edit
            $str .= '<th class="h"><img src="' . $this->image_path . 'save.png" onclick="document.listing.submit()" style="cursor: pointer;" border="0"></th>';
        }

        foreach($this->arrayLabel as $key=>$lable)
        {

            $str .= '<th class="h">' . $lable . $this->urlsort($this->arrayField[$key]) . ' </th>';

        }

        $str .= '</tr>';

        return $str;
    }

    /**
     * Hàm sửa nhanh
     * @param string $fs_table
     * @return
     */
    public function ajaxedit($fs_table)
    {

        $this->edit_ajax = true;

        //nếu truong hợp checkbox thì chỉ thay đổi giá trị 0 và 1 thôi

        $checkbox 	= get_value("checkbox","int","GET",0);
        if($checkbox==1)
        {
            $record_id 	= get_value("record_id","int","GET",0);
            $field 		= get_value("field","str","GET","dfsfdsfdddddddddddddddd");
            if(trim($field) != '' && in_array($field,$this->arrayField)){
                $db_query = new db_query("SELECT " . $field . " FROM " . $fs_table . " WHERE " . $this->field_id . "=" . $record_id);
                if($row = mysql_fetch_assoc($db_query->result)){
                    $value = ($row[$field]==1) ? 0 : 1;
                    $db_update	= new db_execute("UPDATE " . $fs_table . " SET " . $field . " = " . $value . " WHERE " . $this->field_id . "=" . $record_id);
                    unset($db_update);
                    echo '<img src="' . $this->image_path . 'check_' . $value . '.gif" border="0">';
                }
                unset($db_query);
            }
            exit();
        }


        //phần sửa đổi giá trị  từng trường
        $ajaxedit 	= get_value("ajaxedit","int","GET",0);
        $id 	 		= get_value("id","str","POST","");
        $value 	 	= get_value("value","str","POST","");
        $array 	 	= trim(get_value("array","str","POST",""));

        if($ajaxedit == 1){

            $arr 		= explode(",",$id);
            $id  		= isset($arr[1]) ? intval($arr[1]) : 0;
            $field  	= isset($arr[0]) ? strval($arr[0]) : '';
            $type  	= isset($arr[2]) ? intval($arr[2]) : 0;
            if($type == 3) $_POST["value"] = str_replace(array("."),"",$value);

            //print_r($_POST);
            if($id != 0 && in_array($field,$this->arrayField)){

                $myform = new generate_form();
                $myform->removeHTML(0);
                $myform->add($field,"value",$type,0,"",0,"",0,"");

                $myform->addTable($fs_table);
                $errorMsg = $myform->checkdata();

                if($errorMsg == ""){
                    $db_ex = new db_execute($myform->generate_update_SQL($this->field_id,$id));
                }


            }

            if($array!=''){
                if(in_array($array,$this->arrayField)){
                    global $$array;
                    $arr = $$array;
                    $value = isset($arr[$value]) ? $arr[$value] : 'error';
                }
            }
            echo $value;
            exit();
        }
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