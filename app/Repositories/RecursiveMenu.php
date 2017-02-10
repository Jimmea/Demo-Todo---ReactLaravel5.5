<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/11/2017
 * Time: 1:58 AM
 */

namespace App\Repositories;
use DB;

trait RecursiveMenu
{

    var $menu          = array();
    var $stt           = -1;
    var $show_count    = 0;
    var $arrayCatId    = array();
    var $countId       = 1;
    var $arrayParent   = array();
    var $arrayCategory = array();
    var $level         = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    var $arrayCount    = array();

    /**
     * Created by : BillJanny
     * Date: 2:00 AM - 2/11/2017
     * Ham lay tat ca cac menu con
     * @param string $tableName     : Tên bảng
     * @param string $idField       : Trường khóa chính id của bảng(VD : menu_id, cate_id ...)
     * @param string $parentIdField : Trường khóa parent_id (VD : mnu_parent_id, cate_parent_id ...)
     * @param int $parentId         : Id của nút cha
     * @param string $where_clause	 : Menh de where trong cau query
     * @param string $listField     : Danh sách trường cần lấy cách nhau bởi dấu phẩy
     * @param string $orderClause   : Sap xep theo gi
     * @param string $hasChildField : tên trường xác nhận xem nó có còn hay k (VD : menu_has_child)
     * @param int $update           : Có update haschild vào database không
     * @return array
     */
    public function getAllChild($tableName, $idField, $parentIdField, $parentId =0,$whereClause="1",$listField, $orderClause,
                                $hasChildField=0, $update =1, $level =0, $callback =0)
    {
        // Select thong tin tu database
        $dbQuery = DB::table($tableName)
                  ->select($idField, $parentIdField, $listField)
                  ->whereRaw($whereClause)
                  ->get();

        return $dbQuery;
    }


    /**
     * Created by : BillJanny
     * Date: 2:21 AM - 2/11/2017
     * Hàm sắp xếp các cấp con cho đúng vị trí
     * @param array $arrayCategory : Mảng chứa thông tin,
     * @param string $keyStart : Nút cha,
     * @param int level : biến chứa level,
     * @return void
     */
    public function sortLevel($arrayCategory,$keyStart=0,$level=-1)
    {

    }

}