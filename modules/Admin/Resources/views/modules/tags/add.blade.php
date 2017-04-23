@extends('admin::layouts.master_tab')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            {!! box_title(trans('admin::form.add.title')) !!}
            @include(ADMIN_VIEW. 'tags.form',['routeName'=> 'admincpp.postAddTag', 'routeParam'=> ''])
        </div>
    </div>
</div
@stop