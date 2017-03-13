@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        "admincpp.getListCategory"  => 'Danh sách danh mục',
        "admincpp.getListCategoryBanner|$category->cate_id" => 'Danh sách danh mục banner',
        "admincpp.getEditCategoryBanner|$category->cate_id*$categoryBanner->cab_id" => 'Cập nhật'
    ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {{ box_title('Cập nhật') }}
                @include('admin::modules.categories_banner.form', [
                        'routeName'=> 'admincpp.postEditCategoryBanner',
                        'routeParam'=> [$category->cate_id, $categoryBanner->cab_id]
                    ])
            </div>
        </div>
    </div>
@stop