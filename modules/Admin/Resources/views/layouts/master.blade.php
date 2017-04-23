<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cook admin @yield('title')</title>
    <meta name="_token" id="meta_token" content="{{ csrf_token() }}">
    @include('admin::blocks.block_css')
    @yield('css')
    <script>
        var BASE_URL  = "{{ url('/admincpp') }}";
        var _token    = document.getElementById('meta_token').content;
    </script>
    @include('admin::blocks.block_js')
    <script src="{{ asset('backend/js/pages/library.js') }}"></script>
</head>
<body>
    <div id="wrapper">
        {{--@include('admin::blocks.block_navbartop')--}}
        @include('admin::blocks.block_sidebar')
        <div id="page-wrapper">
            <div class="container-fluid" id="layout-master">
                @include('admin::blocks.block_flash')
                @yield('content')
            </div>
        </div>
        @include('admin::blocks.block_footer')
    </div>
<<<<<<< HEAD
    @include('admin::blocks.block_js')
    <script src="{{ asset('backend/js/pages/library.js') }}"></script>
=======
    @yield('js')
>>>>>>> origin/dev
</body>
</html>
