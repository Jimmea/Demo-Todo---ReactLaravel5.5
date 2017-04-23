@extends(MASTER_V1.'.layout_master')
@section('css')
<link rel="stylesheet" type="text/css" href="/css/main.css">
@stop
@section('content')
    <div class="container-content body-content">
        @include(USER_V1.'.incs.inc_profile_header_me')        
        <div class="ng-scope">
		    <ul class="profile-subnav"><li class="">
		            <a href="/cook/my/about-me/" data-spa="true" class="">About Me</a>
		        </li>
		        <li class="selected">
		            <a href="/cook/my/" data-spa="true" class="">Favorites</a>
		        </li>
		        <li class="">
		            <a href="/cook/my/findfriends/" data-spa="true" class="">Friends</a>
		        </li>
		        <li>
		            <a href="/cook/my/made-it/" data-spa="true">I Made It</a>
		        </li>
		        <li>
		            <a href="/cook/my/photos/" data-spa="true">My Photos</a>
		        </li>
		        <li>
		            <a href="/cook/my/reviews/" data-spa="true">My Reviews</a>
		        </li>
		        <li>
		            <a href="/cook/my/recipes/" data-spa="true">Personal Recipes</a>
		        </li>
		    </ul>
		</div>	
		@yield('user_content')     
    </div>
@stop