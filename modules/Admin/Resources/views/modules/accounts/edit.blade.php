@extends('admin::layouts.master')
@section('title', 'Edit account')
@section('content')
    {!! bread_crumb([
            'admincpp.getListAccount'=> 'List account',
            'Edit account'
        ])
    !!}

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Edit account') !!}
                {!! form_begin(['admincpp.posteditAccount',$admin->adm_id]) !!}
                    @include(ADMIN_VIEW. 'accounts.form')
                {!! form_close() !!}
            </div>
        </div>
    </div
@stop