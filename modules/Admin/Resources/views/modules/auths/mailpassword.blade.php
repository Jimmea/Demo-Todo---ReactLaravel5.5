@extends('admin::layouts.master_auth')
@section('title', 'Send mail forget password')
@section('content')
    <form class="form-horizontal form-material" id="loginform" action="{{ route('staff.postLogin') }}">
        <h3 class="box-title m-b-20">Forget password </h3> <span class="help-block">We will send you a password recovery email.</span>

        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" placeholder="Your email">
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-sm btn-block text-uppercase waves-effect waves-light" type="submit">Send link reset</button>
                <a href="{{ route('staff.getLogin') }}" class="btn btn-info btn-sm btn-block text-uppercase waves-effect waves-light">Back to sign in</a>
            </div>
        </div>
    </form>
@stop
