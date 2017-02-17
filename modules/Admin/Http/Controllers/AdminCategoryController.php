<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\EloquentCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class AdminCategoryController extends AdminController
{

    public function __construct(EloquentCategory $eloquentCategory)
    {
        $this->category = $eloquentCategory;
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
        $arrayColumn = ["cate_picture", "cate_icon", "cate_name", "cate_status","cate_order", "cate_show", "cate_type",
            'cate_total_hit'];

        // $this->setFilter($request, 'action', '=');
        // $this->setFilter($request, 'cate_id', '=');
        // $this->setFilter($request, 'cate_name', 'LIKE');
        $this->setFilter($request, 'cate_type', '=');
        $cate_sort  = get_value('cate_sort', 'str');
        $filter     = $this->getFilter();
        $sort       = ['cate_order', $cate_sort];

        $dataView = array(
            'categories'     => $this->category->getAllCategory($arrayColumn, $filter, false, $sort),
            'typeCategory'   => $this->category->getConfigTypeCategory()
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
    public function postAddCategory(Request $request)
    {
        $this->category->validateCategory($request);

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
    public function PostEditCategory(Request $request, $cateId)
    {
        // Validate dữ liệu đầu vào
        $this->category->validateCategory($request, $cateId);

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
        $categorySelect = $this->category->checkExistCategoryChild(['cate_parent_id','=',$cateId]);
        if ($categorySelect)
        {
            set_flash_delete_error();
            return redirect()->back();
        }

        // Xóa bản ghi ứng với cateId khi khong ton tai cate con
        $this->category->deleteCategoryById($cateId);
        set_flash_delete_success();

        return redirect()->route('admincpp.getListCategory');
    }

    /**
     * Created by : Hungokata
     * Time : 9:36 PM / 2/10/2017
     * @param void
     * @return void
     */
    public function postProcessQuickCategory(Request $request)
    {
        if ($request->ajax())
        {
            $action = strtolower(get_value('action','str', 'POST'));
            $cateId = get_value('id','int', 'POST');

            // Su dung edit table de sua nhanhh thong tin
            if (!$action) list($action, $orderValue, $cateId) = $this->getValueXEditTable();

            switch ($action)
            {
                case 'showhome' :
                    $this->category->updateByField($cateId, 'cate_show');
                    break;

                case 'editstatus':
                    $this->category->updateByField($cateId, 'cate_status');
                    break;

                case 'editname':
                    $orderValue = get_value('value', 'str', 'POST');  if (!$orderValue) return 0;
                    $this->category->updateByField($cateId, 'cate_name', $orderValue);
                    break;

                case 'editorder':
                    if (!$orderValue) return 0;
                    $this->category->updateByField($cateId, 'cate_order', $orderValue);
                    break;
            }

            return $this->responseSuccess();
        }
        return $this->responseError();
    }
}
