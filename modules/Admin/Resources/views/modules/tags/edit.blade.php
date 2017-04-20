@extends('admin::layouts.master_tab')
@section('content')
{{--{!! bread_crumb([--}}
        {{--'admincpp.getListTag'=> 'List tag',--}}
        {{--trans('admin:form.edit.title')--}}
    {{--])--}}
{{--!!}--}}
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            {!! box_title(trans('admin::form.edit.title')) !!}
            @include(ADMIN_VIEW. 'tags.form',['routeName'=> 'admincpp.postEditTag', 'routeParam'=> $tag->tag_id])
        </div>
    </div>
</div
@stop