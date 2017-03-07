<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Tags\TagRepository;
use App\Models\Tintucs\TintucRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\TintucRequest;

class AdminNewController extends AdminController
{
    private $newType = [
        'crawl'         => 1,
        'user_write'    => 2,
        'albumn'        => 3,
        'friend'        => 4,
    ];

    public function __construct(TintucRepository $tintucRepository, TagRepository $tagRepository)
    {
        parent::__construct();
        $this->tag      = $tagRepository;
        $this->tintuc   = $tintucRepository;
    }

    private function getNewType()
    {
        $newType = array();
        foreach ($this->newType as $name => $stt)
        {
            $newType[$stt] = $name;
        }
        return $newType;
    }

    /**
     * Show dannh sach
     * @param
     * @return void
     */
    public function getListNew(Request $request)
    {
        if ($request->ajax())
        {
            $field      = get_value('field', 'str', 'POST');
            $recordId   = get_value('record_id', 'int', 'POST');
            if ($field && $recordId)
            {
                switch ($field)
                {
                    case 'new_status':
                         $this->tintuc->updateByField($recordId, 'new_status');
                        break;
                }
                return $this->responseSuccess();
            }
            return $this->responseError();
        }

        $this->setFilter($request, 'new_id', '=');
        $this->setFilter($request, 'new_title', 'LIKE');
        $this->setFilter($request, 'new_cate_id', '=');
        $this->setFilter($request, 'new_type', '=');
        $this->setFilter($request, 'new_admin_id', '=');

        $filter     = $this->getFilter();
        $sort       = ['new_id', 'DESC'];
        $news       = $this->tintuc->getListNewPaginate($filter, $sort, 30);

        $dataView   = [
            'news'       => $news,
            'newTypes'   => $this->getNewType()
        ];
        return view(ADMIN_VIEW . 'news.list')->with($dataView);
    }

    /**
     * @param
     * @return void
     */
    public function getAddNew()
    {
        $dataView = [ 'new' => NULL ];
        return view(ADMIN_VIEW . 'news.add')->with($dataView);
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
            'new_pre_time'         => get_value('new_cate_id', 'int', 'POST'),
            'new_cook_time'        => get_value('new_cook_time', 'int', 'POST'),
            'new_people'           => get_value('new_people', 'int', 'POST'),
        ];
        dd($dataForm);
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
                'nec_seo_title'        => get_value('nec_seo_title', 'str', 'POST'),
                'nec_seo_keyword'      => get_value('nec_seo_keyword', 'str', 'POST'),
                'nec_seo_description'  => get_value('nec_seo_description', 'str', 'POST'),
                'nec_ingredients'      => json_encode($ingredients),
                'nec_directions'       => json_encode($methods),
            ];

            $tableContent  = get_table_of_content_new($lastNewId);
            $this->tintuc->storeNewContentByTable($tableContent, $dataFormContent);

            // Add thong tin the tag
            $tagIds = $this->tag->getListTagIdByListName(get_value('new_tag', 'str', 'POST'));
            if ($tagIds) $this->tintuc->attachTag($newAdd, $tagIds);
        }
        set_flash_add_success();
        echo '<script type="text/javascript">sessionStorage.removeItem("dataRecipe");</script>';
        return redirect()->route('admincpp.getListNew');
    }

    /**
     * Hien thi form sua thong tin
     * @param int $id : truong khoa chinh cua bang new
     * @return void
     */
    public function getEditNew($id)
    {
        $tintuc      = $this->tintuc->findByNewId($id);
        $tags        = $tintuc->tags->toArray();
        $listTag     = '';
        if ($tags)
        {
            foreach ($tags as $item)
            {
                $listTag.= $item['tag_name'] . ',';
            }
        }
        $tintuc = [
            'new_id'              => $id,
            'new_title'           => $tintuc->new_title,
            'new_picture'         => $tintuc->new_picture,
            'new_description'     => $tintuc->new_description,
            'new_cate_id'         => $tintuc->new_cate_id,
            'new_video'           => $tintuc->nec_video,
            'new_pre_time'        => $tintuc->new_pre_time,
            'new_cook_time'       => $tintuc->new_cook_time,
            'new_people'          => $tintuc->new_people,
            'new_ingredient'      => break_array_tostring(json_decode($tintuc->nec_ingredients)),
            'new_directions'      => json_decode($tintuc->nec_directions),
            'nec_seo_title'       => $tintuc->nec_seo_title,
            'nec_seo_keyword'     => $tintuc->nec_seo_keyword,
            'nec_seo_description' => $tintuc->nec_seo_description,
            'new_status'          => $tintuc->new_status,
            'new_tag'             => rtrim($listTag, ','),
        ];
        $dataView = [
            'new' => (object)$tintuc
        ];
        return view(ADMIN_VIEW . 'news.edit')->with($dataView);
    }

    /**
     * @param
     * @return void
     */
    public function postEditNew(TintucRequest $request, $id)
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
            'new_pre_time'         => get_value('new_pre_time', 'int', 'POST'),
            'new_cook_time'        => get_value('new_cook_time', 'int', 'POST'),
            'new_people'           => get_value('new_people', 'int', 'POST'),
        ];
        $dataForm   = $request->filterDataForm($dataForm);

        $newUpdate  = $this->tintuc->updateById($id, $dataForm);
        if ($newUpdate)
        {
            $lastNewId       = $newUpdate->new_id;
            $ingredients     = break_string_toarray(get_value('new_ingredient', 'str', 'POST'));
            // Add thong tin content
            $dataFormContent = [
                'nec_id'               => $lastNewId,
                'nec_seo_metah1'       => $newTitle,
                'nec_content'          => '',
                'nec_video'            => get_value('new_video', 'str', 'POST'),
                'nec_seo_title'        => get_value('nec_seo_title', 'str', 'POST'),
                'nec_seo_keyword'      => get_value('nec_seo_keyword', 'str', 'POST'),
                'nec_seo_description'  => get_value('nec_seo_description', 'str', 'POST'),
                'nec_ingredients'      => json_encode($ingredients),
                'nec_directions'       => json_encode($methods),
            ];

            $tableContent  = get_table_of_content_new($lastNewId);
            $this->tintuc->updateNewContentById($tableContent, $lastNewId, $dataFormContent);

            // Add thong tin the tag
            $tagIds = $this->tag->getListTagIdByListName(get_value('new_tag', 'str', 'POST'));
            if ($tagIds) $this->tintuc->syncTag($newUpdate, $tagIds);
        }
        set_flash_update_success();
        return redirect()->route('admincpp.getListNew');
    }

    public function getDeleteNew($id)
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
                'groupstep' => view(ADMIN_VIEW . 'news.groupstep', compact('step'))->render()
            ]);
        }
        return $this->responseError();
    }
}
