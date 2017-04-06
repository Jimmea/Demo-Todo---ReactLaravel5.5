<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @include(MASTER_V1 . '.blocks.block_head')    
        @yield('seo')
        @include(MASTER_V1 . '.blocks.block_css')
        @yield('css')
    </head>
    <body>
        @include(MASTER_V1 . '.blocks.begin')    
        @include(MASTER_V1 . '.blocks.block_header')
        @yield('content')
        @include(MASTER_V1 . '.blocks.block_footer')
        @include(MASTER_V1 . '.blocks.close')
        @include(MASTER_V1 . '.blocks.block_javascript')
        @yield('javascript')
    </body>
</html>
