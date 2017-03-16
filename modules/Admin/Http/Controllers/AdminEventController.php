<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\CategoryRepository;
use App\Models\EventNewCategoryUsers\EventNewCategoryUserRepository;
use App\Models\Events\EventRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\EventRequest;

class AdminEventController extends AdminController
{
    const Event = 'event';

    public function __construct(EventRepository $eventRepository,
                                EventNewCategoryUserRepository $eventNewCategoryUserRepository,
                                CategoryRepository $categoryRepository)
    {
        $this->event = $eventRepository;
        $this->eventNewCategoryUser = $eventNewCategoryUserRepository;
        $this->category = $categoryRepository;
    }

    public function getListEvent(Request $request)
    {
        $this->setFilter($request, 'evn_id', '=');
        $this->setFilter($request, 'evn_name', 'LIKE');
        $filter = $this->getFilter();
        $sort = ['evn_id', 'DESC'];

        $dataView = [
            'events' => $this->event->getListEventPaginate($filter, $sort, 30)
        ];

        return view(ADMIN_VIEW . 'events.index')->with($dataView);
    }

    public function getAddEvent()
    {
        $dataView = [
            'categories'  => $this->category->getCategoryByType(self::Event),
            'event'     => '',
        ];
        return view(ADMIN_VIEW . 'events.add')->with($dataView);
    }

    public function postAddEvent(EventRequest $request)
    {
        $dataForm = $request->except(['enc_category_id', '_token']);
        $dataForm = $request->filterDataForm($dataForm);
        $dataForm['evn_admin_id'] = $this->getAdminId();
        $dataForm['evn_slug']     = str_remove_accent($dataForm['evn_name']);
        $eventAdd = $this->event->storeData($dataForm);

        if ($request->get('enc_category_id'))
        {
            $this->event->attachEventNewCategory($eventAdd, $request->get('enc_category_id'));
        }
        set_flash_add_success();
        return redirect()->route('admincpp.getListEvent');
    }

    public function getEditEvent($id)
    {
        $event       = $this->event->findEventById($id);
        $categories  = $event->category->pluck('cate_id')->toArray();
        $event['enc_category_id'] = $categories;
        $dataView = [
            'categories'    => $this->category->getCategoryByType(self::Event),
            'event'         => $event
        ];
        return view(ADMIN_VIEW . 'events.edit')->with($dataView);
    }

    public function postEditEvent(EventRequest $request, $id)
    {
        $event              = $this->event->findEventById($id);
        $categoriesBefore   = $event->category->pluck('cate_id')->toArray();

        $dataForm    = $request->except(['enc_category_id', '_token']);
        $dataForm    = $request->filterDataForm($dataForm);
        $dataForm['evn_slug'] = str_remove_accent($dataForm['evn_name']);
        $eventEdit   = $this->event->updateById($id, $dataForm);
        if ($categoriesUpdate = $request->get('enc_category_id'))
        {
            // Xet truong hop khi ma cac event co category thay doi ma khong giong category truoc thi ta xoa di category do
            foreach ($categoriesBefore as $category)
            {
                if (!in_array($category, $categoriesUpdate))
                    $this->eventNewCategoryUser->deleteByCondition('', $id, $category);
            }
            $this->event->syncEventNewCategory($eventEdit, $categoriesUpdate);
        }

        set_flash_add_success();
        return redirect()->route('admincpp.getListEvent');
    }

    public function getDeleteEvent($id=0)
    {
        if ($id)
        {
            $this->event->delete($id);
            set_flash_delete_success();
            return redirect()->back();
        }
    }
}
