@extends(MASTER_V1.'.layout_master_user')
@section('seo')
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@stop
@section('user_content')
    <div class="profile-wrapper full-page">
        <div id="profile-general-content" class="content-general">
            <div class="profile-friends">
                <ul class="cook-card-subnav">
                    <li>
                        <a class="btns-two-small" href="">
                            Mới chia sẻ
                        </a>
                        <a class="btns-two-small" href="">
                            Nhiều lượt xem
                        </a>
                        <a class="btns-two-small" href="">
                            Nhiều ưu thích
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <section class="grid grid-fixed cards">
                    @for($i=1; $i <=4; $i++)
                        <article class="grid-col grid-col--fixed-tiles">
                            <div class="inner-grid">
                                <ul class="collection-card">
                                    <a target="_self" href="">
                                        <li class="collections-card-images">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                        </li>
                                        <li class="collection-text">
                                            <h3>Desserts</h3>
                                            <h4>0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="">
                                    <ul class="cook-details">
                                        <li>
                                            <img class="img-profile elevate-cook-thumbnail ng-isolate-scope"
                                                 alt="profile image" data-lazy-load=""
                                                 src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png">
                                        </li>
                                        <li>
                                            <h4><span>Viết bởi </span> <span>Bill Jany</span></h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li><span class="icon icon--cook-card-follower"
                                                          title="My Followers"></span> <span></span></li>
                                                <li><span>0</span></li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li><span class="icon icon--cook-card-favorite"
                                                          title="My Favorites"></span> <span></span></li>
                                                <li><span">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li><span class="icon icon--cook-card-made"
                                                          title="Recipes I’ve Made"></span> <span></span></li>
                                                <li><span>0</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </article>
                    @endfor
                </section>

                <div class="recipe-box__more">
                    <button class="btns-one-small--bottom-margin ng-hide" id="recipeBoxMoreBtn">More</button>
                </div>
            </div>
        </div>
        <div id="profile-fastfood-content" class="content-general hidden">
            <div class="profile-friends">
                <ul class="cook-card-subnav">
                    <li>
                        <a class="btns-two-small" href="">
                            Đồ ăn nhanh
                        </a>
                        <a class="btns-two-small" href="">
                            Nhiều người mua
                        </a>
                        <a class="btns-two-small" href="">
                            Đánh giá tốt
                        </a>
                        <a class="btns-two-small" href="">
                            Đồ ăn về đêm
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <section class="grid grid-fixed cards">
                    @for($i=1; $i <=4; $i++)
                        <article class="grid-col grid-col--fixed-tiles">
                            <div class="inner-grid">
                                <ul class="collection-card">
                                    <a target="_self" href="">
                                        <li class="collections-card-images">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                        </li>
                                        <li class="collection-text">
                                            <h3>Desserts</h3>
                                            <h4>0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="">
                                    <ul class="cook-details">
                                        <li>
                                            <img class="img-profile elevate-cook-thumbnail ng-isolate-scope"
                                                 alt="profile image" data-lazy-load=""
                                                 src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png">
                                        </li>
                                        <li>
                                            <h4><span>Viết bởi </span> <span>Bill Jany</span></h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li><span class="icon icon--cook-card-follower"
                                                          title="My Followers"></span> <span></span></li>
                                                <li><span>0</span></li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li><span class="icon icon--cook-card-favorite"
                                                          title="My Favorites"></span> <span></span></li>
                                                <li><span">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li><span class="icon icon--cook-card-made"
                                                          title="Recipes I’ve Made"></span> <span></span></li>
                                                <li><span>0</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </article>
                    @endfor
                </section>

                <div class="recipe-box__more">
                    <button class="btns-one-small--bottom-margin ng-hide" id="recipeBoxMoreBtn">More</button>
                </div>
            </div>
        </div>
        <div id="profile-favorite-content" class="content-general hidden">
            <div class="profile-friends">
                <ul class="cook-card-subnav">
                    <li>
                        <a class="btns-two-small" href="">
                            Hôm nay
                        </a>
                        <a class="btns-two-small" href="">
                            Trong tuần
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <section class="grid grid-fixed cards">
                    @for($i=1; $i <=4; $i++)
                        <article class="grid-col grid-col--fixed-tiles">
                            <div class="inner-grid">
                                <ul class="collection-card">
                                    <a target="_self" href="">
                                        <li class="collections-card-images">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                            <img src="data:image/png;base64,=">
                                        </li>
                                        <li class="collection-text">
                                            <h3>Desserts</h3>
                                            <h4>0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="">
                                    <ul class="cook-details">
                                        <li>
                                            <img class="img-profile elevate-cook-thumbnail ng-isolate-scope"
                                                 alt="profile image" data-lazy-load=""
                                                 src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png">
                                        </li>
                                        <li>
                                            <h4><span>Viết bởi </span> <span>Bill Jany</span></h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li><span class="icon icon--cook-card-follower"
                                                          title="My Followers"></span> <span></span></li>
                                                <li><span>0</span></li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li><span class="icon icon--cook-card-favorite"
                                                          title="My Favorites"></span> <span></span></li>
                                                <li><span">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li><span class="icon icon--cook-card-made"
                                                          title="Recipes I’ve Made"></span> <span></span></li>
                                                <li><span>0</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </article>
                    @endfor
                </section>

                <div class="recipe-box__more">
                    <button class="btns-one-small--bottom-margin ng-hide" id="recipeBoxMoreBtn">More</button>
                </div>
            </div>
        </div>
        <div id="profile-follow-content" class="content-general hidden">
            <div class="cook--friends">
                <span class="empty-description friend-finder"> <span class="icon--ar-bug"></span>
                    <span>Suggested cooks to follow</span>
                    <span id="selectCooks" class="icon--chevron-down"></span>
                </span>
                <div class="cook--friends__masonry-wrap">
                    <div class="suggested-cooks__inner-wrap">
                        <div class="suggested-cooks ">
                            <img class="" src="">
                            <aside class="grid grid-fixed like-cooks">
                                <div>
                                    @for($i=1; $i<=8; $i++)
                                        <article class="grid-col grid-col--fixed-tiles cook-tile">
                                            <div>
                                                <div class="">
                                                    <a>
                                                        <img class="grid-col__rec-image ng-isolate-scope "
                                                             style="display: inline;"
                                                             src="http://images.media-allrecipes.com/userphotos/250x250/4171609.jpg">
                                                        <h3 class="grid-col__h3 grid-col__h3--recipe-grid  "> Green
                                                            Giant </h3>
                                                        <h4 class=" "></h4>
                                                    </a>
                                                    <a href="" class="grid-col__header-text phone-size "></a>
                                                    <div class="profile profile--recipe-card">
                                                        <span class="svg-icon--cook-card--follow svg-icon--cook-card--follow-dims"></span>
                                                        <a title="Follow this cook"
                                                           class="favorite btns-one-small ng-isolate-scope">
                                                            <span class=""></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endfor
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="invite-cooks cook-invitation">

                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')
    <script>
        $(function () {
            $('.profile-general-tab').click(function () {
                var content = $(this).attr('href');
                $('.content-general').addClass('hidden');
                $('.profile-subnav li').removeClass('selected');

                if ($(content).is(':hidden')) {
                    $(this).parent('li').addClass('selected');
                    $(content).removeClass('hidden');
                }
                return false;
            });
        })
    </script>
@stop
