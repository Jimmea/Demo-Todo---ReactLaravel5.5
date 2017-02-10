@extends('admin::layouts.master')
@section('title', trans('admin::category.add.title'))
@section('content')
    {!! bread_crumb([
            'admincpp.getListCategory'=> trans('admin::category.list.title'),
            trans('admin::category.add.title')
        ])
    !!}

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::category.add.title')) !!}
                {!! form_begin(['admincpp.postAddCategory']) !!}
                    @include(ADMIN_VIEW. 'categories.form')
                {!! form_close() !!}
            </div>
        </div>
    </div
@stop