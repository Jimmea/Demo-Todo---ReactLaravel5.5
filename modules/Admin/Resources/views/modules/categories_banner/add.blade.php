@extends('admin::layouts.master')
@section('content')
{!! bread_crumb([
    "admincpp.getListCategory"                              => 'Danh sách danh mục',
    "admincpp.getListCategoryBanner|$category->cate_id"     => 'Danh sách danh mục banner',
    "admincpp.getAddCategoryBanner|$category->cate_id"      => 'Thêm mới'
]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {{ box_title('Thêm mới banner danh mục') }}
                @include('admin::modules.categories_banner.form', [
                        'routeName'=> 'admincpp.postAddCategoryBanner',
                        'routeParam'=> [$category->cate_id]
                    ])
            </div>
        </div>
    </div>
@stop