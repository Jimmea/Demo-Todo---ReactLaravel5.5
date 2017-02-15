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
    public function getAllChild($tableName, $idField, $parentIdField, $parentId =0, $filter='',$listField= array(), $orderClause = array(),
                              $searchCateory = false , $hasChildField= array())
    {
        // Select thong tin tu database
        $dbQuery = DB::table($tableName)
                  ->select($idField, $parentIdField, DB::RAW(implode(', ', $listField)))
                  ->orderBy($parentIdField);

        // Ton tai $whereClause
        if (is_array($filter))
        {
            $dbQuery->where(function ($q) use ($filter)
            {
                foreach ($filter as $k => $f)
                {
                    if ($f[2] == 'search')
                    {
                        unset($filter[$k]);
                        continue;
                    }
                    list($col, $ope, $val) = $f;
                    $q->where($col, $ope, $val);
                }
            });
        }

        // Truy van với $orderClause
        if (count($orderClause) == 2)
        {
            list($column, $order) = $orderClause;
            $dbQuery->orderBy($column, $order);
        }

        // Truy vấn với $hasChildField
        if (count($hasChildField) == 2)
        {
            list($column, $value) = $hasChildField;
            $dbQuery->where($column, $value);
        }

        // Cho key bang truong khoa chinh
        $dbQuery        = $dbQuery->get()->keyBy($idField);
        $arrayCategory  = $dbQuery ? $dbQuery->toArray() : array();

        // Nếu trường hợp search xảy ra
        if ($searchCateory)
        {
            return $arrayCategory;
        }

        // lam lai mang ung voi cac parentid ra sao
        if ($arrayCategory)
        {
            foreach ($arrayCategory as $k => $value)
            {
                $this->arrayCategory[$value->$parentIdField][$value->$idField] = (array)$value;
            }
        }

        // Goi ham sap xep theo dung vi tri
        $this->sortLevel($this->arrayCategory, $parentId);

        return $this->menu;
    }


    /**
     * Created by : BillJanny
     * Date: 2:21 AM - 2/11/2017
     * Hàm sắp xếp các cấp con cho đúng vị trí level
     * @param array $arrayCategory : Mảng chứa thông tin,
     * @param string $keyStart : Nút cha,
     * @param int level : biến chứa level,
     * @return void
     */
    private function sortLevel($arrayCategory, $keyStart= 0, $level=-1)
    {
        if(array_key_exists($keyStart,$arrayCategory))
        {
            $level++;
            foreach($arrayCategory[$keyStart] as $key => $value)
            {
                // gán các phần tử cho array menu sắp xếp theo đúng vị trí
                $this->stt++;
                $this->menu[$this->stt] = $value;

                // Gán level
                $this->menu[$this->stt]['level'] = $level;
                $this->level[$level]++;
                $this->arrayCount[] = $keyStart;

                // Thiết lập để biết rằng đây là một nút cha trong mang tren
                $this->menu[$this->stt]["parent"] = (array_key_exists($key,$arrayCategory)) ? 1 : 0;

                // Đệ quy lại để lấy menu con tiep theo
                $this->sortLevel($arrayCategory, $key, $level);
            }
        }
    }
}