<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Events\EventRepository;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\EventRequest;

class AdminEventController extends AdminController
{
    public function __construct(EventRepository $eventRepository)
    {
        parent::__construct();
        $this->event = $eventRepository;
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
        return view(ADMIN_VIEW . 'events.add');
    }

    public function postAddEvent(EventRequest $request)
    {
        $dataForm = $request->except(['evn_category_id', '_token']);
        $dataForm = $request->filterDataForm($dataForm);
        $eventAdd = $this->event->storeData($dataForm);

        set_flash_add_success();
        return redirect()->route('admincpp.getListEvent');
    }

    public function getEditEvent()
    {
        return view(ADMIN_VIEW . 'events.edit');
    }

    public function getPostEvent()
    {

    }
}
