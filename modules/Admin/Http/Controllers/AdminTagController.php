<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Tags\TagRepository;


class AdminTagController extends AdminController
{
   public function __construct(TagRepository $tagRepository)
   {

   }

   public function getListTag()
   {

   }

    /**
    *
    * @param
    * @return void
    */
    public function getAddTag()
    {
        dd(123);
        return view(ADMIN_VIEW . 'tags.add');
    }

    /**
     *
     * @param
     * @return void
     */
    public function postAddTag(TagRequest $request)
    {

    }

    /**
     *
     * @param
     * @return void
     */
    public function getEditTag()
    {
        return view(ADMIN_VIEW . 'tags.add');
    }

    /**
     *
     * @param
     * @return void
     */
    public function postEditTag()
    {

    }
}
