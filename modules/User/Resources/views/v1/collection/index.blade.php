@extends(MASTER_V1.'.layout_master_user')
@section('seo')

@stop
@section('user_content')
<div data-ng-view="" class="profile-wrapper full-page ng-scope">
	<div data-ng-init="init()" class="ng-scope">
		<div>
			<ul class="profile-top-toolbar private-profile--toolbar">
				<li class="profile-top-toolbar--buttons selected" data-ng-class="{selected: disableAllCollectionsButton}"> <a href="/cook/my/collections/" data-spa="true" class="btns-two-small selected" data-ng-class="{selected: disableAllCollectionsButton}" data-ng-disabled="disableAllCollectionsButton" ng-click="sendAnalyticsBeacon()" disabled="disabled">Collections</a> <a href="/cook/my/favorites" data-spa="true" class="btns-two-small" data-ng-class="{selected: !disableAllCollectionsButton}" data-ng-disabled="!disableAllCollectionsButton" ng-click="sendAnalyticsBeacon()">Recipes</a> </li>
				<li class="profile-top-toolbar--search">
					<ul class="profile-search--tools">
						<li class="search-box">
							<div class="input-wrap">
								<input type="text" placeholder="Find a saved recipe" class="light ng-pristine ng-untouched ng-valid" data-ng-model="query" data-ng-keyup="$event.keyCode == 13 &amp;&amp; search()"> 
								<div class="icon-clear-wrapper ng-hide" data-ng-hide="!query" data-ng-click="resetSearch()"> <span class="icon icon--clear"></span> </div>
								<button class="btn-basic--small btn-orange ng-pristine ng-untouched ng-valid" data-ng-model="disableMore" data-ng-disabled="disableMore" data-ng-click="search()"><span class="icon mag-glass"></span></button> 
							</div>
						</li>
					</ul>
				</li>
				<li class="profile-top-toolbar--nav sort--nav" data-ng-show="showSortChevron">
					<span class="toolbar--sort">Sort by:</span> 
					<ul popup-trigger="favorites-sort-menu" id="1b183d9f-8f7a-405d-8e1e-9915493dfedd">
						<li data-ng-click="displaySortNav = !displaySortNav">
							<a class="toggle-similar view light" data-ng-switch="" data-on="sortType">
								<!-- ngSwitchWhen: dateAdded --> <!-- ngSwitchWhen: rating --> <!-- ngSwitchWhen: title --> <!-- ngSwitchDefault:  --><span data-ng-switch-default="" class="toggle-similar__view__text ng-scope">Newest</span><!-- end ngSwitchWhen: --> <span class="icon--chevron-down"></span> 
							</a>
						</li>
					</ul>
					<ul class="sort-nav sort--selector ng-hide" id="sort-results" data-ng-switch="" data-on="pageType" popup-panel="favorites-sort-menu">
						<!-- ngSwitchWhen: recipebox -->
						<li data-ng-switch-when="recipebox" data-ng-class="{selected: sortType=='dateAdded'}" hidewhenclicked="" class="ng-scope"><a data-ng-click="sort('date')">Newest</a></li>
						<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: recipebox -->
						<li data-ng-switch-when="recipebox" data-ng-class="{selected: sortType=='rating'}" data-ng-show="page == 'favorites'" hidewhenclicked="" class="ng-scope ng-hide"><a data-ng-click="sort('rating')">Rating</a></li>
						<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: recipebox -->
						<li data-ng-switch-when="recipebox" data-ng-class="{selected: sortType=='title'}" hidewhenclicked="" class="ng-scope"><a data-ng-click="sort('title')">Title</a></li>
						<!-- end ngSwitchWhen: --> 
					</ul>
				</li>
				<li class="profile-top-toolbar--nav recipe--nav ng-hide" data-ng-show="!disableAllCollectionsButton &amp;&amp; showLinksToggle &amp;&amp; !isPhoneViewPort">
					<span class="toolbar--sort">View:</span> 
					<ul popup-trigger="favorites-toggle-menu" id="feb96823-901c-4b61-9b5c-fcf918de0d3c">
						<li data-ng-click="displaySortNav = !displaySortNav">
							<a class="toggle-similar view light" data-ng-switch="" data-on="favoriteType">
								<!-- ngSwitchWhen: favorites --><span data-ng-switch-when="favorites" class="ng-scope">Recipes</span><!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: weblinks --> <!-- ngSwitchDefault:  --> <span class="icon--chevron-down"></span> 
							</a>
						</li>
					</ul>
					<ul class="sort-nav recipe--selector ng-hide" id="sort-results" data-ng-switch="" data-on="pageType" popup-panel="favorites-toggle-menu">
						<!-- ngSwitchWhen: recipebox -->
						<li data-ng-switch-when="recipebox" data-ng-class="{selected: favoriteType=='favorites'}" hidewhenclicked="" class="ng-scope selected"><a data-ng-click="toggleLinks('favorites')">Recipes</a></li>
						<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: recipebox -->
						<li data-ng-switch-when="recipebox" data-ng-class="{selected: favoriteType=='weblinks'}" hidewhenclicked="" class="ng-scope"><a data-ng-click="toggleLinks('weblinks')">Saved links</a></li>
						<!-- end ngSwitchWhen: --> 
					</ul>
				</li>
			</ul>
		</div>
		<div data-ng-hide="isInitialLoad &amp;&amp; isEmptyGrid" class="">
			<div data-search-result-count="" data-ng-show="isSearch &amp;&amp; showSearchBar" style="margin:0 0 0 1rem;padding:5px 0 10px 0;" class="ng-hide">
				<p class="search-results-text">
					<span data-ng-switch="itemList.metaData.totalCount">
						<!-- ngSwitchWhen: 1 --> <!-- ngSwitchDefault:  --><span ng-switch-default="" class="subtext ng-binding ng-scope" ng-bind="itemList.metaData.totalCount | largeNumberDisplay">10</span><!-- end ngSwitchWhen: --> 
					</span>
					<span ng-bind="queryText" class="ng-binding"></span> 
				</p>
			</div>
			<div data-ng-show="isSearch &amp;&amp; itemList.metaData == undefined" style="padding:0 15px;" class="ng-hide"> <span class="search-results__text">You can also try different words that have similar meanings like “crumble” instead of “cobbler.”</span> </div>
			<section masonry="" class="grid grid-fixed cards" preserve-order="" item-selector="article" style="position: relative; height: 1321.17px;">
				<div data-universal-masonry-grid-view="">
					<!-- ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 314px; top: 0px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369263" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369263">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">aaa</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 628px; top: 0px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369207" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369207">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Appetizers</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 942px; top: 0px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369208" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369208">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Breads</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 0px; top: 440px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369209" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369209">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Desserts</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 314px; top: 440px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369210" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369210">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Drinks</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 628px; top: 440px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369211" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369211">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Main Dishes</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 942px; top: 440px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369212" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369212">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Salads</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 0px; top: 880px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369213" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369213">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Side Dishes</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 314px; top: 880px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369214" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369214">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Snacks</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
					<article data-ng-repeat="item in itemList" data-masonry-brick="" data-ad-container-masonry-autocollapse="" class="grid-col grid-col--fixed-tiles" ar-infinite-scroll-page="" style="position: absolute; left: 628px; top: 880px;">
						<div ng-switch="::item.itemType">
							<!-- ngSwitchWhen: ad --> <!-- ngSwitchWhen: Photo --> <!-- ngSwitchWhen: Article --> <!-- ngSwitchWhen: Collection -->
							<div ng-switch-when="Collection" class="ng-scope">
								<ul class="collection-card">
									<a ng-class="{ highlighted : saved }" title="Save a copy of this collection" data-ng-show="showHeart" class="favorite ng-isolate-scope ng-hide" data-id="::item.collectionID" data-type="::item.itemType" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
									<a data-ng-href="http://m.allrecipes.com/collections/145369215" data-internal-referrer-link="collectioncard" data-click-id="cardslot " target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145369215">
										<li class="collections-card-images"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> <img data-lazy-load="" data-ng-src="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"> </li>
										<li class="collection-text">
											<h3 ng-bind="::item.nestedName" class="ng-binding">Soups</h3>
											<h4 ng-bind="::buildRecipeCountLabel(item.recipeCount)" class="ng-binding">0 recipes</h4>
										</li>
									</a>
								</ul>
								<a ng-href="/cook/21311124/" target="_self" href="/cook/21311124/">
									<ul class="cook-details">
										<li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" data-lazy-load="" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png" data-original-src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"> </li>
										<li>
											<h4> <span>Created by </span> <span ng-bind="::item.collectionCreator.name" class="ng-binding">Truong Xuan Bui</span> </h4>
											<ul class="cook-details__followers followers-count">
												<li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.followersCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.favoritesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
												<li> <span ng-bind="::(item.collectionCreator.madeRecipesCount | largeNumberDisplay)" class="ng-binding">0</span> </li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<!-- end ngSwitchWhen: --> <!-- ngSwitchWhen: Review --> <!-- ngSwitchWhen: Cook --> <!-- ngSwitchWhen: WebLink --> <!-- ngSwitchWhen: Video --> <!-- ngSwitchWhen: HalfCook --> <!-- ngSwitchWhen: Brand --> <!-- ngSwitchWhen: Creative --> <!-- ngSwitchWhen: Hub --> <!-- ngSwitchWhen: Community --> <!-- ngSwitchDefault:  --> 
						</div>
					</article>
					<!-- end ngRepeat: item in itemList -->
				</div>
				<article class="grid-col--fixed-tiles collection-card collectionCreate ng-scope" data-ng-click="openCollectionModal();" style="position: absolute; left: 0px; top: 0px;"> <label for="collectionCreate" class="collection-add-button"> <span>+</span><span class="light">Create a collection</span> </label> </article>
			</section>
			<div class="recipe-box__more"> <button data-ng-click="getItems()" data-ng-disabled="disableMore" data-ng-hide="hideMore" class="btns-one-small--bottom-margin ng-hide" id="recipeBoxMoreBtn">More</button> </div>
		</div>
		<div data-ng-show="!isInitialLoad &amp;&amp; isEmptyGrid &amp;&amp; !isSearch" class="profile-empty-grid ng-hide">
			<div> <span class="empty-page-header">Welcome to your favorites!</span><br> <span class="empty-description"> Tap <span class="icon--recipe-detail-nav-save" style="left:0;"></span> to save any recipe you like,<br> and it'll show up here. </span> </div>
		</div>
		<div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
	</div>
</div>
@stop