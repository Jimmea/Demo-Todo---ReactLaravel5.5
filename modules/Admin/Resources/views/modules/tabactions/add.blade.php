@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'admincpp.getListTabAction' => 'Danh sách',--}}
        {{--'Thêm mới'--}}
    {{--]) !!}--}}
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            {!! box_title('Thêm mới tab group category') !!}
            @include(ADMIN_VIEW. 'tabactions.form', [
                'routeName'  => 'admincpp.postAddTabAction',
                'routeParam' => ''
            ])
        </div>
    </div>
</div>
@stop