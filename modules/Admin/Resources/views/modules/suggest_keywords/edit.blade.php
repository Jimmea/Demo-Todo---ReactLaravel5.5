@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'admincpp.getListSuggestKeyword' => 'Danh sách keyword suggest',--}}
        {{--'Cập nhật từ khóa',--}}
    {{--]) !!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Thêm mới từ khóa') !!}
                @include(ADMIN_VIEW . 'suggest_keywords.form', [
                    'routeName'  => 'admincpp.postEditSuggestKeyword',
                    'routeParam' => $suggestKeyword->suk_id
                ])
            </div>
        </div>
    </div>
@stop