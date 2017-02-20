@extends(VIEW_FRONTEND_ACCOUNT)

@section('account_content')
<div data-ng-view="" class="profile-wrapper full-page ng-scope">
	<div data-ng-init="init()" class="ng-scope">
		<div ng-controller="ar_profile_social_private" class="ng-scope">
			<div class="social-profile">
				<ul class="about-me">
					<li class="about-me--tagline ng-binding" data-ng-bind-html="userProfile.Tagline"></li>
					<li>
						<h4>About me</h4>
					</li>
					<li data-ng-show="userProfile.AboutMe" class="about-me--description ng-binding ng-hide" data-ng-bind-html="userProfile.AboutMe"></li>
					<li data-ng-hide="userProfile.aboutMe" class="about-me--description empty"><a href="/cook/my/profile-settings/" target="_self">Tell us about yourself</a></li>
					<li>
						<h4>My location</h4>
					</li>
					<li data-ng-show="userProfile.LocationString" class="about-me--location ng-binding ng-hide"></li>
					<li data-ng-hide="userProfile.locationString" class="about-me--location empty"><a href="/cook/my/profile-settings/" target="_self">Add your location</a></li>
					<li>
						<h4>Connect with me</h4>
					</li>
					<li class="about-me--connect ng-hide" data-ng-show="userProfile.Handle"> <a id="public_profile_link" data-ng-href="/cook/" title="Profile" alt="Profile" target="_self" class="ng-binding" href="/cook/">allrecipes.com/cook/</a> </li>
					<li class="about-me--connect empty" data-ng-hide="userProfile.Handle"> <a href="/cook/my/profile-settings/" target="_self">Share your Allrecipes profile, create a personal URL!</a> </li>
					<li class="about-me--connect ng-hide" data-ng-show="userProfile.PersonalWebsite"> <a data-ng-href="" title="Blog" alt="Blog" data-ng-bind="userProfile.PersonalWebsite" target="_self" class="ng-binding"></a> </li>
				</ul>
				<ul class="social-networks">
					<li data-ng-show="userProfile.PinterestUrl" class="ng-hide"><a id="profile_pinterest" data-ng-href="" title="Pinterest" target="_blank"><img title="Pinterest" src="https://secureimages.allrecipes.com/ar-images/spacer.gif" alt="Pinterest"></a></li>
					<li data-ng-show="userProfile.FacebookUrl" class="ng-hide"><a id="profile_facebook" data-ng-href="" title="Facebook" target="_blank"><img title="Facebook" src="https://secureimages.allrecipes.com/ar-images/spacer.gif" alt="Facebook"></a></li>
					<li data-ng-show="userProfile.TwitterUrl" class="ng-hide"><a id="profile_twitter" data-ng-href="" title="Twitter" target="_blank"><img title="Twitter" src="https://secureimages.allrecipes.com/ar-images/spacer.gif" alt="Twitter"></a></li>
					<li data-ng-show="userProfile.GPlusUrl" class="ng-hide"><a id="profile_googlePlus" data-ng-href="" title="Google Plus" target="_blank"><img title="Google Plus" src="https://secureimages.allrecipes.com/ar-images/spacer.gif" alt="Google Plus"></a></li>
				</ul>
				<a class="btns-one-small" href="/cook/my/profile-settings/" target="_self">Edit public profile</a> 
			</div>
		</div>
	</div>
</div>
@stop