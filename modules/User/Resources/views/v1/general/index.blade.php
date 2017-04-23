@extends(MASTER_USER_V1.'.layout_master_user')
@section('seo')
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/myrecipe-user.css') }}">
@stop
@section('user_content')
<div class="profile-wrapper ng-scope" style="padding-bottom:0">
    <div class="collections-subnav ng-scope">
        <ul class="profile-top-toolbar">
            <li class="profile-top-toolbar--buttons"> <a href="/cook/hunts/collections/" data-spa="true" class="btns-two-small">Collections</a> <a href="/cook/hunts/favorites/" data-spa="true" class="btns-two-small selected" disabled>Recipes</a> </li>
            <li class="profile-top-toolbar--nav">
                <ul id="0207182b-4b93-471f-ae6a-2e475bea7da0">
                    <li> <a class="toggle-similar view light" data-on="sortType"> <span class="ng-scope">Newest</span>    <span class="icon--chevron-down"></span> </a> </li>
                </ul>
                <ul class="sort-nav ng-hide" id="sort-results" data-on="pageType">
                    <li class="ng-scope selected"><a>Newest</a></li>
                    <li class="ng-scope"><a>Rating</a></li>
                    <li class="ng-scope"><a>Title</a></li>
                </ul>
            </li>
        </ul>
        <div class="">
            @include(NEW_V1.'.incs.inc_post_grid')
            <div class="recipe-box__more"> 
                <button class="btns-one-small--bottom-margin" id="recipeBoxMoreBtn">
                    More
                </button> 
            </div>
        </div>
        <div class="profile-empty-grid ng-hide">
            <div> <span class="empty-page-header">This cook hasn’t saved any recipes yet</span><br><span class="empty-description"> Maybe they’re memorizing them all? </span> </div>
            <div class="ng-hide"> <span class="empty-page-header">This cook hasn’t created any collections yet</span><br><span class="empty-description"> Organize your recipes and get inspired with collections. </span> </div>
        </div>
        <div id="msg-toolbar" class="notification hidden"><span class="notification__message"></span></div>
    </div>
</div>
@stop
@section('javascript')
    <script>
        $(function () {
            $('.btn-profile-friends-tab').click(function (e) {
                e.preventDefault();
                var $this = $(this);
                var tab = $this.data('tab');
                $('.btn-profile-friends-tab').removeClass('selected');
                $('.profile-friends-content').hide();
                if ($('.cook--' + tab).is(':hidden')) {
                    $('.cook--' + tab).show();
                    $this.addClass('selected');
                }
            });

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

            $('.extole-tab').click(function () {
                var $this = $(this);
                var tab = $this.data('tab');
                $('.extole-tab').removeClass('extole-js-widget-panel-button-active');
                $('.extole-widget-panel').hide();
                if ($(".extole-js-panel-view-" + tab).is(':hidden')) {
                    $this.addClass('extole-js-widget-panel-button-active');
                    $(".extole-js-panel-view-" + tab).show();
                }
            })
        })
    </script>
@stop
