@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
            {{--'admincpp.getListAccount'=> 'List account',--}}
            {{--'Edit account'--}}
        {{--])--}}
    {{--!!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Edit account') !!}
                @include(ADMIN_VIEW. 'accounts.form', ['routeName'=> 'admincpp.posteditAccount', 'routeParam'=> $admin->adm_id])
            </div>
        </div>
    </div
@stop