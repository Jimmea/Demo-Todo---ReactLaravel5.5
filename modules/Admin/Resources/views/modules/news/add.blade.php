@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'admincpp.getListNew' => trans('admin::listing.title'),
        trans('admin::form.add.title')
    ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::form.add.title')) !!}
                @include(ADMIN_VIEW . 'news.form', ['routeName'=> 'admincpp.postAddNew', 'routeParam'=> ''])
            </div>
        </div>
    </div>
@stop