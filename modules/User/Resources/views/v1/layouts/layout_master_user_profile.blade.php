@extends(MASTER_V1.'.layout_master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/main.css">
@stop
@section('content')
    <div class="container-content body-content">
        @include(USER_V1.'.incs.inc_profile_header_me')               		
		@yield('user_content')     
    </div>
@stop