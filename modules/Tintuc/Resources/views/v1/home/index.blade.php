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
            <a href="#">
                <div class="ad-mag-homeBtm__footer">
                    <div class="ad-mag-homeBtm__img-wrap">
                        <img class="ad-mag-homeBtm__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/ar-images/ads/ARMag-Winter2016.jpg" alt="Subscribe to Allrecipes Magazine" title="Allrecipes Magazine" src="http://images.media-allrecipes.com/ar/spacer.gif">
                    </div>
                    <div class="ad-mag-homeBtm__text-wrap">
                        <h4>Allrecipes Magazine</h4>
                        <p>Cook 5-star dinners every time—get a full year for just $7.99.</p>
                        <div id="btn" class="btn-basic--small btn-orange">Subscribe</div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </a>
        </section>
    </div>
@stop
