@extends(MASTER_V1.'.layout_master')

@section('content')
    <div class="container-content body-content">
        <section class="profile-header" style="background:url(http://images.media-allrecipes.com/ar-images/profiles/covers/mexican-food-header.jpg) no-repeat"  >
            <div>
                <ul class="cook-details">
                    <li>
                        <a href="" target="_self">
                            <img class="img-profile" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png">
                        </a>
                    </li>
                    <li class="header-display-name">
                        <h4 class="light">Truong Xuan Bui</h4>
                        <ul>
                            <li>
                                <span class="icon--cook-card-follower-white" title="Số lượt theo dõi"></span>
                                <span>Số lượt theo dõi</span>
                            </li>
                            <li>
                                <span>Theo dõi <strong>0</strong></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="icon--cook-card-favorite" title="Bài viết ưu thích"></span>
                                <span>Bài viết ưu thích</span>
                            </li>
                            <li>
                                <span>Ưu thích <strong>0</strong></span>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="icon--cook-card-made" title="Công thức tôi làm"></span>
                                <span>Công thức tôi đã làm</span>
                            </li>
                            <li>
                                <span>Đã đăng <strong>0</strong></span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="profile-actions-menu"  class="profile-header__settings">
                <span class="icon--gear--profile profile"></span>
                <ul class="profile-header__settings nav-tab ng-hide">
                    <li><a href="/cook/my/profile-settings/?tab=editProfile" target="_self">Edit profile</a></li>
                    <li><a href="http://allrecipes.com/cook/21311124/" target="_self">See public profile</a></li>
                    <li><a href="/cook/my/profile-settings/?tab=tastePrefs" target="_self">Taste Preferences</a></li>
                    <li><a href="/cook/my/account-settings/" target="_self">Account settings</a></li>
                </ul>
            </div>
            <div class="private-notification--settings ng-hide">
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
        <div class="private-profile-nav">
            <ul class="profile-subnav">
                <li class="selected">
                    <a href="#profile-general-content" class="profile-general-tab"> Tổng quan</a>
                </li>
                <li>
                    <a href="#profile-fastfood-content" class="profile-general-tab"> Bán đồ ăn</a>
                </li>
                <li>
                    <a href="#profile-favorite-content" class="profile-general-tab"> Favorites</a>
                </li>
                <li>
                    <a href="#profile-follow-content" class="profile-general-tab"> Follow</a>
                </li>
                <li>
                    <a href="#profile-about-content" class="profile-general-tab"> About</a>
                </li>
            </ul>
        </div>
        @yield('user_content')
    </div>
@stop