@extends(MASTER_USER_V1.'.layout_master_user_full')
@section('user_content')
	<div class="profile-wrapper full-page ng-scope">
    <div class="ng-scope">
        <div class="ng-scope">
            <div class="social-profile">
                <ul class="about-me">
                    <li class="about-me--tagline ng-binding">this si the friend</li>
                    <li>
                        <h4>About me</h4>
                    </li>
                    <li class="about-me--description ng-binding ng-hide"> 
                    <li class="about-me--description empty"><a href="/cook/my/profile-settings/" target="_self">Tell us about yourself</a></li>
                    <li>
                        <h4>My location</h4>
                    </li>
                    <li class="about-me--location ng-binding">Luhansk Oblast</li>
                    <li class="about-me--location empty"><a href="/cook/my/profile-settings/" target="_self">Add your location</a></li>
                    <li>
                        <h4>Connect with me</h4>
                    </li>
                    <li class="about-me--connect"> <a id="public_profile_link" title="Profile" alt="Profile" target="_self" class="ng-binding" href="/cook/billcky">allrecipes.com/cook/billcky</a> </li>
                    <li class="about-me--connect empty ng-hide"> <a href="/cook/my/profile-settings/" target="_self">Share your Allrecipes profile, create a personal URL!</a> </li>
                    <li class="about-me--connect ng-hide"> <a title="Blog" alt="Blog" rel="nofollow" target="_self" class="ng-binding"></a> </li>
                </ul>
                <ul class="social-networks">
                    <li class="ng-hide"><a id="profile_pinterest" title="Pinterest" rel="nofollow" target="_blank"><img title="Pinterest" src="https://secureimages.allrecipes.com/ar-images/spacer.gif" alt="Pinterest"></a></li>
                    <li class="ng-hide"><a id="profile_facebook" title="Facebook" rel="nofollow" target="_blank"><img title="Facebook" src="https://secureimages.allrecipes.com/ar-images/spacer.gif" alt="Facebook"></a></li>
                    <li class="ng-hide"><a id="profile_twitter" title="Twitter" rel="nofollow" target="_blank"><img title="Twitter" src="https://secureimages.allrecipes.com/ar-images/spacer.gif" alt="Twitter"></a></li>
                    <li class="ng-hide"><a id="profile_googlePlus" title="Google Plus" rel="nofollow" target="_blank"><img title="Google Plus" src="https://secureimages.allrecipes.com/ar-images/spacer.gif" alt="Google Plus"></a></li>
                </ul>
                <a class="btns-one-small" href="/cook/my/profile-settings/" target="_self">Edit public profile</a> 
            </div>
        </div>
    </div>
</div>
@stop
