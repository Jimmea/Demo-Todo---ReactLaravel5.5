@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'admincpp.getListCategory'          => 'Danh sách danh mục',
        "admincpp.getListCategoryTabAction|$category->cate_id" => 'Danh sách danh mục tab',
        "admincpp.getAddCategoryTabAction|$category->cate_id" => 'Thêm mới'
    ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Thêm mới') !!}
                @include(ADMIN_VIEW . 'categories_tabactions.form', [
                     'routeName'  => 'admincpp.postAddCategoryTabAction',
                     'routeParam' => [$category->cate_id]
                ])
            </div>
        </div>
    </div>
@stop