@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'admincpp.getListSuggestSearch' => 'Danh sách',--}}
        {{--'admincpp.getAddSuggestSearch'  => 'Thêm mới',--}}
    {{--]) !!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Thêm mới') !!}
                @include(ADMIN_VIEW . 'suggest_searchs.form', [
                    'routeName'  => 'admincpp.postAddSuggestSearch',
                    'routeParam' => ''
                ])
            </div>
        </div>
    </div>
@stop