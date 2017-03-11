<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Categories\CategoryRepository;
use App\Models\EventNewCategoryUsers\EventNewCategoryUserRepository;
use App\Models\Events\EventRepository;
use App\Models\Tintucs\TintucRepository;
use Illuminate\Http\Request;

class AdminEventNewController extends AdminController
{
    const Event = 'event';

    public function __construct(
            TintucRepository $tintucRepository ,
            EventRepository $eventRepository,
            EventNewCategoryUserRepository $eventNewCategoryUserRepository
        )
    {
        parent::__construct();
        $this->tintuc               = $tintucRepository;
        $this->event                = $eventRepository;
        $this->eventNewCategoryUser = $eventNewCategoryUserRepository;
    }

    public function getListNewEvent(Request $request, $id)
    {
        $event = $this->event->findEventById($id);
        if (!$event) return abort(404);
        $categoriesEvent  = $event->category->toArray();
        $eventCategories  = array();
        foreach ($categoriesEvent as $item)
        {
            $eventCategories[$item['cate_id']] = $item['cate_name'];
        }

        // Loc san pham
        $this->setFilter($request, 'new_id', '=');
        $this->setFilter($request, 'new_title', 'LIKE');
        $this->setFilter($request, 'new_cate_id', '=');
        $this->setFilter($request, 'new_type', '=');
        $this->setFilter($request, 'new_admin_id', '=');
        $filter         = $this->getFilter();

        $filterAdvanced      = [
            'evc_category_id'   => get_value('evc_category_id', 'int', 'GET'),
            'evc_event_id'      => $id
        ];

        $sort           = ['new_id', 'DESC'];
        $news           = $this->tintuc->getListNewPaginate($filter, $sort, 30, $filterAdvanced);

        // Tim cac tin ung voi event id
        $eventNews      = $this->eventNewCategoryUser->findByEventId($id);
        $eventNewsExist = '';
        if ($eventNews)
        {
            foreach ($eventNews as $item)
            {
                $eventNewsExist .= "[". $item['encu_new_id'] . '-' . $item['encu_category_id'] ."]";
            }
        }

        $dataView = [
            'news'              => $news,
            'eventNewsExist'    => $eventNewsExist,
            'newTypes'          => $this->getNewType(),
            'event'             => $event,
            'eventCategories'   => $eventCategories
        ];
        return view(ADMIN_VIEW .'event_news.list')->with($dataView);
    }

    public function postAddNewEvent(Request $request)
    {
        $data = $request->all();
        if ($request->ajax() && $data)
        {
            // Khong ton tai thi return loi
            if (!$data['categoryId'] || !$data['eventId']) return $this->responseError();

            // Trang thai active thi cap nhat vao
            if ($data['status'])
            {
                $dataForm = [
                    'encu_order'        => 0,
                    'encu_new_id'       => $data['newId'],
                    'encu_evn_id'       => $data['eventId'],
                    'encu_category_id'  => $data['categoryId'],
                    'encu_admin_id'     => $this->getAdminId()
                ];

                $save = $this->eventNewCategoryUser->storeData($dataForm);
                if ($save) return $this->responseSuccess();
            }
            // Trang thai khong active thi xoa no di
            else
            {
                $delete = $this->eventNewCategoryUser->deleteByCondition($data['newId'], $data['eventId'], $data['categoryId']);
                if ($delete) return $this->responseSuccess();
            }
        }
        return $this->responseError();
    }
}
