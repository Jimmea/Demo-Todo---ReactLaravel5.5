@extends('admin::layouts.master')
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
                @include(ADMIN_VIEW. 'menus.form', ['routeName'=> 'admincpp.postAddMenu', 'id' => false])
            </div>
        </div>
    </div
@stop