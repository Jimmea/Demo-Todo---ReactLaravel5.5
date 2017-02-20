<!DOCTYPE html>
<html lang="vi
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
        <style>
            .login-register {
                background: url('/imgs/login.jpg') center center/cover no-repeat!important;
                height: 100%;
                position: fixed;
            }
        </style>
    </head>
    <body>
        <section id="wrapper" class="login-register">
            <div class="login-box">
                <div class="white-box">
                    @yield('content')
                </div>
            </div>
        </section>
        <script src="{{ asset('backend/js/plugins/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>