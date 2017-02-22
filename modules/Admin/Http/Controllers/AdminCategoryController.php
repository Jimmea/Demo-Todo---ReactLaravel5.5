<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Categories\CategoryRepository;
use Illuminate\Http\Request;

class AdminCategoryController extends AdminController
{

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository;
    }

    /**
     * Created by : BillJanny
     * Date: 7:26 PM - 2/12/2017
     * Hiển thị danh sách danh mục
     * @param void
     * @return void
     */
    public function getListCategory(Request $request)
    {
        // Truong hop cap nhat
        if ($request->ajax())
        {
            $field  = strtolower(get_value('field','str', 'POST'));
            $cateId = get_value('record_id','int', 'POST');

            if ($field && $cateId)
            {
                switch ($field)
                {
                    case 'cate_show' :
                        $this->category->updateByField($cateId, 'cate_show');
                        break;

                    case 'cate_status':
                        $this->category->updateByField($cateId, 'cate_status');
                        break;

                    case 'cate_name':
                        $value = get_value('value', 'str', 'POST');  if (!$value) return 0;
                        $this->category->updateByField($cateId, 'cate_name', $value);
                        break;

                    case 'cate_order':
                        $value = get_value('value','int', 'POST'); if ($value === '') return 0;
                        $this->category->updateByField($cateId, 'cate_order', $value);
                        break;

                }

                return $this->responseSuccess();
            }
        }

        // Show danh sach
        $arrayColumn = ["cate_picture", "cate_icon", "cate_name", "cate_status","cate_order", "cate_show", "cate_type",
            'cate_total_hit'];

        $this->setFilter($request, 'cate_type', '=');
        $cate_sort  = get_value('cate_sort', 'str');
        $filter     = $this->getFilter();
        $sort       = ['cate_order', $cate_sort];

        $categories     = $this->category->getAllCategory($arrayColumn, $filter, false, $sort);
        $typeCategories = $this->category->getConfigTypeCategory();

        $dataGrid   = new \DataGridO('cate_id', 'cate_name', 'Danh sách account');
        $dataGrid->add('cate_id', 'ID', 'numbernotedit');
        $dataGrid->add('cate_picture', 'Hình ảnh', 'picture');
        $dataGrid->add('cate_type', 'Type category', 'array', 0, 0, 'width="150"');
        $dataGrid->add('cate_name', 'Tên category', 'string');
        $dataGrid->add('cate_total_hit', 'Total view', 'numbernotedit');
        $dataGrid->add('cate_order', 'Order', 'number');
        $dataGrid->add('cate_show', 'Home', 'checkbox');
        $dataGrid->add('cate_status', 'Status', 'checkbox');
        $dataGrid->add(false, 'Edit', 'edit');
        $dataGrid->add(false, 'Delete', 'delete', 0, 0 , "align='center'");
        $dataGrid->setRouteAdd('admincpp.getAddCategory');
        $dataGrid->setRouteEdit('admincpp.getEditCategory');
        $dataGrid->setRouteDelete('admincpp.getDeleteCategory');
        $dataGrid->setArrayFieldLevel(array('cate_name'=>"--"));
        $dataGrid->addSearch('Kiểu category', 'cate_type', 'array', $typeCategories);

        $dataView = array(
            'listing'        => $dataGrid->showTableMulti($categories),
            'categories'     => $categories,
            'typeCategory'   => $typeCategories
        );

        return view(ADMIN_VIEW.'categories.index')->with($dataView);
    }

    /**
     * Created by : BillJanny
     * Date: 11:17 PM - 2/10/2017
     * Hien thi form them moi category
     * @param void
     * @return response
     */
    public function getAddCategory()
    {
        $dataView = $this->getDataViewDefault();
        return view(ADMIN_VIEW.'categories.add')->with($dataView);
    }

    /**
     * Created by : Hungokata
     * Time : 9:43 PM / 2/13/2017
     * @param void
     * @return void
     */
    public function getDataViewDefault()
    {
        return [
            'category'      => array(),
            'categories'    => $this->category->getAllCategory(['cate_name']),
            'cateShowMod'   => $this->getArrayBoolean(),
            'typeView'      => $this->category->getTypeView(),
            'typeCategory'  => $this->category->getConfigTypeCategory()
        ];
    }

    /**
     * Created by : Hungokata
     * Time : 9:35 PM / 2/10/2017
     * @param
     * @return void
     */
    public function postAddCategory(CategoryRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm['cate_admin_id']      = $this->getAdminId();
        $dataForm['cate_view_type']     = ($dataForm['cate_view_type'] ? $dataForm['cate_view_type'] : 1);
        $dataForm['cate_parent_id']     = ($dataForm['cate_parent_id'] ? $dataForm['cate_parent_id'] : 0);

        $category = $this->category->storeCategory($dataForm);

        // Cập nhật lại cate có cate_parent_id được chọn đã có has child
        if ($dataForm['cate_parent_id'] > 0)
        {
            $this->category->updateCategoryHasChild($dataForm['cate_parent_id'], 1, $category->cate_id, $dataForm['cate_type']);
        }

        set_flash_add_success();
        return redirect()->route('admincpp.getListCategory');
    }
    /**
     * Created by : Hungokata
     * Time : 9:36 PM / 2/10/2017
     * Show view cập nhật
     * @param int $cateId : trường khóa chính cảu bảng
     * @return void
     */
    public function getEditCategory($cateId)
    {
        $dataView               = $this->getDataViewDefault();
        $dataView['category']   = $this->category->findById($cateId);

        return view(ADMIN_VIEW . 'categories.edit')->with($dataView);
    }

    /**
     * Created by : Hungokata
     * Time : 9:36 PM / 2/10/2017
     * Cập nhật một bản ghi ứng với id
     * @param int $cateId
     * @return void
     */
    public function PostEditCategory(CategoryRequest $request, $cateId)
    {
        // Kiểm tra xem bản ghi có tồn tại không
        $categorySelectOne              = $this->category->findById($cateId);
        $cateParentIdBeforeUpdate       = $categorySelectOne->cate_parent_id;
        $cateListAllChildBeforeUpdate   = $categorySelectOne->cate_all_child;

        // Get data form
        $dataForm  = $request->except('_token');
        $dataForm['cate_admin_id']      = $this->getAdminId();
        $dataForm['cate_view_type']     = ($dataForm['cate_view_type'] ? $dataForm['cate_view_type'] : 1);
        $dataForm['cate_parent_id']     = ($dataForm['cate_parent_id'] ? $dataForm['cate_parent_id'] : 0);
        $cateParentIdAfterUpdate        = $dataForm['cate_parent_id'];

        // Báo lõi trường hợp parent_key = $cateId
        $conflictCategory               = ($cateId == $cateParentIdAfterUpdate) ? true : false;
        // Kiểm tra tránh conflict vói list all child
        if ($cateListAllChildBeforeUpdate || $conflictCategory)
        {
            $cateListAllChildBeforeUpdate   = explode(',', $cateListAllChildBeforeUpdate);
            if (in_array($cateParentIdAfterUpdate, $cateListAllChildBeforeUpdate) || $conflictCategory)
            {
                set_flash('error', "You can't choice this parent category to Update. Please choice other parent category");
                return redirect()->back();
            }
        }

        // Cập nhật toàn bộ thông tin category
        $this->category->updateCategoryById($cateId, $dataForm);

        // Danh cho category update có parent khác với parent trước khi update.
        if ($cateParentIdAfterUpdate != $cateParentIdBeforeUpdate)
        {
            // Cập nhật parent trước đó | Xóa cateId o listAllChild của parent id trước : haschild phai check
            if ($cateParentIdBeforeUpdate >0)
            {
                $this->category->updateCategoryHasChild($cateParentIdBeforeUpdate, false, $cateId, $dataForm['cate_type'], 'edit');
            }

            // Cap nhat parent hien tai co haschild
            if ($cateParentIdAfterUpdate > 0)
            {
                $this->category->updateCategoryHasChild($cateParentIdAfterUpdate, 1, $cateId,  $dataForm['cate_type']);
            }
        }

        set_flash_update_success();
        return redirect()->route('admincpp.getListCategory');
    }

    /**
     * Created by : Hungokata
     * Time : 7:32 PM / 2/13/2017
     * Xóa đi một bản ghi
     * @param int $cateId : trường khóa chính của bảng category
     * @return void
     */
    public function getDeleteCategory($cateId)
    {
        // Kiểm tra xem các cấp con đã xóa hết chưa mới được xóa đi
        $categorySelect = $this->category->checkExistCategoryChild(['cate_parent_id', '=', $cateId]);

        if ($categorySelect) {
            set_flash_delete_error();
            return redirect()->back();
        }

        // Xóa bản ghi ứng với cateId khi khong ton tai cate con
        $this->category->deleteCategoryById($cateId);
        set_flash_delete_success();

        return redirect()->route('admincpp.getListCategory');
    }
}
