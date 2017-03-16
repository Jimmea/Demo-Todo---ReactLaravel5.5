<?php

namespace Modules\Admin\Http\Controllers;


use App\Models\Tags\TagRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\TagRequest;

class AdminTagController extends AdminController
{
   public function __construct(TagRepository $tagRepository)
   {
       parent::__construct();
       $this->tag = $tagRepository;
   }

   public function getListTag(Request $request)
   {
        if ($request->ajax())
        {
            // truong hop search tag
            $term       = get_value('term', 'str', 'GET');
            if ($term)
            {
                return $this->tag->searchTag($term);
            }

            // Cho truong hop search listing
            $field      = get_value('field', 'str', 'POST');
            $record_id  = get_value('record_id', 'int', 'POST');
            if ($field && $record_id)
            {
                switch ($field)
                {
                    case 'tag_active':
                        $update = $this->tag->updateByField($record_id, 'tag_active');
                        break;
                }
                return $this->responseSuccess($update);
            }
            return $this->responseError();
        }
        $this->setFilter($request, 'tag_name', 'LIKE');
        $this->setFilter($request, 'created_at', 'LIKE');
        $this->setFilter($request, 'tag_category_id', '=');

        $dataView = [
            'tags' => $this->tag->getAll($this->getFilter(), ['tag_id', 'DESC'], 30)
        ];

        return view(ADMIN_VIEW . 'tags.list')->with($dataView);
   }

    /**
    *
    * @param
    * @return void
    */
    public function getAddTag()
    {
        $dataView = [
            'tag' => array()
        ];
        return view(ADMIN_VIEW . 'tags.add')->with($dataView);
    }

    /**
     *
     * @param
     * @return void
     */
    public function postAddTag(TagRequest $request)
    {
        $dataForm = $request->except('_token');
        $dataForm = $request->filterDataForm($dataForm);
        $dataForm['tag_md5']        = md5($request->get('tag_name'));
        $dataForm['tag_admin_id']   = $this->getAdminId();
        $this->tag->storeData($dataForm);

        set_flash_add_success();
        return redirect()->route('admincpp.getListTag');
    }

    /**
     *
     * @param
     * @return void
     */
    public function getEditTag($id)
    {
        $dataView = [
            'tag' => $this->tag->findById($id)
        ];
        return view(ADMIN_VIEW . 'tags.edit')->with($dataView);
    }

    /**
     *
     * @param
     * @return void
     */
    public function postEditTag(TagRequest $request, $id)
    {
        $dataForm  = $request->except('_token');
        $dataForm  = $request->filterDataForm($dataForm);
        $dataForm['tag_md5'] = md5($request->get('tag_name'));
        $this->tag->updateById($id, $dataForm);
        set_flash_update_success();
        return redirect()->route('admincpp.getListTag');
    }

    public function getDeleteTag(Request $request, $id =0)
    {
        // Xoa theo nhieu id khi autocomplete
//        if ($tag = get_value('tag_name', 'str', 'POST'))
//        {
//            $tags = $this->tag->searchMd5Tag($tag);
//            $ids  = array();
//            foreach ($tags as $item)
//            {
//                $ids[] = $item->tag_id;
//            }
//            if ($ids) $this->tag->deleteById($ids);
//
//            return ;
//        }

        if ($request->ajax())
        {
            $tag_id = get_value('id', 'arr', 'POST');
            $this->tag->deleteById($tag_id);
            return $this->responseSuccess();
        }

        //  Xoa theo id khi o trang listing
        if ($id > 0)
        {
            $this->tag->deleteById($id);
            set_flash_delete_success();
        }
        return redirect()->route('admincpp.getListTag');
    }
}
