@extends('admin::layouts.master')
@section('title', 'Add new account')
@section('content')
    {!! bread_crumb([
            'admincpp.getListAccount'=> 'List account',
            'Add account'
        ])
    !!}

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Add account') !!}
                {!! form_begin(['admincpp.postAddAccount']) !!}
                    @include(ADMIN_VIEW. 'accounts.form')
                {!! form_close() !!}
            </div>
        </div>
    </div
@stop