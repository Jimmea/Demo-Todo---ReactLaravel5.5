@extends('auth_admins.layout_auth_admin')
@section('content')
    <form class="form-horizontal" id="loginform" action="{{ route('staff.postLogin') }}" method="post">
        {{ csrf_field() }}
        <h3 class="box-title m-b-20 text-center">Đăng nhập hệ thống</h3>
        <div class="form-group {{ has_error($errors, 'login_name') }}">
            <div class="col-xs-12">
                <input class="form-control" required name="login_name" type="text" placeholder="Username">
                {!! get_error($errors, 'login_name') !!}
            </div>
        </div>
        <div class="form-group {{ has_error($errors, 'login_password') }}">
            <div class="col-xs-12">
                <input class="form-control" required name="login_password" type="text" placeholder="Password">
                {!! get_error($errors, 'login_password') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox checkbox-primary pull-left p-t-0">
                    <input id="checkbox-signup" type="checkbox" name="remember">
                    <label for="checkbox-signup"> Nhớ tài khoản </label>
                </div>
                <a href="{{ route('staff.getResetPassword') }}" id="to-recover" class="text-dark pull-right">
                    <i class="fa fa-lock m-r-5"></i> Quên mật khẩu ?
                </a>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">SIgn In</button>
            </div>
        </div>
    </form>
@stop
