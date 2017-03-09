@extends('admin::layouts.master')
@section('content')
{!! bread_crumb([
    'admincpp.getListSuggestKeyword' => 'Danh sách keyword suggest',
    'admincpp.getAddSuggestKeyword' => 'Thêm từ khóa',
]) !!}
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            {!! box_title('Thêm mới từ khóa') !!}
            @include(ADMIN_VIEW . 'suggest_keywords.form', [
                'routeName'  => 'admincpp.postAddSuggestKeyword',
                'routeParam' => ''
            ])
        </div>
    </div>
</div>
@stop