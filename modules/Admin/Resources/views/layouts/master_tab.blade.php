<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('admin::blocks.block_css')
        @yield('css')
    </head>
    <body>
        <div id="wrapper" class="wrapper-use-tab">
            @yield('content')
        </div>
        @include('admin::blocks.block_js')
        <script src="{{ asset('backend/js/pages/library.js') }}"></script>
        @yield('js')
    </body>
</html>
