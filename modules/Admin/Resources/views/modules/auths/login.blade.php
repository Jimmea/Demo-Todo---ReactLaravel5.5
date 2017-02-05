@extends('admin::layouts.master_auth')
@section('title', 'System login')
@section('content')
    <form class="form-horizontal form-material" id="loginform" action="{{ route('staff.postLogin') }}">
        <h3 class="box-title m-b-20">System login</h3>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox checkbox-primary pull-left p-t-0">
                    <input id="checkbox-signup" type="checkbox" name="remember">
                    <label for="checkbox-signup"> Remember me </label>
                </div>
                <a href="{{ route('staff.getResetPassword') }}" id="to-recover" class="text-dark pull-right">
                    <i class="fa fa-lock m-r-5"></i> Forgot password ?
                </a>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign In</button>
            </div>
        </div>
    </form>
@stop
