@extends('admin::layouts.master_tab')
@section('content')
{{--{!! bread_crumb([--}}
    {{--'admincpp.getListEvent' => 'Danh sách event',--}}
    {{--'admincpp.getAddEvent'  => 'Add event',--}}
{{--]) !!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Thêm mới event') !!}
                @include(ADMIN_VIEW .'events.form', ['routeName'=> 'admincpp.postAddEvent', 'routeParam'=> '' ])
            </div>
        </div>
    </div>
@stop