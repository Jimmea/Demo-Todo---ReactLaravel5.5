@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'admincpp.getListSuggestKeyword' => 'Danh sách',--}}
        {{--'Cập nhật',--}}
    {{--]) !!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Cập nhật') !!}
                @include(ADMIN_VIEW . 'suggest_searchs.form', [
                    'routeName'  => 'admincpp.postEditSuggestSearch',
                    'routeParam' => $suggestSearch->sus_id
                ])
            </div>
        </div>
    </div>
@stop