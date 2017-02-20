@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'admincpp.getListConfigAdmin' => trans('admin::configadmin.list.title'),
        trans('admin::configadmin.add.title')
    ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::configadmin.add.title')) !!}
                @include(ADMIN_VIEW . 'configadmin.form', ['nameRoute'=> 'admincpp.postAddConfigAdmin', 'paramRoute' => '']);
            </div>
        </div>
    </div>
@stop