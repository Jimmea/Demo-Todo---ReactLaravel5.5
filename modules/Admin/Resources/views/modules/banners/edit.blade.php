@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
           'admincpp.getListBanner'=> trans('admin::listing.title'),
           trans('admin::form.edit.title')
       ])
   !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::form.edit.title'), false) !!}
                @include('admin::modules.banners.form', ['routeName'=> 'admincpp.postEditBanner', 'routeParam'=> $banner->ban_id])
            </div>
        </div>
    </div>
@stop
