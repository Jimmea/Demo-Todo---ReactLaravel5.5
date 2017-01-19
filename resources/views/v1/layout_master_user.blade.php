@extends(MASTER_V1.'.layout_master')

@section('content')
    <div class="container-content body-content">
        <section class="profile-header" style="background:url(http://images.media-allrecipes.com/ar-images/profiles/covers/mexican-food-header.jpg) no-repeat" ng-show="displayCoverPhotoSection" profile-toggle-display="">
            <div data-ng-controller="ar_controllers_profileHeader" data-ng-init="init(21311124);" class="ng-scope">
                <ul class="cook-details">
                    <li>
                        <a href="/cook/my/" target="_self">
                            <img class="img-profile" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png">
                        </a>
                    </li>
                    <li class="header-display-name">
                        <h4 class="light">Truong Xuan Bui</h4>
                        <ul>
                            <li>
                                <span class="icon--cook-card-follower-white" title="My Followers"></span>
                                <span>Followers</span>
                            </li>
                            <li>
                                <span ng-bind="::(user.FollowersCount > 0 ? (user.FollowersCount | largeNumberDisplay) : 0)" class="ng-binding">0</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="icon--cook-card-favorite" title="My Favorites"></span>
                                <span>Favorites</span>
                            </li>
                            <li>
                                <span ng-bind="user.FavoriteCount > 0 ? (user.FavoriteCount | largeNumberDisplay) : 0" class="ng-binding">0</span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="icon--cook-card-made" title="Recipes I've Made"></span>
                                <span>Recipes Made</span>
                            </li>
                            <li>
                                <span ng-bind="::(user.MadeRecipesCount > 0 ? (user.MadeRecipesCount | largeNumberDisplay) : 0)" class="ng-binding">0</span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="profile-actions-menu" ng-controller="ar_controllers_profile_gear" class="profile-header__settings ng-scope" data-ng-init="init('/cook/21311124/')">
                <span class="icon--gear--profile profile" popup-trigger="profileOptions" ng-click="removeProfileNotification()" id="c0b5960e-fe9d-4038-a4b4-f475be92df4d"></span>
                <ul ng-class="'profile-header__settings nav-tab'" popup-panel="profileOptions" class="profile-header__settings nav-tab ng-hide" id="5c40fae9-ed12-4e70-8787-793efb399258">
                    <li><a href="/cook/my/profile-settings/?tab=editProfile" target="_self">Edit profile</a></li>
                    <li><a href="http://allrecipes.com/cook/21311124/" target="_self">See public profile</a></li>
                    <li><a href="/cook/my/profile-settings/?tab=tastePrefs" target="_self">Taste Preferences</a></li>
                    <li><a href="/cook/my/account-settings/" target="_self">Account settings</a></li>
                </ul>
            </div>
            <div ng-controller="ar_controllers_profile_notification" class="private-notification--settings ng-scope ng-hide" data-ng-hide="hideFollowNotification" ng-init="init('PrivateProfileNotification')">
                <div class="lo-message-box">
                    <div class="lo-msg-arrow-up"></div>
                    <div class="lo-message-box__box">
                        <div class="lo-message-box__title">
                            <span>GIVE 'EM A TASTE OF YOUR PERSONALITY</span>
                            <span class="icon--close" ng-click="closeNotification()"></span>
                        </div>
                        <div class="lo-message-box__text">Change your profile pic, about me, or account settings.</div>
                    </div>
                </div>
            </div>
        </section>
        <div data-ng-controller="ar_controllers_private_profile_nav" data-ng-init="init()" class="ng-scope">
            <ul class="profile-subnav">
                <li class="{{ $page_type == 'about' ? 'selected' : '' }}">
                    <a href="{{ route('user::about') }}">About Me</a>
                </li>
                <li class="{{ $page_type == 'collection' ? 'selected' : '' }}">
                    <a href="{{ route('user::collection') }}">Favorites</a>
                </li>
                <li class="{{ $page_type == 'friend' ? 'selected' : '' }}">
                    <a href="{{ route('user::friend') }}">Friends</a>
                </li>
                <li class="{{ $page_type == 'made' ? 'selected' : '' }}">
                    <a href="{{ route('user::made') }}">I Made It</a>
                </li>
                <li class="{{ $page_type == 'photo' ? 'selected' : '' }}">
                    <a href="{{ route('user::photo') }}">My Photos</a>
                </li>
                <li class="{{ $page_type == 'review' ? 'selected' : '' }}">
                    <a href="{{ route('user::review') }}">My Reviews</a>
                </li>
                <li class="{{ $page_type == 'recipe' ? 'selected' : '' }}">
                    <a href="{{ route('user::recipe') }}">Personal Recipes</a>
                </li>
            </ul>
        </div>
        @yield('user_content')
    </div>
@stop