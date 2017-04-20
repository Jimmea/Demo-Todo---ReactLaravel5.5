@extends(MASTER_V1.'.layout_master')
@section('content')
    <div class="container-content body-content">
        @include(USER_V1.'.incs.inc_profile_header')        
        <div class="profile-shell full-page">
            <div class="grid-profile-card">            
                @include(USER_V1.'.incs.inc_profile_subnav')    
                @yield('user_content')
            </div>
            @include(USER_V1.'.incs.inc_profile_leftbar')
        </div>
    </div>
@stop