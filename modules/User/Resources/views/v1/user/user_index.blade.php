@extends(MASTER_USER_V1.'.layout_master_user')  
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