<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminNewController extends AdminController
{
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->category = $categoryRepository;
    }

    /**
     * @param
     * @return void
     */
    public function getListNew()
    {
        
    }

    /**
     * @param
     * @return void
     */
    public function getAddNew()
    {
        $dataView = [
            'categories'    => $this->category->getAllCategory(['cate_name']),
            'configStatus'  => $this->getArrayBoolean()
        ];
        return view(ADMIN_VIEW . 'new.add')->with($dataView);
    }

    /**
     * @param
     * @return void
     */
    public function postAddNew(Request $request)
    {
        $newPicture         = get_value('new_picture', 'str', 'POST');
        $newCateId          = get_value('new_cate_id', 'int', 'POST');
        $newTitle           = get_value('new_title', 'str', 'POST');
        $newDescription     = get_value('new_description', 'str', 'POST');
        $newIngredient      = get_value('new_ingredient', 'str', 'POST');
        $newVideo           = get_value('new_video', 'str', 'POST');
        $newStatus          = get_value('new_status', 'arr', 'POST');
        $newStepTitle       = get_value('new_step_title', 'arr', 'POST');
        $newStepPicture     = get_value('new__step_picure', 'arr', 'POST');
        $methods            = array();
        if ($newStepTitle)
        {
            foreach ($newStepTitle as $key => $value)
            {
                if ($value)
                {
                    $methods[] = ['title' => $value, 'picture' => $newStepPicture[$key]];
                }
            }
        }

        $dataForm = [

        ];

    }

    /**
     * @param
     * @return void
     */
    public function getEditNew()
    {
        
    }

    /**
     * @param
     * @return void
     */
    public function postEditNew()
    {
        
    }

    /**
     * Add thêm một group step
     * @param void
     * @return json
     */
    public function postAddStep(Request $request)
    {
        $step = get_value('step', 'int', 'POST');
        if ($request->ajax() && $step)
        {
            return response()->json([
                'code'      => 1,
                'message'   => 'success',
                's'         => $step,
                'groupstep' => view(ADMIN_VIEW . 'new/groupstep', compact('step'))->render()
            ]);
        }
        return $this->responseError();
    }
}
