@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'admincpp.getListEvent' => 'Danh sách event',
        'admincpp.getAddEvent'  => 'Edit event',
    ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Cập nhật event') !!}
                @include(ADMIN_VIEW .'events.form', ['routeName'=> 'admincpp.postEditEvent', 'routeParam'=> $event->evn_id ])
            </div>
        </div>
    </div>
@stop