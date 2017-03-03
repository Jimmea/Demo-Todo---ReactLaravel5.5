@extends('admin::layouts.master')
@section('content')
{!! bread_crumb([
        'admincpp.getListTag'=> 'List tag',
        trans('admin::form.add.title')
    ])
!!}
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            {!! box_title(trans('admin::form.add.title')) !!}
            @include(ADMIN_VIEW. 'tags.form',['routeName'=> 'admincpp.postAddTag', 'routeParam'=> ''])
        </div>
    </div>
</div
@stop