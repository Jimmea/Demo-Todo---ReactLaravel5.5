@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'admincpp.getListCategory'          => 'Danh sách danh mục',--}}
        {{--"admincpp.getListCategoryTabAction|$category->cate_id" => 'Danh sách danh mục tab',--}}
        {{--"admincpp.getEditCategoryTabAction|$category->cate_id*$cta_id" => 'Cập nhật'--}}
    {{--]) !!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Cập nhật') !!}
                @include(ADMIN_VIEW . 'categories_tabactions.form', [
                     'routeName'  => 'admincpp.postEditCategoryTabAction',
                     'routeParam' => [$category->cate_id,$cta_id]
                ])
            </div>
        </div>
    </div>
@stop