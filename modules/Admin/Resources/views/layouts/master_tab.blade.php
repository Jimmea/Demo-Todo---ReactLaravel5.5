<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" id="meta_token" content="{{ csrf_token() }}">
        @include('admin::blocks.block_css')
        @yield('css')
        <script>
            var BASE_URL  = "{{ url('/admincpp') }}";
            var _token    = document.getElementById('meta_token').content;
        </script>
    </head>
    <body>
        <div id="wrapper" class="wrapper-use-tab">
            @yield('content')
        </div>
        @include('admin::blocks.block_js')
        @yield('js')
    </body>
</html>
