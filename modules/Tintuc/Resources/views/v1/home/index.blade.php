@extends(MASTER_V1.'.layout_master')
@section('seo')

@stop
@section('content')
    <div class="container-content body-content">
        <section id="ar_home_index" class="home-page full-page ng-scope">
            @include(NEW_V1. '.incs.inc_slider')
            <div class="home-page__header">
                <h1 class="heading__h1 desktop">Welcome! Here are recommendations for you.</h1>
                <h1 class="heading__h1 mobile">Recommendations for You</h1>
            </div>
            @include(NEW_V1 . '.incs.inc_post_grid')
            <div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
        </section>
    </div>
@stop
