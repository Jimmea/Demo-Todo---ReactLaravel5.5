@extends('admin::layouts.master')
@section('title', trans('admin::menu.add.title'))
@section('content')
    {!! bread_crumb([
            'adminpp.getListMenu'=> trans('admin::menu.list.title'),
            trans('admin::menu.add.title')
        ])
    !!}


    <div class="row">
            <div class="col-md-12">

            <div class="white-box">
                {!! box_title(trans('admin::menu.add.title')) !!}
                {!! form_begin(['admincpp.postAddMenu']) !!}
                    @include(ADMIN_VIEW. 'menus.form')
                {!! form_close() !!}
            </div>


        </div>
    </div
@stop