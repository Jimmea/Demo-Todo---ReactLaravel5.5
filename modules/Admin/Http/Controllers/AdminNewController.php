<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\CategoryRepository;
use App\Models\Tintucs\TintucRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\TintucRequest;

class AdminNewController extends AdminController
{
    protected $newType = [
        'crawl'         => 1,
        'user_write'    => 2,
        'albumn'        => 3,
        'friend'        => 4,
    ];

    public function __construct(CategoryRepository $categoryRepository, TintucRepository $tintucRepository)
    {
        $this->category = $categoryRepository;
        $this->tintuc   = $tintucRepository;
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
    public function postAddNew(TintucRequest $request)
    {
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

        $newTitle           = get_value('new_title', 'str', 'POST');
        $newDescription     = get_value('new_description', 'str', 'POST');
        $dataForm = [
            'new_title'            => $newTitle,
            'new_slug'             => str_remove_accent($newTitle),
            'new_more_slug'        => str_remove_accent($newTitle),
            'new_title_md5'        => md5($newTitle),
            'new_domain_id'        => 1,
            'new_link_from_domain' => 'NULL',
            'new_picture'          => get_value('new_picture', 'arr', 'POST'),
            'new_cate_id'          => get_value('new_cate_id', 'int', 'POST'),
            'new_description'      => $newDescription,
            'new_top'              => 0,
            'new_hot'              => 0,
            'new_status'           => get_value('new_status', 'int', 'POST'),
            'new_order'            => 0,
            'new_type'             => $this->newType['user_write'],
            'new_admin_id'         => $this->getAdminId(),
        ];

        $dataForm   = $request->filterDataForm($dataForm);
        $newAdd     = $this->tintuc->storeData($dataForm);

        if ($newAdd)
        {
            $lastNewId       = $newAdd->new_id;
            $ingredients     = break_string_toarray(get_value('new_ingredient', 'str', 'POST'));
            // Add thong tin content
            $dataFormContent = [
                'nec_id'               => $lastNewId,
                'nec_seo_metah1'       => $newTitle,
                'nec_content'          => '',
                'nec_video'            => get_value('new_video', 'str', 'POST'),
                'nec_seo_title'        => get_value('new_meta_title', 'str', 'POST'),
                'nec_seo_keyword'      => get_value('new_meta_keyword', 'str', 'POST'),
                'nec_seo_description'  => get_value('new_meta_description', 'str', 'POST'),
                'nec_ingredients'      => json_encode($ingredients),
                'nec_directions'       => json_encode($methods),
            ];

            $tableContent  = get_table_of_content_new($lastNewId);
            $this->tintuc->storeNewContentByTable($tableContent, $dataFormContent);

            // Add thong tin the tag
            $this->tintuc->attachTag($newAdd, [1, 2, 3]);
        }

        set_flash_add_success();
        return redirect()->route('admincpp.getListNew');
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
