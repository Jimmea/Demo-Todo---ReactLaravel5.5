@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
           {{--'admincpp.getListBanner'=> trans('admin::listing.title'),--}}
           {{--trans('admin::form.add.title')--}}
       {{--])--}}
   {{--!!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::form.add.title'), false) !!}
                @include('admin::modules.banners.form', ['routeName'=> 'admincpp.postAddBanner', 'routeParam'=> ''])
            </div>
        </div>
    </div>
@stop
