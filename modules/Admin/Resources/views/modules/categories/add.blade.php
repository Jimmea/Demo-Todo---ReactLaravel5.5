@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
            {{--'admincpp.getListCategory'=> trans('admin::category.list.title'),--}}
            {{--trans('admin::category.add.title')--}}
        {{--])--}}
    {{--!!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::category.add.title')) !!}
                @include(ADMIN_VIEW. 'categories.form', ['routeName'=> 'admincpp.postAddCategory', 'routeParam'=>'']);
            </div>
        </div>
    </div
@stop