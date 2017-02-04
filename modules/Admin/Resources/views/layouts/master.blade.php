<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cook admin - @yield('title')</title>
    @include('admin::blocks.block_css')
    @yield('css')
    @yield('js')
</head>
<body>
    <div id="wrapper">
        @include('admin::blocks.block_navbartop')
        @include('admin::blocks.block_sidebar')
        <div id="page-wrapper">
            <div class="container-fluid" id="layout-master">
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin::blocks.block_js')
    <script src="{{ asset('backend/js/pages/library.js') }}"></script>
</body>
</html>
