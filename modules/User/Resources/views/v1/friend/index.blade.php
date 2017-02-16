@extends(MASTER_V1.'.layout_master_user')
@section('seo')

@stop
@section('user_content')
<div data-ng-view="" class="profile-wrapper full-page ng-scope">
	<div data-ng-init="init()" class="ng-scope">
		<div class="profile-friends">
			<ul class="cook-card-subnav">
				<li> <a class="btns-two-small" data-ng-class="{selected: page=== 'following'}" href="/cook/my/following/" data-spa="true" ng-click="sendAnalyticsBeacon()">Following <span data-ng-bind="user.FollowingCount" class="light ng-binding">1</span></a> <a class="btns-two-small" data-ng-class="{selected: page=== 'followers'}" href="/cook/my/followers/" data-spa="true" ng-click="sendAnalyticsBeacon()">Followers <span data-ng-bind="user.FollowersCount" class="light ng-binding">0</span></a> <a class="btns-two-small selected" data-ng-class="{selected: page=== 'findfriends'}" href="/cook/my/findfriends/" data-spa="true" ng-click="sendAnalyticsBeacon()">Find Friends</a> </li>
			</ul>
		</div>
		<div data-ng-show="page === 'findfriends'" class="cook--friends">
			<span data-ng-show="page === 'findfriends'" class="empty-description friend-finder" popup-trigger="cookFriendsMasonryWrap" id="6e951c8f-bca3-43c1-a80d-8c159c19ffb3"> <span class="icon--ar-bug"></span> <span>Suggested cooks to follow</span> <span id="selectCooks" ng-click="selectCooks=!selectCooks" ng-class="{'icon--chevron-down':!selectCooks, 'icon--chevron-up':selectCooks}" class="icon--chevron-down"></span> </span> 
			<div popup-panel="cookFriendsMasonryWrap" class="cook--friends__masonry-wrap ng-hide" id="2db30422-5d98-4277-8525-5e7cc42ebb5a">
				<div class="suggested-cooks__inner-wrap">
					<div ng-controller="promotedBrands" class="suggested-cooks ng-scope">
						<!-- ngRepeat: item in itemList track by item.id --><img ng-repeat="item in itemList track by item.id" ng-src="http://pubads.g.doubleclick.net/gampad/ad?iu=/3865/DFP_1x1_impression_tracker&amp;sz=1x1&amp;t=adpartner%3Dhunts&amp;c=493663" class="ng-scope" src="http://pubads.g.doubleclick.net/gampad/ad?iu=/3865/DFP_1x1_impression_tracker&amp;sz=1x1&amp;t=adpartner%3Dhunts&amp;c=493663"><!-- end ngRepeat: item in itemList track by item.id --><img ng-repeat="item in itemList track by item.id" ng-src="http://pubads.g.doubleclick.net/gampad/ad?iu=/3865/DFP_1x1_impression_tracker&amp;sz=1x1&amp;t=adpartner%3Darmagazine&amp;c=493663" class="ng-scope" src="http://pubads.g.doubleclick.net/gampad/ad?iu=/3865/DFP_1x1_impression_tracker&amp;sz=1x1&amp;t=adpartner%3Darmagazine&amp;c=493663"><!-- end ngRepeat: item in itemList track by item.id --><img ng-repeat="item in itemList track by item.id" ng-src="http://pubads.g.doubleclick.net/gampad/ad?iu=/3865/DFP_1x1_impression_tracker&amp;sz=1x1&amp;t=adpartner%3Dgreengiantbrandpromo&amp;c=493663" class="ng-scope" src="http://pubads.g.doubleclick.net/gampad/ad?iu=/3865/DFP_1x1_impression_tracker&amp;sz=1x1&amp;t=adpartner%3Dgreengiantbrandpromo&amp;c=493663"><!-- end ngRepeat: item in itemList track by item.id --><img ng-repeat="item in itemList track by item.id" ng-src="http://pubads.g.doubleclick.net/gampad/ad?iu=/3865/DFP_1x1_impression_tracker&amp;sz=1x1&amp;t=adpartner%3Ddixiebrandpromo&amp;c=493663" class="ng-scope" src="http://pubads.g.doubleclick.net/gampad/ad?iu=/3865/DFP_1x1_impression_tracker&amp;sz=1x1&amp;t=adpartner%3Ddixiebrandpromo&amp;c=493663"><!-- end ngRepeat: item in itemList track by item.id --> 
						<aside masonry="" class="grid grid-fixed like-cooks" preserve-order="" item-selector="article" style="position: relative; height: 288px;">
							<div data-universal-masonry-grid-view="">
								<!-- ngRepeat: item in itemList -->
								<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles cook-tile" ar-infinite-scroll-page="" style="position: absolute; left: 0px; top: 0px;">
									<div ng-switch="::item.itemType">
										<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook -->
										<div ng-switch-when="HalfCook" class="">
											<a data-profile-link="" data-ng-href="/cook/hunts/?internalSource=promoted brand&amp;referringContentType=private profile&amp;clickId=cardslot " data-ng-transclude="" data-internal-referrer="promoted brand" data-click-id="cardslot " target="_self" class="ng-scope" href="/cook/hunts/?internalSource=promoted brand&amp;referringContentType=private profile&amp;clickId=cardslot ">
												<img class="grid-col__rec-image ng-isolate-scope ng-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/4130679.jpg" title="Cook recommendation" data-ng-src="http://images.media-allrecipes.com/userphotos/250x250/4130679.jpg" style="display: inline;" src="http://images.media-allrecipes.com/userphotos/250x250/4130679.jpg"> 
												<h3 class="grid-col__h3 grid-col__h3--recipe-grid ng-binding ng-scope"> Hunt's </h3>
												<h4 class="ng-binding ng-scope"></h4>
											</a>
											<a href="" class="grid-col__header-text phone-size ng-binding" ng-bind="::item.headerText"></a>  
											<div class="profile profile--recipe-card"> <span class="svg-icon--cook-card--follow svg-icon--cook-card--follow-dims"></span> <a ng-class="{ highlighted : saved }" title="Follow this cook" data-ng-show="showHeart" data-analytics-type="promoted brand" class="favorite btns-one-small ng-isolate-scope" data-id="::item.id" data-type="::('cook')" data-page="'recommendation'" data-brandid="::item.brandedSourceID"><span class="ng-binding"></span></a> </div>
											<!-- ngIf: ::item.headerLink --> 
										</div>
										<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
									</div>
								</article>
								<!-- end ngRepeat: item in itemList -->
								<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles cook-tile" ar-infinite-scroll-page="" style="position: absolute; left: 314px; top: 0px;">
									<div ng-switch="::item.itemType">
										<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook -->
										<div ng-switch-when="HalfCook" class="">
											<a data-profile-link="" data-ng-href="/cook/16007298/?internalSource=promoted brand&amp;referringContentType=private profile&amp;clickId=cardslot " data-ng-transclude="" data-internal-referrer="promoted brand" data-click-id="cardslot " target="_self" class="ng-scope" href="/cook/16007298/?internalSource=promoted brand&amp;referringContentType=private profile&amp;clickId=cardslot ">
												<img class="grid-col__rec-image ng-isolate-scope ng-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/2536776.jpg" title="Cook recommendation" data-ng-src="http://images.media-allrecipes.com/userphotos/250x250/2536776.jpg" style="display: inline;" src="http://images.media-allrecipes.com/userphotos/250x250/2536776.jpg"> 
												<h3 class="grid-col__h3 grid-col__h3--recipe-grid ng-binding ng-scope"> Allrecipes Magazine </h3>
												<h4 class="ng-binding ng-scope"></h4>
											</a>
											<a href="" class="grid-col__header-text phone-size ng-binding" ng-bind="::item.headerText"></a>  
											<div class="profile profile--recipe-card"> <span class="svg-icon--cook-card--follow svg-icon--cook-card--follow-dims"></span> <a ng-class="{ highlighted : saved }" title="Follow this cook" data-ng-show="showHeart" data-analytics-type="promoted brand" class="favorite btns-one-small ng-isolate-scope" data-id="::item.id" data-type="::('cook')" data-page="'recommendation'" data-brandid="::item.brandedSourceID"><span class="ng-binding"></span></a> </div>
											<!-- ngIf: ::item.headerLink --> 
										</div>
										<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
									</div>
								</article>
								<!-- end ngRepeat: item in itemList -->
								<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles cook-tile" ar-infinite-scroll-page="" style="position: absolute; left: 0px; top: 138px;">
									<div ng-switch="::item.itemType">
										<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook -->
										<div ng-switch-when="HalfCook" class="">
											<a data-profile-link="" data-ng-href="/cook/greengiant/?internalSource=promoted brand&amp;referringContentType=private profile&amp;clickId=cardslot " data-ng-transclude="" data-internal-referrer="promoted brand" data-click-id="cardslot " target="_self" class="ng-scope" href="/cook/greengiant/?internalSource=promoted brand&amp;referringContentType=private profile&amp;clickId=cardslot ">
												<img class="grid-col__rec-image ng-isolate-scope ng-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/4171609.jpg" title="Cook recommendation" data-ng-src="http://images.media-allrecipes.com/userphotos/250x250/4171609.jpg" style="display: inline;" src="http://images.media-allrecipes.com/userphotos/250x250/4171609.jpg"> 
												<h3 class="grid-col__h3 grid-col__h3--recipe-grid ng-binding ng-scope"> Green Giant </h3>
												<h4 class="ng-binding ng-scope"></h4>
											</a>
											<a href="" class="grid-col__header-text phone-size ng-binding" ng-bind="::item.headerText"></a>  
											<div class="profile profile--recipe-card"> <span class="svg-icon--cook-card--follow svg-icon--cook-card--follow-dims"></span> <a ng-class="{ highlighted : saved }" title="Follow this cook" data-ng-show="showHeart" data-analytics-type="promoted brand" class="favorite btns-one-small ng-isolate-scope" data-id="::item.id" data-type="::('cook')" data-page="'recommendation'" data-brandid="::item.brandedSourceID"><span class="ng-binding"></span></a> </div>
											<!-- ngIf: ::item.headerLink --> 
										</div>
										<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
									</div>
								</article>
								<!-- end ngRepeat: item in itemList -->
								<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles cook-tile" ar-infinite-scroll-page="" style="position: absolute; left: 314px; top: 138px;">
									<div ng-switch="::item.itemType">
										<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook -->
										<div ng-switch-when="HalfCook" class="">
											<a data-profile-link="" data-ng-href="/cook/dixie/?internalSource=promoted brand&amp;referringContentType=private profile&amp;clickId=cardslot " data-ng-transclude="" data-internal-referrer="promoted brand" data-click-id="cardslot " target="_self" class="ng-scope" href="/cook/dixie/?internalSource=promoted brand&amp;referringContentType=private profile&amp;clickId=cardslot ">
												<img class="grid-col__rec-image ng-isolate-scope ng-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/4064841.jpg" title="Cook recommendation" data-ng-src="http://images.media-allrecipes.com/userphotos/250x250/4064841.jpg" style="display: inline;" src="http://images.media-allrecipes.com/userphotos/250x250/4064841.jpg"> 
												<h3 class="grid-col__h3 grid-col__h3--recipe-grid ng-binding ng-scope"> Dixie </h3>
												<h4 class="ng-binding ng-scope"></h4>
											</a>
											<a href="" class="grid-col__header-text phone-size ng-binding" ng-bind="::item.headerText"></a>  
											<div class="profile profile--recipe-card"> <span class="svg-icon--cook-card--follow svg-icon--cook-card--follow-dims"></span> <a ng-class="{ highlighted : saved }" title="Follow this cook" data-ng-show="showHeart" data-analytics-type="promoted brand" class="favorite btns-one-small ng-isolate-scope" data-id="::item.id" data-type="::('cook')" data-page="'recommendation'" data-brandid="::item.brandedSourceID"><span class="ng-binding"></span></a> </div>
											<!-- ngIf: ::item.headerLink --> 
										</div>
										<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
									</div>
								</article>
								<!-- end ngRepeat: item in itemList -->
							</div>
						</aside>
					</div>
					<div ng-controller="recommendedCooks" class="suggested-cooks ng-scope">
						<aside masonry="" class="grid grid-fixed like-cooks" preserve-order="" item-selector="article" style="position: relative; height: 12px;">
							<div data-universal-masonry-grid-view="">
								<!-- ngRepeat: item in itemList -->
							</div>
						</aside>
					</div>
				</div>
			</div>
			<div data-ng-show="didNotFindFacebookFriends" class="ng-hide"> <span class="empty-description friend-finder"> We didn't see any of your Facebook friends on Allrecipes. To start feeding your feed, follow cooks like the Allrecipes staff! </span> </div>
			<div data-ng-hide="didNotFindFacebookFriends">
				<span data-ng-show="page === 'findfriends'" class="empty-description friend-finder fb-header" popup-trigger="fbFriendsMasonryWrap" id="eab41cab-c614-4a7d-9301-8768048781b6"> <span class="icon--fb-bug"></span> <span>Facebook friends on Allrecipes</span> <span id="selectedFB" ng-click="selectFB=!selectFB" ng-class="{'icon--chevron-down':!selectFB, 'icon--chevron-up':selectFB}" class="icon--chevron-down"></span> </span> 
				<div data-ng-show="page === 'findfriends'">
					<div popup-panel="fbFriendsMasonryWrap" class="fb--friends__masonry-wrap ng-hide" id="dc21a2c0-53c5-4862-895f-a06275166017">
						<!-- ngRepeat: item in itemList track by item.id --> 
						<div data-ng-show="user.IsFacebookConnected === false" class="fb-connect-cta"> <span class="empty-description friend-finder"> <span class="fb-not-connected"><span>Sign in to Facebook to automatically connect with your friends.</span> <a href="#" class="btns-one-small" facebook-login="" target="_self"><span class="icon--fb-bug"></span><span>Connect to Facebook</span></a></span> </span> </div>
						<section masonry="" class="grid grid-fixed" preserve-order="" item-selector="article" style="position: relative; height: 12px;">
							<div data-universal-masonry-grid-view="">
								<!-- ngRepeat: item in itemList -->
							</div>
						</section>
					</div>
				</div>
			</div>
			<span data-ng-show="page === 'findfriends'" class="empty-description friend-finder invite-header"> <span class="email"></span> <span>Invite friends to join Allrecipes</span> </span> 
			<div data-ng-show="page === 'findfriends'" id="first" class="invite-cooks cook-invitation">
				<span class="extole-js-is-with-user">
					<div class="extole-js-widget-view">
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Modal -->
						<div style="display:none;" class="extole-js-modal-overlay-view extole-modal-overlay"></div>
						<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Widget -->
						<div class="extole-js-widget-wrapper extole-widget-wrapper">
							<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Header -->
							<div class="extole-header-wrapper">
								<div class="extole-header">
									<p class="extole-header-headline">Cooking is more fun with friends!</p>
									<p class="extole-header-subheadline">Invite your friends to share recipes, inspiration, and culinary triumphs (and disasters) on Allrecipes.</p>
								</div>
								<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Attaboy Slider -->
								<div class="extole-js-attaboy-view extole-attaboy-wrapper">
									<div class="extole-js-attaboy-modal extole-attaboy-modal"></div>
									<div class="extole-js-attaboy-content-wrapper">
										<div class="extole-js-attaboy-error-view extole-attaboy-content">
											<p class="extole-attaboy-headline">We're sorry.</p>
											<p class="extole-attaboy-subheadline">
												That's weird, something went wrong in the process.<br>
												<a href="http://customer-support-placeholder.com" target="_blank">Click Here</a> to contact customer support
											</p>
										</div>
										<div class="extole-js-attaboy-success-view extole-attaboy-content">
											<p class="extole-attaboy-headline">Thanks for sharing Allrecipes!</p>
											<p class="extole-attaboy-subheadline">
												<br><span class="extole-js-attaboy-email-address">truongxuan.ict@gmail.com</span>.<a class="extole-js-attaboy-logout" href="#"> Not you?</a>
											</p>
										</div>
										<div class="extole-js-attaboy-try-again-view extole-attaboy-content">
											<p class="extole-attaboy-headline">Oops!</p>
											<p class="extole-attaboy-subheadline">Something weird happened, please try again.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Tabs  -->
							<table class="extole-tabs-wrapper">
								<thead></thead>
								<tbody>
									<tr class="extole-tab-row">
										<td class="extole-js-panel-link-view-email extole-tab extole-email extole-js-widget-panel-button-active">Send email invite</td>
										<td class="extole-js-panel-link-view-facebook extole-tab extole-facebook">Share on Facebook</td>
										<td class="extole-js-panel-link-view-twitter extole-tab extole-twitter" style="display:none">Twitter</td>
									</tr>
								</tbody>
							</table>
							<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Panels -->
							<div class="extole-panels-wrapper">
								<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Email Panel -->
								<div class="extole-js-panel-view-email extole-widget-panel" data-extole-next-panel-name="facebook">
									<!-- - - - - - - - - - - - - - email share form -->
									<form novalidate="" class="extole-js-email-panel-email-share-form">
										<!-- - - - - - - - - - - - - - user email -->
										<div class="extole-input">
											<a href="#" class="extole-js-not-you extole-js-with-user extole-not-you">Not you?</a>
											<div class="extole-js-validation-error-message extole-validation-error-message" style="display:none;"></div>
											<input id="yourEmailAdds" class="extole-js-user-email extole-js-is-logged-in" type="email" name="user_email" value="" spellcheck="false" placeholder="Your email" readonly="">
										</div>
										<!-- - - - - - - - - - - - - - recipient emails -->
										<div class="extole-input extole-recipient-emails">
											<!-- - - - - - - - - - - - - - cloudsponge icon -->
											<!--                         <span class="extole-js-cloudsponge-button extole-cloudsponge-button">
												<i class="extole-icon extole-icon-address-book"></i>
												</span> -->
											<div class="extole-js-validation-error-message extole-validation-error-message" style="display:none;"></div>
											<textarea id="friendEmailAdds" class="extole-js-cloudsponge-recipient-emails extole-medium" name="recipient_emails" value="" placeholder="Your friend's email" spellcheck="false"></textarea>
										</div>
										<!-- - - - - - - - - - - - - - message -->
										<div class="extole-input">
											<div class="extole-js-validation-error-message extole-validation-error-message" style="display:none;"></div>
											<textarea name="message" id="emailMsg" class="extole-medium">Let's cook together! Join me on Allrecipes, the largest community of home cooks. Save and share your favorite recipes, and discover new dishes based on the food you like and friends you follow. It's free!</textarea>
										</div>
										<!-- - - - - - - - - - - - - - submit button -->
										<button class="extole-submit-button extole-widget-button" type="submit">
											<div class="extole-submit-button-default-content">
												<span>Send email invite</span>
												<i class="extole-icon-right-open"></i>
											</div>
											<div class="extole-submit-button-pending-content">
												<span>Sending</span>
												<i class="extole-spinner extole-spin"></i>
											</div>
										</button>
									</form>
								</div>
								<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Facebook Panel -->
								<div class="extole-js-panel-view-facebook extole-widget-panel" data-extole-next-panel-name="email" style="display:none;">
									<!-- - - - - - - - - - - - - - facebook message form -->
									<form novalidate="" class="extole-js-facebook-panel-facebook-share-form" style="display:none;">
										<!-- - - - - - - - - - - - - - message -->
										<div class="extole-input">
											<div class="extole-js-validation-error-message extole-validation-error-message" style="display:none;"></div>
											<textarea name="message" class="extole-medium" placeholder="Add a personal message (Required)"></textarea>
										</div>
										<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - Content Preview -->
										<div class="extole-content-preview">
											<div class="extole-content-preview-image-wrapper">
												<img class="extole-js-facebook-panel-og-image-preview" src="//origin.extole.io/type=creativeArchive:creativeArchiveId=6376652806786390820:version=6:coreAssetsVersion=1481046984915/img/facebookimage_chicken2_200x200.jpg">
											</div>
											<div class="extole-content-preview-text-wrapper">
												<p class="extole-js-facebook-panel-og-title-preview extole-content-preview-title">Let's cook together!</p>
												<p class="extole-js-facebook-panel-og-description-preview extole-content-preview-description">
													Join me on Allrecipes, the largest community of home cooks. Save and share your favorite recipes, and discover new dishes based on the food you like and friends you follow. It's free!
												</p>
											</div>
											<div class="extole-clear-fix"></div>
										</div>
										<!-- - - - - - - - - - - - - - submit button -->
										<button class="extole-submit-button extole-widget-button" type="submit">
											<div class="extole-submit-button-default-content">
												<span>Share on Facebook</span>
												<i class="extole-icon-right-open"></i>
											</div>
											<div class="extole-submit-button-pending-content">
												<span>Authorizing</span>
												<i class="extole-spinner extole-spin"></i>
											</div>
										</button>
									</form>
									<!-- - - - - - - - - - - - - - facebook email form -->
									<form novalidate="" class="extole-js-facebook-panel-capture-email-form" style="display:none;">
										<p class="extole-email-input-prompt">Where would you like us to send your rewards?</p>
										<!-- - - - - - - - - - - - - - user email -->
										<div class="extole-input">
											<a href="#" class="extole-js-not-you extole-js-with-user extole-not-you">Not you?</a>
											<div class="extole-js-validation-error-message extole-validation-error-message" style="display:none;"></div>
											<input type="email" name="user_email" value="" placeholder="Your email">
										</div>
										<!-- - - - - - - - - - - - - - submit button -->
										<button class="extole-submit-button extole-widget-button" type="submit">
											<div class="extole-submit-button-default-content">
												<span>Confirm</span>
												<i class="extole-icon-right-open"></i>
											</div>
											<div class="extole-submit-button-pending-content">
												<span>Sending</span>
												<i class="extole-spinner extole-spin"></i>
											</div>
										</button>
									</form>
								</div>
								<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Twitter Panel -->
								<div class="extole-js-panel-view-twitter extole-widget-panel" data-extole-next-panel-name="email" style="display:none;">
									<!-- - - - - - - - - - - - - - twitter tweet form -->
									<form novalidate="" class="extole-js-twitter-panel-twitter-share-form">
										<!-- - - - - - - - - - - - - - tweet -->
										<div class="extole-input">
											<div class="extole-js-validation-error-message extole-validation-error-message" style="display:none;"></div>
											<textarea name="message" class="extole-js-tweet-input extole-large">Get more customers, @extole is great! Use my link</textarea>
											<div class="extole-tweet-character-count">
												<p>Remaining Characters: <span class="extole-js-remaining-character-count"></span></p>
											</div>
										</div>
										<!-- - - - - - - - - - - - - - submit button -->
										<button class="extole-submit-button extole-widget-button" type="submit">
											<div class="extole-submit-button-default-content">
												<span>Share on Twitter</span>
												<i class="extole-icon-right-open"></i>
											</div>
											<div class="extole-submit-button-pending-content">
												<span>Authorizing</span>
												<i class="extole-spinner extole-spin"></i>
											</div>
										</button>
									</form>
									<!-- - - - - - - - - - - - - - twitter email form -->
									<form novalidate="" class="extole-js-twitter-panel-capture-email-form">
										<p class="extole-email-input-prompt">Where would you like us to send your rewards?</p>
										<!-- - - - - - - - - - - - - - user email -->
										<div class="extole-input">
											<a href="#" class="extole-js-not-you extole-js-with-user extole-not-you">Not you?</a>
											<div class="extole-js-validation-error-message extole-validation-error-message" style="display:none;"></div>
											<input type="email" name="user_email" value="" placeholder="Your email">
										</div>
										<!-- - - - - - - - - - - - - - submit button -->
										<button class="extole-submit-button extole-widget-button" type="submit">
											<div class="extole-submit-button-default-content">
												<span>Confirm</span>
												<i class="extole-icon-right-open"></i>
											</div>
											<div class="extole-submit-button-pending-content">
												<span>Sending</span>
												<i class="extole-spinner extole-spin"></i>
											</div>
										</button>
									</form>
								</div>
								<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Dashboard Panel -->
								<div class="extole-js-panel-view-dashboard extole-widget-panel" style="display:none;" data-extole-next-panel-name="email">
									<!-- - - - - - - - - - - - - - dashboard email form -->
									<form novalidate="" class="extole-js-dashboard-panel-capture-email-form">
										<p class="extole-email-input-prompt">Where should we send your dashboard?</p>
										<!-- - - - - - - - - - - - - - user email -->
										<div class="extole-input">
											<a href="#" class="extole-js-not-you extole-js-with-user extole-not-you">Not you?</a>
											<div class="extole-js-validation-error-message extole-validation-error-message" style="display:none;"></div>
											<input type="email" name="user_email" value="" placeholder="Your email">
										</div>
										<!-- - - - - - - - - - - - - - submit button -->
										<button class="extole-submit-button extole-widget-button" type="submit">
											<div class="extole-submit-button-default-content">
												<span>Confirm</span>
												<i class="extole-icon-right-open"></i>
											</div>
											<div class="extole-submit-button-pending-content">
												<span>Sending</span>
												<i class="extole-spinner extole-spin"></i>
											</div>
										</button>
									</form>
								</div>
							</div>
							<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Share Link -->
							<div class="extole-js-share-link-view extole-share-link-view extole-js-copy-button-unsupported" style="display: none;">
								<!-- <div class="extole-js-share-link-view extole-share-link-view" style="display:none;"> -->
								<p>Sharing URL</p>
								<div class="extole-share-link-and-button-positioner">
									<div class="extole-share-link-wrapper">
										<span class="extole-js-share-link extole-share-link"></span>
									</div>
									<span class="extole-js-copy-button extole-copy-button extole-widget-button">
									<i class="extole-icon-docs"></i>
									</span>
								</div>
							</div>
							<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Footer -->
							<div class="extole-footer">
								<p>
									<a class="extole-js-widget-footer-how-it-works-link" target="_blank" href="#">How It Works</a>
									<a class="extole-js-my-stats extole-js-panel-link-view-dashboard" href="#">My Stats</a>
									<a target="_blank" href="http://go.extole.com/WebsitePoweredbyExtole.html">Powered By <img class="extole-logo" src="//origin.extole.io/type=creativeArchive:creativeArchiveId=6376652806786390820:version=6:coreAssetsVersion=1481046984915/img/extole-logo-footer.png"></a>
								</p>
							</div>
							<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - How It Works -->
							<div class="extole-js-how-it-works-view" style="display:none;">
								<div class="extole-js-widget-how-it-works-modal extole-how-it-works-modal"></div>
								<div class="extole-how-it-works">
									<p class="extole-how-it-works-headline">How it works</p>
									<p class="extole-how-it-works-subheadline">For every friend you refer who purchases, you earn more of Our Gratitude!</p>
									<div class="extole-how-it-works-footer">
										<p>Need more details?<a href="//vokate.extole.com/zone/terms_and_conditions" target="_blank">Terms &amp; Conditions</a></p>
									</div>
								</div>
							</div>
							<!-- - - - - - - - - - - - - - close button -->
							<span class="extole-js-widget-close-button extole-close-button" style="display:none;">
							<i class="extole-icon-cancel"></i>
							</span>
						</div>
					</div>
				</span>
				<script type="extole/widget">{"zone":"findfriends","parameters":{"widgetIsEmbedded":true}}</script><script type="text/javascript">extole.reScan()</script>
			</div>
		</div>
		<div data-ng-show="page === 'followers' || page=== 'following'" class="ng-hide">
			<div data-ng-hide="isEmptyGrid" class="ng-hide">
				<section masonry="" class="grid grid-fixed" preserve-order="" item-selector="article" style="position: relative; height: 0px;">
					<div data-universal-masonry-grid-view="">
						<!-- ngRepeat: item in itemList -->
					</div>
				</section>
				<a href="/" class="btns-one-small friend-finder" target="_self">Done! Take me to my feed.</a> 
				<div class="recipe-box__more"> <button data-ng-click="getItems()" data-ng-disabled="disableMore" data-ng-hide="hideMore" class="btns-one-small--bottom-margin ng-hide" id="moreBtn">More</button> </div>
			</div>
		</div>
		<div data-ng-show="!isInitialLoad &amp;&amp; isEmptyGrid &amp;&amp; page=== 'following'" class="profile-empty-grid ng-hide">
			<div> <span class="empty-page-header">You're not following any cooks yet</span><br> <span class="empty-description">Tap <span class="icon--recipe-detail-nav-save" style="left:0;"></span> to follow a cook's activity,<br>such as when they make a recipe.</span> </div>
		</div>
		<div data-ng-show="!isInitialLoad &amp;&amp; isEmptyGrid &amp;&amp; page=== 'followers'" class="profile-empty-grid ng-hide">
			<div> <span class="empty-page-header">You don't have any followers yet</span><br> <span class="empty-description">Try following other cooks or signing in with your social account.</span> </div>
		</div>
		<div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
	</div>
</div>
@stop