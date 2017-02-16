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

class EloquentCategory extends BaseRepository implements InterfaceCategory
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
        return $this->model->getConfigTypeCategory();
    }

    /**
     * Created by : BillJanny
     * Date: 11:25 PM - 2/10/2017
     * Validate add category
     * @param int $cate_id truong khoa chinh cua bang
     * @return void
     */
    public function validateCategory(Request $request, $cate_id =0)
    {
        $rules = [
            'cate_type'         => 'required',
            'cate_name'         => 'required|unique:categories,cate_name,'. $cate_id . ',cate_id'
        ];

        $messages = [
             'cate_type.required'  => 'The type category field is required',
             'cate_name.required'  => 'The name category field is required',
        ];

        $this->validate($request, $rules, $messages);
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
    public function updateCategoryHasChild($cate_parent_id, $value = 0, $cate_id, $cate_type='product', $action = 'add')
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
            $CategoryhasChild   = $categorySelect ? 1 : 0;

            // update cate_has_child & cate_all_child
            $cateAllChild   = $cateAllChild ? implode(',', $cateAllChild) : '';
            $this->updateById($cate_parent_id, ['cate_has_child'=> $CategoryhasChild, 'cate_all_child'=> $cateAllChild]);
            return false;
        }

        // Thêm cate_id mới vừa được tạo vào trong all list child của cate cha
        $cateAllChild[] = $cate_id;
        if (! in_array($cate_parent_id, $cateAllChild)) array_unshift($cateAllChild, $cate_parent_id);

        // Cập nhật thông tin
        $cateAllChild   = implode(',', $cateAllChild);
        $updateCategory = $this->updateById($cate_parent_id, ['cate_has_child'=> $value, 'cate_all_child'=> $cateAllChild]);

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
    public function getAllCategory($arrField= array(), $filter = array(), $searchCateory = false, $sort = ['cate_order', 'ASC'])
    {
        return $this->getAllChild('categories', 'cate_id', 'cate_parent_id', 0, $filter, $arrField, $sort , $searchCateory);
    }
}