<?php
/**
 * Created by PhpStorm.
 * User: HUNG
 * Date: 2/10/2017
 * Time: 10:29 PM
 */

namespace App\Models\Categories;

use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class EloquentCategory extends BaseRepository implements CategoryRepository
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    /**
     * Created by : Hungokata
     * Time : 10:45 PM / 2/10/2017
     * Lay cac kieu hien thi
     * @param void
     * @return array
     */
    public function getTypeView()
    {
        return $this->model->getTypeView();
    }

    /**
     * Created by : BillJanny
     * Date: 10:33 PM - 2/10/2017
     * Lay kieu danh muc
     * @param void
     * @return array
     */
    public function getConfigTypeCategory()
    {
        return [
            'static'    => 'Trang tĩnh',
            'news'      => 'Tin tức',
            'product'   => 'Sản phẩm',
            'gioithieu' => 'Giới thiệu',
            'giaiphap'  => 'Giải pháp',
            'tuvan'     => 'Hỏi đáp',
            'event'     => 'Events'
        ];
    }

    /**
     * Created by : BillJanny
     * Date: 1:41 PM - 2/12/2017
     * Update category ton tai ban ghi con hay khong
     * @param int $cate_parent_id : trường khóa parent id
     * @param int $value : gia tri 0 | 1 xem có tồn tại cate con
     * @param int $cate_id : trường khóa chính cảu bảng
     * @param string $cate_type : kiểu category
     * @param $action : hành động cho update
     * @return mixed
     */
    public function updateCategoryHasChild($cate_parent_id, $hasChild = 0, $cate_id, $cate_type='product', $action = 'add')
    {
        if (! array_key_exists(strtolower($cate_type), $this->getConfigTypeCategory())) return false;

        // Tìm kiếm trong bảng category với id = $cate_parent_id
        $category       = $this->findById($cate_parent_id);
        $cateAllChild   = $category->cate_all_child ? explode(',', $category->cate_all_child) : array();

        // Cho trường hơp $action = edit mới thực hiện
        if (strtolower($action) == 'edit')
        {
            $c = null;
            foreach ($cateAllChild as $k => $v)
            {
                if ($v)
                {
                    // Xóa đi các cate trùng trong chuỗi
                    if ($c== $v) unset($cateAllChild[$k]);
                    $c = $v;
                    // Xóa đi cate đang update tồn tại ở list all child cate parent id trước đó
                    if ($v == $cate_id) unset($cateAllChild[$k]);
                }
            }

            // Check lại $cate_parent_id tồn tại cate child k. Nếu k tồn tại thì cate_has_child = 0 ||cate_has_child = 1
            $categorySelect     = $this->checkExistCategoryChild(array('cate_parent_id', '=', $cate_parent_id));
            $hasChild           = $categorySelect ? 1 : 0;
        }

        // Thêm cate_id mới vừa được tạo vào trong all list child của cate cha
        if ($action == 'add')
        {
            $cateAllChild[] = $cate_id;
            if (! in_array($cate_parent_id, $cateAllChild)) array_unshift($cateAllChild, $cate_parent_id);
        }

        // Cập nhật thông tin
        $cateAllChild   = conver_unique_array_tostring($cateAllChild);
        $dataFill       = ['cate_has_child'=> $hasChild, 'cate_all_child'=> $cateAllChild];
        $updateCategory =  $category->fill($dataFill)->save();
        return $updateCategory;
    }

    /**
     * Created by : Hungokata
     * Time : 7:55 PM / 2/13/2017
     * @param array $condition : mảng điều kiện column opera value
     * @param array $arrayColumn : mảng column sẽ lấy mặc định default
     * @return mixed
     */
    public function checkExistCategoryChild($condition = array(), $arrayColumn = array('*'))
    {
        return $this->findBy($condition,  $arrayColumn);
    }

    /**
     * Created by : Hungokata
     * Time : 8:07 PM / 2/13/2017
     * @param int $cateId Truong khoa chinh cua bang
     * @return void
     */
    public function deleteCategoryById($cateId)
    {
        return $this->delete($cateId);
    }

    /**
     * Created by : BillJanny
     * Date: 10:01 PM - 2/13/2017
     * Update category
     * @param int $cateId : truong khoa chinh cua bang
     * @param array $attribute : mang du lieu can update
     * @return void
     */
    public function updateCategoryById($cateId=0, $attribute= array())
    {
        if ($cateId<1) return false;
        return $this->updateById($cateId, $attribute);
    }

    /**
     * Created by : BillJanny
     * Date: 7:54 PM - 2/13/2017
     * Lưu thông tin category
     * @param array $attributes : mảng thuộc tính gồm key value
     * @return mixed
     */
    public function storeCategory($attributes = array())
    {
        return $this->storeData($attributes);
    }

    public function findById($id)
    {
        return parent::findById($id);
    }

    public function updateByField($id, $field, $otherValue = '')
    {
        return parent::updateByField($id, $field, $otherValue);
    }

    public function makeCollectTionCategory($categories)
    {
        $categories = $this->model->makeCollectionCategory($categories);
        return $categories;
    }

    /**
     * Created by : Hungokata
     * Time : 11:15 PM / 2/10/2017
     * Lay tat ca danh muc co trong bang category
     * @param $arrField $arrField : mảng column cần lấy thông tin
     * @param $arrField $filter : mảng filter
     * @param boolean $searchCateory : false | true
     * @param arrray $sort : mảng sắp xếp
     * @return array
     */
    public function getAllCategory($arrField= array(), $filter = array(), $search = false, $sort = ['cate_order', 'ASC'])
    {
        $categories = $this->getAllChild('categories', 'cate_id', 'cate_parent_id', 0, $filter, $arrField, $sort , $search);
        return $categories;
    }

    public function getAllParentCategory()
    {
        $query =  $this->model
                    ->where('cate_parent_id',0)
                    ->orderBy('cate_order')
                    ->get();

        return $query;
    }

    /**
     * Get ton bo thong tin category theo type
     * @param string $type : kieu danh muc category
     * @return mixed
     */
    public function getCategoryByType($type)
    {
        $query = $this->model->where('cate_type', $type)
                             ->where('cate_status', 1)
                             ->get()
                             ->toArray();
        return $query;
    }
}