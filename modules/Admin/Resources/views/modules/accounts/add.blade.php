@extends('admin::layouts.master')
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
                @include(ADMIN_VIEW. 'accounts.form',['routeName'=> 'admincpp.postAddAccount', 'routeParam'=> ''])
            </div>
        </div>
    </div
@stop