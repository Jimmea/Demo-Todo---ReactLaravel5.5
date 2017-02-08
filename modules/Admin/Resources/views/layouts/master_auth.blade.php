<!DOCTYPE html>
<html lang="vi
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="HUNG">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
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