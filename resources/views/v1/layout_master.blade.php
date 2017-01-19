<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{-- section head common--}}
        @include(MASTER_V1 . '.blocks.block_head')

        {{-- section css--}}
        @include(MASTER_V1 . '.blocks.block_css')

    </head>
    <body>

        {{-- section header--}}
        @include(MASTER_V1 . '.blocks.block_header')

        {{-- section content--}}
        @yield('content')

        {{-- section footer--}}
        @include(MASTER_V1 . '.blocks.block_footer')

        {{-- section javascript--}}
        @include(MASTER_V1 . '.blocks.block_javascript')

        {{-- section javascript expand --}}
        @yield('javascript')

    </body>
</html>
