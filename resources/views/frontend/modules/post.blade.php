@extends(VIEW_FRONTEND_MASTER)

@section('content')
<div class="container-content body-content">
	<div class="recipe-container-outer">
		<section class="ar_recipe_index full-page" itemscope="" itemtype="http://schema.org/Recipe">
			<link itemprop="url" href="http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/">
			<meta itemprop="mainEntityOfPage" content="True">
			<ul class="breadcrumbs breadcrumbs" data-scroll-left="">
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<a data-internal-referrer-link="recipe breadcrumb" data-click-id="recipe breadcrumb 1" href="/?internalSource=recipe breadcrumb&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=recipe breadcrumb 1" target="_self" itemprop="url" class="ng-isolate-scope">
					<span class="toggle-similar__title" itemprop="title">
					Home
					</span>
					<span class="icon--chevron-right"></span>
					</a>
				</li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" data-list-item="">
					<a data-internal-referrer-link="recipe breadcrumb" data-click-id="recipe breadcrumb 2" href="/recipes/?internalSource=recipe breadcrumb&amp;referringId=237928&amp;referringContentType=recipe&amp;referringPosition=2&amp;clickId=recipe breadcrumb 2" target="_self" itemprop="url" class="ng-isolate-scope">
					<span class="toggle-similar__title" itemprop="title">
					Recipes
					</span>
					<span class="icon--chevron-right"></span>
					</a>
				</li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" data-list-item="">
					<a data-internal-referrer-link="recipe breadcrumb" data-click-id="recipe breadcrumb 3" href="/recipes/92/meat-and-poultry/?internalSource=recipe breadcrumb&amp;referringId=237928&amp;referringContentType=recipe&amp;referringPosition=3&amp;clickId=recipe breadcrumb 3" target="_self" itemprop="url" class="ng-isolate-scope">
					<span class="toggle-similar__title" itemprop="title">
					Meat and Poultry
					</span>
					<span class="icon--chevron-right"></span>
					</a>
				</li>
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" data-list-item="">
					<a data-internal-referrer-link="recipe breadcrumb" data-click-id="recipe breadcrumb 4" href="/recipes/201/chicken/?internalSource=recipe breadcrumb&amp;referringId=237928&amp;referringContentType=recipe&amp;referringPosition=4&amp;clickId=recipe breadcrumb 4" target="_self" itemprop="url" class="ng-isolate-scope">
					<span class="toggle-similar__title" itemprop="title">
					Chicken
					</span>
					</a>
				</li>
			</ul>
			<div class="summary-background">
				<div class="summaryGroup clearfix">
					<section class="hero-photo hero-photo--downsized">
						<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="237928" data-type="'Recipe'" data-name="&quot;Chef John's Chicken Marsala &quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/1167787.jpg'" data-clicksource="'recipe hero photo'"><span class="ng-binding"></span></a>
						<span ng-controller="ar_controllers_recipe_photo" ng-hide="showplayer" class="hero-photo__image ng-scope" ng-click="enablePlayer()">
							<a href="/video/4592/chef-johns-chicken-marsala" ng-click="$event.preventDefault(); openGalery('/video/4592/chef-johns-chicken-marsala', 237928, 'Chef John\u0027s Chicken Marsala ', 'http://images.media-allrecipes.com/userphotos/560x315/1167787.jpg')" target="_self">
							<img class="rec-photo" src="http://images.media-allrecipes.com/userphotos/560x315/1167787.jpg" alt="Chef John's Chicken Marsala " title="Chef John's Chicken Marsala " itemprop="image">
							</a>
							<div class="icon-hasVideo">
								<a id="btn_RecipeVideo" class="icon--videoplay ng-isolate-scope" href="/video/4592/chef-johns-chicken-marsala?internalSource=picture_play&amp;referringId=237928&amp;referringContentType=recipe" data-internal-referrer-link="picture_play" target="_self"></a>
							</div>
							<a href="/recipe/237928/chef-johns-chicken-marsala/photos/1167787/" title="See Recipe Pictures" class="icon-photoPage" ng-click="$event.preventDefault(); openGalery(null, 237928, 'Chef John\u0027s Chicken Marsala ', 'http://images.media-allrecipes.com/userphotos/560x315/1167787.jpg')" target="_self">
							<span class="icon--circle" id="BI_openPhotoModal2" title="View Pictures">
							<span class="icon icon--picture"> </span>
							<span class="picture-count">45</span>
							</span>
							</a>
						</span>
						<div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
						<div class="photo-with-video">
							<div itemprop="video" itemscope="" itemtype="http://schema.org/VideoObject">
								<meta itemprop="thumbnailUrl" content="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201405/1007/1033249144001_3541520821001_th-3538231713001.jpg?pubId=1033249144001">
								<meta itemprop="image" content="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201405/1057/1033249144001_3541480671001_video-still-for-video-3538231713001.jpg?pubId=1033249144001">
								<meta itemprop="embedUrl" content="http://c.brightcove.com/services/viewer/federated_f9?&amp;width=640&amp;height=360&amp;flashID=myExperience1086638575001&amp;bgcolor=%23FFFFFF&amp;playerID=1094141761001&amp;playerKey=AQ~~%2CAAAA8JJyvME~%2CK4ozHF41iv1geq61oV_5IVDU4aWxAYLa&amp;wmode=transparent&amp;isVid=true&amp;isUI=true&amp;dynamicStreaming=true&amp;%40videoPlayer=3538231713001&amp;autoStart=true&amp;debuggerID=">
								<meta itemprop="name" content="Chef John's Chicken Marsala">
								<meta itemprop="description" content="A classic Italian chicken with mushrooms and wine sauce.">
								<meta itemprop="interactionCount" content="84184">
								<meta itemprop="uploadDate" content="6/2/2014 10:34:01 AM">
							</div>
						</div>
					</section>
					<section class="recipe-summary clearfix">
						<meta property="og:rating" content="4.69750881195068">
						<meta property="og:rating_scale" content="5">
						<h1 class="recipe-summary__h1" itemprop="name">Chef John's Chicken Marsala </h1>
						<!--rating stars-->
						<div class="recipe-summary__stars">
							<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.69750881195068">
								<img height="20" width="20" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="20" width="20" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="20" width="20" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="20" width="20" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="20" width="20" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
							</div>
							<span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="aggregate-rating">
								<meta itemprop="ratingValue" content="4.70">
								<meta itemprop="reviewCount" content="223">
							</span>
						</div>
						<!-- total made it count & read review link -->
						<div class="summary-stats-box">
							<div class="total-made-it ng-scope" data-ng-show="show" data-ng-controller="ar_controllers_recipe_summary" data-ng-init="init(687,null)">
								<span ng-controller="ar_controllers_recipe_reviews" ng-init="init(237928, 2, 9, 'Recipe', 5, 'MostHelpful')" class="ng-scope">
								<a class="read--reviews" ng-click="$event.preventDefault();reviewModalDialog(0, sortBy)" target="_self">
								<span class="made-it-count ng-binding" ng-bind="totalRecipeMadeCount |largeNumberDisplay">687</span><span>&nbsp;made it</span><span>&nbsp; |&nbsp;</span>
								<span class="review-count">223 reviews</span>
								</a>
								</span>
							</div>
						</div>
						<div class="submitter">
							<div class="submitter__img">
								<a href="/cook/foodwisheswithchefjohn/" target="_self"><img class="img-profile img-profile--submitter" src="http://images.media-allrecipes.com/userphotos/36x36/02/26/74/2267470.jpg" alt="Chef John" title="Chef John"></a>
								<span><span class="icon--cook-card-follower" title="Followers"></span><span>41K</span></span>
							</div>
							<p>
								<span class="submitter__byline">Recipe by: </span><span class="submitter__name" itemprop="author">Chef John</span>
							</p>
							<div class="submitter__description" itemprop="description">
								"Certain dishes have a special place in my heart and this is one of them. The first real restaurant job I had in San Francisco was at a small place called Ryan's Cafe. It was run by a husband and wife team, Michael and Lenore Ryan. They were true 'foodies' before that term had even been coined. This chicken Marsala dish was the most popular dish on the menu and the first one that I was taught."        
							</div>
						</div>
					</section>
				</div>
			</div>
			<div ng-controller="ar_controllers_recipe_toolbar" ng-init="init(237928, 'Recipe')" class="ng-scope">
				<div class="dropdown-heart ng-hide" data-show-on-scroll="700" ng-show="(yTrigger == true) &amp;&amp; (saved == false)">
					<a href="" class="save-on-click" ng-click="saveOnClick(237928, 'Recipe',&quot;Chef John's Chicken Marsala &quot;,'http://images.media-allrecipes.com/userphotos/250x250/1167787.jpg')">
					<span class="svg-icon--recipe-navbar--heart_off svg-icon--recipe-navbar--heart_off-dims"></span>
					<span>Save to favorites</span>
					</a>
				</div>
				<section class="recipe-navbar">
					<a href="" class="save-on-click" ng-click="saveOnClick(237928, 'Recipe',&quot;Chef John's Chicken Marsala &quot;,'http://images.media-allrecipes.com/userphotos/250x250/1167787.jpg')">
						<div ng-switch="" on="saved">
							<!-- ngSwitchWhen: true -->
							<!-- ngSwitchWhen: false -->
							<div ng-switch-when="false" class="ng-scope">
								<span class="svg-icon--recipe-navbar--heart_off svg-icon--recipe-navbar--heart_off-dims"></span>
								<span>Save</span>
							</div>
							<!-- end ngSwitchWhen: -->
						</div>
					</a>
					<a href="" ng-click="madeItClick()">
					<span class="svg-icon--recipe-navbar--i_made_it svg-icon--recipe-navbar--i_made_it-dims"></span>
					<span>I Made It</span>
					</a>
					<a href="" class="rate-on-click" ng-click="rateItOnClick(false)">
					<span class="svg-icon--recipe-navbar--rate svg-icon--recipe-navbar--rate-dims"></span>
					<span>Rate it</span>
					</a>
					<a href="" ng-click="openShareModal({&quot;RecipeId&quot;:237928,&quot;IsLoggedIn&quot;:false,&quot;PinterestUrl&quot;:&quot;http://pinterest.com/pin/create/button/?url=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=usspnt\u0026media=http://images.media-allrecipes.com/userphotos/250x250/1167787.jpg\u0026description=Chef%20John\u0027s%20Chicken%20Marsala%20%20-%20Allrecipes.com&quot;,&quot;FacebookUrl&quot;:&quot;https://facebook.com/sharer.php?u=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=ussfac&quot;,&quot;TwitterUrl&quot;:&quot;https://twitter.com/intent/tweet?url=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=usstwt\u0026text=Chef%20John\u0027s%20Chicken%20Marsala%20%20-%20Allrecipes.com\u0026via=Allrecipes&quot;,&quot;GooglePlusUrl&quot;:&quot;https://plus.google.com/share?url=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=ussgog&quot;,&quot;StumbleUpon&quot;:&quot;https://www.stumbleupon.com/submit?url=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=usssup&quot;,&quot;ImageUrl&quot;:&quot;http://images.media-allrecipes.com/userphotos/250x250/1167787.jpg&quot;,&quot;Title&quot;:&quot;Chef%20John\u0027s%20Chicken%20Marsala%20%20-%20Allrecipes.com&quot;,&quot;ShareSectionTitle&quot;:null})" hidewhenclicked="">
					<span class="icon svg-icon--recipe-navbar--share svg-icon--recipe-navbar--share-dims"></span>
					<span>Share</span>
					</a>
					<a id="print-recipe" ng-href="print/?recipeType=Recipe&amp;servings=2" target="_self" href="print/?recipeType=Recipe&amp;servings=2">
					<span class="svg-icon--recipe-navbar--print svg-icon--recipe-navbar--print-dims"></span>
					<span>Print</span>
					</a>
				</section>
			</div>
			<div data-ad-container-autocollapse="" class="ad-recipe-page-middle-container ad-mobile-only reserve-ad-space">
				<div id="ad-recipepagemiddle-2" class="ad-recipe-page-middle-2">
					<div id="div-gpt-mob-square-fixed-1" data-tier="1"></div>
				</div>
				<span class="advertisement">ADVERTISEMENT</span>
			</div>
			<section class="recipe-ingredients ng-scope" ng-controller="ar_controllers_recipe_ingredient" ng-init="init(2,237928,'Recipe',0, 'Chef John\'s Chicken Marsala ')">
				<div id="msg-add-to-shoppinglist" class="ng-hide">
					<span>Added to shopping list.</span>
					<a href="">Go to shopping list.</a>
				</div>
				<h2 class="heading__h2--gutters recipe-ingredients__header">Ingredients</h2>
				<span class="recipe-ingredients__header__toggles">
					<span class="ready-in-time__container">
					<span class="ready-in-time">1 h</span>
					<span class="icon--stats-clock"></span>
					</span>
					<meta id="metaRecipeServings" itemprop="recipeYield" content="2">
					<a href="" id="servings-button" popup-trigger="servingsSection">
					<span class="servings-count" ng-class="{'active': servingsSection_showing}"><span ng-bind="adjustedServings" class="ng-binding">2</span><span class="servings-count__desc" ng-class="{'active': servingsSection_showing}"> servings</span></span>
					<span class="icon--adjust-servings" ng-class="{'active': servingsSection_showing}"></span>
					</a>
					<a href="" id="nutrition-button" popup-trigger="nutritionSection">
					<span class="calorie-count" ng-class="{'active': nutritionSection_showing}"><span>799</span> <span class="calorie-count__desc" ng-class="{'active': nutritionSection_showing}"> cals</span></span>
					<span class="icon--nutrition-info" ng-class="{'active': nutritionSection_showing}"></span>
					</a>
				</span>
				<section class="adjustServings panel ng-hide nav-tab" ng-class="isServingsPopup ? 'nav-tab' : ''" popup-panel="servingsSection" ignore-global="false" id="d15913ea-02cd-4279-99a7-99721b218e37">
					<div id="msg-scale" style="display:none;">for serving adjustment</div>
					<div class="" style="display:none;">Serving size has been adjusted!</div>
					<div class="subtext">Original recipe yields 2 servings</div>
					<ul class="adjust-servings__form">
						<li>
							<input ng-model="servings" type="number" name="servings" data-role="none" id="servings" class="ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max" min="0" max="300" value="2" data-original="2" ng-focus="hideAds()" ng-blur="showAds()">
							<a class="btns-one-small" href="" ng-click="getIngredients(237928,'Recipe', true)" id="btn-adjust">Adjust</a>
						</li>
						<li class="adjust-servings__select">
							<label class="radio-lbl">
							<input type="radio" data-role="none" name="isMetric" checked="checked" ng-value="false" ng-model="isMetric" class="ng-pristine ng-untouched ng-valid" value="false"><span></span>
							</label>
							<span class="measurement-title">US</span>
						</li>
						<li class="adjust-servings__select">
							<label class="radio-lbl">
							<input type="radio" data-role="none" name="isMetric" ng-value="true" ng-model="isMetric" class="ng-pristine ng-untouched ng-valid" value="true"><span></span>              
							</label>
							<span class="measurement-title">Metric</span>
						</li>
					</ul>
					<div id="msg-directions" style="display:none;">Note:  Recipe directions are for original size.</div>
				</section>
				<section class="ng-hide recipe-nutrition panel nav-tab" ng-class="isNutritionPopup ? 'nav-tab' : ''" popup-panel="nutritionSection" ignore-global="false" id="30ac8b53-f3d8-487a-9f0a-acf850de77e9">
					<div class="recipe-nutrition__form" itemprop="nutrition" itemscope="" itemtype="http://schema.org/NutritionInformation" ng-show="fullNutrition===false">
						<h3>Nutrition</h3>
						<p ng-bind="'Amount per serving (' + servings + ' total)'" class="ng-binding">Amount per serving (2 total)</p>
						<ul class="nutrientLine">
							<li class="nutrientLine__item">Calories:</li>
							<li class="nutrientLine__item--amount" itemprop="calories"><span>799</span> kcal</li>
							<li class="nutrientLine__item--grid">
								<div class="nutriRating">
									<div class="nutriGradient" style="width: 40%;"></div>
								</div>
							</li>
							<li class="nutrientLine__item--percent">40%</li>
						</ul>
						<ul class="nutrientLine">
							<li class="nutrientLine__item">Fat: </li>
							<li class="nutrientLine__item--amount" itemprop="fatContent"><span>39</span> g</li>
							<li class="nutrientLine__item--grid">
								<div class="nutriRating">
									<div class="nutriGradient" style="width: 60%;"></div>
								</div>
							</li>
							<li class="nutrientLine__item--percent">60%</li>
						</ul>
						<ul class="nutrientLine">
							<li class="nutrientLine__item">Carbs: </li>
							<li class="nutrientLine__item--amount" itemprop="carbohydrateContent"><span>26.8</span>g</li>
							<li class="nutrientLine__item--grid">
								<div class="nutriRating">
									<div class="nutriGradient" style="width: 9%;"></div>
								</div>
							</li>
							<li class="nutrientLine__item--percent">9%</li>
						</ul>
						<ul class="nutrientLine">
							<li class="nutrientLine__item">Protein: </li>
							<li class="nutrientLine__item--amount" itemprop="proteinContent"><span>51.1</span> g</li>
							<li class="nutrientLine__item--grid">
								<div class="nutriRating">
									<div class="nutriGradient" style="width: 102%;"></div>
								</div>
							</li>
							<li class="nutrientLine__item--percent">102%</li>
						</ul>
						<ul class="nutrientLine">
							<li class="nutrientLine__item">Cholesterol: </li>
							<li class="nutrientLine__item--amount" itemprop="cholesterolContent"><span>185</span> mg</li>
							<li class="nutrientLine__item--grid">
								<div class="nutriRating">
									<div class="nutriGradient" style="width: 62%;"></div>
								</div>
							</li>
							<li class="nutrientLine__item--percent">62%</li>
						</ul>
						<ul class="nutrientLine">
							<li>Sodium: </li>
							<li class="nutrientLine__item--amount" itemprop="sodiumContent"><span>2391</span> mg</li>
							<li class="nutrientLine__item--grid">
								<div class="nutriRating">
									<div class="nutriGradient" style="width: 96%;"></div>
								</div>
							</li>
							<li class="nutrientLine__item--percent">96%</li>
						</ul>
						<p class="recipe-nutrition__blurb">Based on a 2,000 calorie diet</p>
						<a href="" class="btns-one-small" ng-click="showFullNutrition()">See full nutrition</a>
					</div>
					<div class="recipe-nutrition__form ng-hide" itemprop="nutrition" itemscope="" itemtype="http://schema.org/NutritionInformation" ng-show="fullNutrition===true">
						<!-- DETAILED NUTRITION -->
						<div id="nutritiontable" class="fullNutrition">
							<h3>Nutritional Information</h3>
							<p class="recipe-title ng-binding" ng-bind="::title">Chef John's Chicken Marsala </p>
							<div class="top light-underline">
								1 Serving <br>
								Servings Per Recipe: <span ng-bind="servings" class="ng-binding">2</span><br>
								<strong>Amount Per Serving</strong><br>
								<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.calories" hideunits="true" hidepercent="true" plainname="true"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.caloriesFromFat" boldvalue="true" hideunits="true" hidepercent="true" plainname="true"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
							</div>
							<div class="daily-value-container bold-underline">
								<label class="daily-value">% Daily Value *</label>
							</div>
							<ul class="nutrDetList bold-underline">
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.fat"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="indent light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.saturatedFat"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.cholesterol"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.sodium"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.carbohydrates"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="indent light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.sugars"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="indent light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.fiber"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.protein"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.vitaminA"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.vitaminC"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.calcium"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.iron"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.potassium"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.thiamin"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.niacin"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.vitaminB6"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li class="light-underline">
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.magnesium"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
								<li>
									<div class="nutrition-line-container ng-isolate-scope" nutrient="::nutrition.folate"> <span ng-hide="nutrient.hasCompleteData===true">** </span> <span ng-bind="::nutrient.name" ng-class="::(plainname==='true' ? 'plain' : 'bold')" class="ng-binding bold"></span><span>:</span> <span class="value"> <span ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)" ng-class="::(boldvalue==='true' ? 'bold' : 'plain')" class="ng-binding plain"></span> </span> <span ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-hide">%</span><span ng-bind="::nutrient.percentDailyValue" ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')" class="pull-right ng-binding ng-hide"></span> </div>
								</li>
							</ul>
							<ul class="key">
								<li>
									<span class="left">*</span>
									<span class="right">Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs.</span>
								</li>
								<li>
									<span class="left">**</span>
									<span class="right">Nutrient information is not available for all ingredients. Amount is based on available nutrient data.</span>
								</li>
								<li>
									<span class="left">(-)</span>
									<span class="right">Information is not currently available for this nutrient. If you are following a medically restrictive diet, please consult your doctor or registered dietitian before preparing this recipe for personal consumption.</span>
								</li>
							</ul>
							<div class="button-container">
								<a href="" class="btns-one-small" ng-click="showSummaryNutrition()">Hide full nutrition</a>
							</div>
						</div>
					</div>
				</section>
				<div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
				<link href="http://css01.media-allrecipes.com/assets/deployables/v-1.55.0.3383/local-offers-css.bundled.Css" rel="stylesheet">
				<div class="lo-reservespace">
					<!-- ngIf: localOffersService.localOffersFeatureEnabled() -->
					<div class="lo-column ng-scope" ng-controller="ar_controllers_local_offers" ng-if="localOffersService.localOffersFeatureEnabled()">
						<div class="lo-container--slider ">
							<div class="title">
								<h2>On Sale</h2>
								<span>What's on sale near you.</span>
							</div>
							<div class="onoffswitch">
								<input type="checkbox" name="myonoffswitch" class="onoffswitch-checkbox ng-pristine ng-untouched ng-valid" id="myonoffswitch" data-ng-model="userToggleEnabled" ng-model-options="{ getterSetter: true }">
								<label class="onoffswitch-label" for="myonoffswitch" id="local-offers-toggle-slider">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
								</label>
							</div>
							<div data-ng-show="userToggleEnabled()">
								<input type="checkbox" data-ng-click="showSettings = !showSettings" data-ng-class="{active:showSettings}">
								<label class="location-toggle-btn"></label>
							</div>
							<div class="dotted-line--local-offers"></div>
						</div>
						<div data-ng-show="localOffersService.localOffersUserEnabled()">
							<script type="text/html" id="stores-template">
								<![CDATA[
								    <div class="retailer carousel-item">
								        <div class="logo">
								            <img src="<%= this.imageUrl %>"/>
								        </div>
								        <ul class="info">
								            <li><%= this.name %></li>
								            <li><%= this.address %></li>
								            <li><%= this.city %>, <%= this.state %> <%= this.zip %></li>
								            <li class="advertisement"><%= this.sponsoredFlag == true ? "Sponsored" : "" %> </li>
								        </ul>
								    </div>
								]]>
							</script>
							<section class="sail local-offers ng-hide" ng-show="showSettings">
								<div class="buttons-container">
									<div class="lo-container--settings">
										<button class="button-reg find-me ui-link" data-ng-click="findMe()"><span class="pin icon icon--map-pin--white"></span> Find Me</button>
										<p>or</p>
										<div class="zip-container">
											<input type="text" max="99999" placeholder="Enter zip code" class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset ng-pristine ng-untouched ng-valid" ng-model="userZipCode">
											<button class="button-reg ui-link" data-ng-click="getRetailersByZipCode()">OK</button>
										</div>
										<p>Sort stores by</p>
										<button class="button-reg sort-by ui-link active" data-ng-class="{active:sortingOption === 'ClosestToMe'}" data-ng-click="sortRetailersList('ClosestToMe')">Closest to me</button>
										<button class="button-reg sort-by ui-link" data-ng-class="{active:sortingOption === 'MostDeals'}" data-ng-click="sortRetailersList('MostDeals')">Most deals</button>
									</div>
									<div class="dotted-line--local-offers"></div>
								</div>
							</section>
							<section class="sail local-offers">
								<div class="error-msg" data-ng-show="errorMessage">
									<span data-ng-bind="errorMessage" class="ng-binding">Hmm. It looks like these ingredients aren't on sale today.</span>
								</div>
							</section>
							<div class="sail local-offers" id="storesOutput">
								<div class="carousel carousel-slide" data-transition="slide">
									<nav class="carousel-nav" style="display:none">
										<!--<a href='#' class='locate input-circle' title=''></a>--><a href="#next" class="next arrows input-circle" aria-hidden="true" title="Next"><span class="icon icon--chevron-right"></span></a>
									</nav>
								</div>
							</div>
							<div class="local-offers">
								<div class="lo-message-box ng-hide" ng-show="displayOverlay">
									<div class="lo-msg-arrow-up"></div>
									<div class="lo-message-box__box">
										<div class="lo-message-box__title">
											<div class="lo-message-box__title__text">These nearby stores have ingredients on sale!</div>
											<div class="lo-message-box__title__icon">
												<span class="icon--close" ng-click="closeOverlay()"></span>
											</div>
										</div>
										<a>
											<div class="lo-message-box__button" ng-click="closeOverlay(); findMe();">
												<div class="lo-message-box__button__title">Find the closest stores</div>
												<div class="lo-message-box__button__subtitle">(uses your location)</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div id="clientID"></div>
					</div>
					<!-- end ngIf: localOffersService.localOffersFeatureEnabled() -->
				</div>
				<ul class="checklist dropdownwrapper list-ingredients-1" ng-hide="reloaded" id="lst_ingredients_1">
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="28770" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,28770)">
						<span class="recipe-ingred_txt added" data-id="28770" data-nameid="28770" itemprop="ingredients">2 skin-on, boneless chicken breast halves</span>
						</label>
						<!-- ngRepeat: deal in deals["28770"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="16421" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,16421)">
						<span class="recipe-ingred_txt added" data-id="16421" data-nameid="16421" itemprop="ingredients">1 teaspoon salt and ground black pepper to taste</span>
						</label>
						<!-- ngRepeat: deal in deals["16421"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="16157" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,16157)">
						<span class="recipe-ingred_txt added" data-id="16157" data-nameid="16157" itemprop="ingredients">3 tablespoons butter, divided</span>
						</label>
						<!-- ngRepeat: deal in deals["16157"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="9725" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,9725)">
						<span class="recipe-ingred_txt added" data-id="9725" data-nameid="9725" itemprop="ingredients">2 tablespoons olive oil</span>
						</label>
						<!-- ngRepeat: deal in deals["9725"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="4378" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,4378)">
						<span class="recipe-ingred_txt added" data-id="4378" data-nameid="4378" itemprop="ingredients">5 white mushrooms, sliced</span>
						</label>
						<!-- ngRepeat: deal in deals["4378"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="4663" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,4663)">
						<span class="recipe-ingred_txt added" data-id="4663" data-nameid="4663" itemprop="ingredients">1 shallot, minced</span>
						</label>
						<!-- ngRepeat: deal in deals["4663"] -->
					</li>
				</ul>
				<ul class="checklist dropdownwrapper list-ingredients-2" ng-hide="reloaded" id="lst_ingredients_2">
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="1684" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,1684)">
						<span class="recipe-ingred_txt added" data-id="1684" data-nameid="1684" itemprop="ingredients">1 tablespoon all-purpose flour</span>
						</label>
						<!-- ngRepeat: deal in deals["1684"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="20234" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,20234)">
						<span class="recipe-ingred_txt added" data-id="20234" data-nameid="20234" itemprop="ingredients">1 cup Marsala wine</span>
						</label>
						<!-- ngRepeat: deal in deals["20234"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="16133" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,16133)">
						<span class="recipe-ingred_txt added" data-id="16133" data-nameid="16133" itemprop="ingredients">2 cups chicken stock</span>
						</label>
						<!-- ngRepeat: deal in deals["16133"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="4409" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,4409)">
						<span class="recipe-ingred_txt added" data-id="4409" data-nameid="4409" itemprop="ingredients">2 tablespoons chopped fresh parsley</span>
						</label>
						<!-- ngRepeat: deal in deals["4409"] -->
					</li>
					<li class="checkList__line">
						<label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
						<input data-id="16157" name="ingredientCheckbox" data-role="none" type="checkbox" value="N" ng-click="saveIngredient($event,16157)">
						<span class="recipe-ingred_txt added" data-id="16157" data-nameid="16157" itemprop="ingredients">1 teaspoon cold butter</span>
						</label>
						<!-- ngRepeat: deal in deals["16157"] -->
					</li>
					<li class="checkList__line">
						<label class="checkList__item" id="btn-addtolist">
						<input ng-model="allIngredientsCheckBox" name="slCheckbox" data-role="none" type="checkbox" ng-click="saveRecipe('237928','Recipe')" class="ng-pristine ng-untouched ng-valid">
						<span class="recipe-ingred_txt added white">Add all ingredients to list</span>
						</label>
					</li>
				</ul>
				<!-- ngRepeat: column in ingredientColumns -->
				<div class="lo-smu-output ng-scope ng-hide" data-ng-controller="ar_controllers_recipe_mws" data-ng-show="mws">
					<div class="lo-smu-container">
						<img class="lo-smu-photo">
						<p class="lo-smu-title">May we suggest</p>
						<div class="lo-smu-text">
							<p class="offer-name ng-binding" data-ng-bind-html="mws.defaultDisplayDescription"></p>
							<p data-ng-bind-html="mws.title" class="ng-binding"></p>
							<p><a data-no-follow-if-external="" data-ng-click="fireClickPixel(mws.clickPixels)" data-ng-href="" target="_blank" data-ng-bind-html="mws.clickThroughText" class="ng-binding" rel="nofollow"></a></p>
							<p class="lo-smu-ad">ADVERTISEMENT</p>
							<div class="tracking-element ng-isolate-scope" load-dom-script="" script="mws.moatUrl"></div>
							<!-- ngRepeat: trackingUrl in mws.trackingPixels track by $index -->
							<!-- ngRepeat: clickPixel in listClickPixels track by $index -->
						</div>
					</div>
				</div>
			</section>
			<script>
				var userInformation =
				    {
				        clientIp: '58.187.1.243'
				    };
			</script>
			<section class="recipe-directions ng-scope" data-ng-controller="ar_controllers_directions" data-ng-init="init(237928)">
				<h2 class=" heading__h2--gutters">
					Directions
				</h2>
				<span class="recipe-directions__header--toggles">
				<span class="recipe-directions--print"><a ng-href="print/?recipeType=Recipe&amp;servings=2" data-internal-referrer-link="recipe button" data-click-id="recipe button" class="ng-isolate-scope" target="_self" href="print/?recipeType=Recipe&amp;servings=2"><span class="kf-text print">Print</span> <span class="icon--recipe-directions-print"></span></a></span>
				<a href="/video/4592/chef-johns-chicken-marsala?internalSource=title_play&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=recipe video button" class="icon--videoplay-small-gray ng-isolate-scope" data-internal-referrer-link="title_play" data-click-id="recipe video button" target="_self"></a>
				</span>
				<div class="directions--section">
					<div class="directions--section__steps">
						<!-- cooking stats -->
						<ul class="prepTime">
							<li class="prepTime__item"><span class="icon--stats-clock"></span></li>
							<li class="prepTime__item">
								<p class="prepTime__item--type">Prep</p>
								<time itemprop="prepTime" datetime="PT20M"><span class="prepTime__item--time">20</span> m</time>
							</li>
							<li class="prepTime__item">
								<p class="prepTime__item--type">Cook</p>
								<time itemprop="cookTime" datetime="PT40M"><span class="prepTime__item--time">40</span> m</time>
							</li>
							<li class="prepTime__item">
								<p class="prepTime__item--type">Ready In</p>
								<time itemprop="totalTime" datetime="PT1H"><span class="prepTime__item--time">1</span> h</time>
							</li>
						</ul>
						<ol class="list-numbers recipe-directions__list" itemprop="recipeInstructions">
							<li class="step" ng-class="{'finished': stepIsActive0}" ng-click="stepIsActive0 = !stepIsActive0"><span class="recipe-directions__list--item">Season chicken breasts all over with salt and pepper.</span></li>
							<li class="step" ng-class="{'finished': stepIsActive1}" ng-click="stepIsActive1 = !stepIsActive1"><span class="recipe-directions__list--item">Melt 1 1/2 tablespoons butter and olive oil in a skillet over medium heat. Cook chicken breasts, skin-side down, in hot butter and oil until browned, about 5 minutes. Flip and cook until breasts are almost cooked through, about 5 minutes more. Transfer chicken breasts to a plate.</span></li>
							<li class="step" ng-class="{'finished': stepIsActive2}" ng-click="stepIsActive2 = !stepIsActive2"><span class="recipe-directions__list--item">Melt 1 1/2 tablespoons butter in the same skillet over medium-high heat. Saute mushrooms with a pinch of salt and a pinch of pepper in hot butter until mushrooms are golden, 5 to 7 minutes. Add minced shallot; cook and stir until softened, 2 to 3 minutes. Sprinkle flour over the top and cook and stir until the bitterness of the flour cooks off, 3 to 4 minutes.</span></li>
							<li class="step" ng-class="{'finished': stepIsActive3}" ng-click="stepIsActive3 = !stepIsActive3"><span class="recipe-directions__list--item">Pour wine into skillet and bring to a boil; cook and stir until wine reduces and sauce thickens, 3 to 4 minutes. Add chicken stock; bring to a simmer and cook until slightly reduced, 3 to 5 minutes more.</span></li>
							<li class="step" ng-class="{'finished': stepIsActive4}" ng-click="stepIsActive4 = !stepIsActive4"><span class="recipe-directions__list--item">Return chicken breasts to the skillet, reduce heat to low, and cook chicken, turning once, until no longer pink in the center and the juices run clear, about 10 minutes. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C). Remove from heat.</span></li>
							<li class="step" ng-class="{'finished': stepIsActive5}" ng-click="stepIsActive5 = !stepIsActive5"><span class="recipe-directions__list--item">Move chicken to one side of the skillet and tilt the skillet so that the sauce pools at the bottom. Stir parsley and 1 teaspoon cold butter into the sauce, stirring constantly, until sauce is shiny and butter is completely melted. Transfer chicken breasts to plates and spoon mushrooms and sauce over the top.</span></li>
						</ol>
						<ol class="list-numbers recipe-directions__list recipeNotes ng-hide" ng-show="itemNote">
							<li class="step"><span class="recipe-directions__list--item ng-binding" ng-bind-html="itemNote"></span></li>
						</ol>
					</div>
					<div class="directions--section__right-side">
						<div class="directions--section__tipsAndTricks">
							<div class="directions--section__tipsAndTricks__title">
								<span class="directions--section__tipsAndTricks__title__font">You might also like</span>
							</div>
							<div class="relatedVideos">
								<div class="relatedVideos__item">
									<a href="/video/4537/chef-johns-chicken-and-olives?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 1" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 1" class="ng-isolate-scope" target="_self">
									<img class="relatedVideos__thumbnail" src="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201403/2174/1033249144001_3415726411001_th-3404229498001.jpg?pubId=1033249144001">
									</a>
									<div class="relatedVideos__thumbnail__icon-hasVideo">
										<a class="icon--videoplay ng-isolate-scope" href="/video/4537/chef-johns-chicken-and-olives?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 1" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 1" target="_self"></a>
									</div>
									<div class="relatedVideos__details">
										<a href="/video/4537/chef-johns-chicken-and-olives?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 1" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 1" class="ng-isolate-scope" target="_self">
											<span class="relatedVideos__details_title">Chef John's Chicken and Olives</span>
											<p class="relatedVideos__details__description">Moist, tender seared chicken finishes in a savory olive sauce.</p>
										</a>
									</div>
								</div>
								<div class="relatedVideos__item">
									<a href="/video/4053/chef-johns-salt-roasted-chicken?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 2" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 2" class="ng-isolate-scope" target="_self">
									<img class="relatedVideos__thumbnail" src="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201310/1244/1033249144001_2738115580001_th-2737859221001.jpg?pubId=1033249144001">
									</a>
									<div class="relatedVideos__thumbnail__icon-hasVideo">
										<a class="icon--videoplay ng-isolate-scope" href="/video/4053/chef-johns-salt-roasted-chicken?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 2" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 2" target="_self"></a>
									</div>
									<div class="relatedVideos__details">
										<a href="/video/4053/chef-johns-salt-roasted-chicken?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 2" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 2" class="ng-isolate-scope" target="_self">
											<span class="relatedVideos__details_title">Chef John's Salt Roasted Chicken</span>
											<p class="relatedVideos__details__description">See how to make earth’s easiest (and possibly tastiest) roasted chicken.</p>
										</a>
									</div>
								</div>
								<div class="relatedVideos__item">
									<a href="/video/4840/chef-johns-chicken-tikka-masala?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 3" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 3" class="ng-isolate-scope" target="_self">
									<img class="relatedVideos__thumbnail" src="http://brightcove.vo.llnwd.net/v1/unsecured/media/1033249144001/201410/77/1033249144001_3841708474001_th-3839504643001.jpg?pubId=1033249144001">
									</a>
									<div class="relatedVideos__thumbnail__icon-hasVideo">
										<a class="icon--videoplay ng-isolate-scope" href="/video/4840/chef-johns-chicken-tikka-masala?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 3" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 3" target="_self"></a>
									</div>
									<div class="relatedVideos__details">
										<a href="/video/4840/chef-johns-chicken-tikka-masala?internalSource=tips and tricks&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=tips and tricks 3" data-internal-referrer-link="tips and tricks" data-click-id="tips and tricks 3" class="ng-isolate-scope" target="_self">
											<span class="relatedVideos__details_title">Chef John's Chicken Tikka Masala</span>
											<p class="relatedVideos__details__description">Coconut milk, instead of cream, is the key to this classic chicken curry dish.</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mag-cta-desktop">
							<div class="mag-cta ng-scope" data-ng-controller="ar_controllers_mag_subscription">
								<a ng-href="http://armagazine.com/get-the-magazine" target="_blank" class="ad-mag-homeBtm" href="http://armagazine.com/get-the-magazine">
									<h2>Get the magazine</h2>
									<img class="ad-mag-homeBtm__th" alt="Subscribe to Allrecipes Magazine" title="Allrecipes Magazine" src="http://images.media-allrecipes.com/images/61544.png">
									<div class="ad-mag-homeBtm__text">
										<h4> Get a full year for just $7.99!</h4>
										<p>Cook 5-star weekday dinners every time.</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="recipe-footnotes">
				<h4 class="recipe-footnotes__h4">
					Footnotes
				</h4>
				<ul>
					<li><span class="recipe-footnotes__header">Tip</span></li>
					<li>Aluminum foil helps keep food moist, ensures it cooks evenly, keeps leftovers fresh, and makes clean-up easy.</li>
				</ul>
			</section>
			<div data-ng-controller="ar_controllers_made_it" data-ng-init="init(237928, 0, '', '', 0, 0, 0, 687)" class="ng-scope">
				<!-- made recipe toolbar -->
				<section id="recipe-toolbar" class="recipe-toolbar">
					<!-- photo upload block -->
					<div class="recipe-toolbar__buttons">
						<div class="toolbar-i-made-it">
							<ul>
								<li>
									<a class="btns-one-small bg-orange-gold" data-ng-click="save();">
										<span class="svg-icon--recipe-page--imadeit-white svg-icon--recipe-page--imadeit-white-dims"></span>
										<h4 class="light">I made it!</h4>
									</a>
								</li>
							</ul>
						</div>
						<div data-ng-controller="ar_controllers_photo_upload" ng-init="init(0,237928,true,'i made it')" class="ng-scope">
						</div>
						<div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
					</div>
				</section>
			</div>
			<h2 class="heading__h2--gutters share">Share</h2>
			<section ng-controller="ar_controllers_share_item" id="shareRecipe" class="ng-scope">
				<section class="recipe-share share-container">
					<a ng-click="socialShareStart('237928', 'pinterest'); socialShareNavigate('http://pinterest.com/pin/create/button/?url=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=usspnt&amp;media=http://images.media-allrecipes.com/userphotos/250x250/1167787.jpg&amp;description=Chef%20John's%20Chicken%20Marsala%20%20-%20Allrecipes.com', '_blank', PinterestTargetParams);" class="pinterest"></a>
					<a ng-click="socialShareStart('237928', 'facebook'); socialShareNavigate('https://facebook.com/sharer.php?u=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=ussfac', '_blank', FacebookTargetParams);" class="facebook"></a>
					<a ng-click="socialShareStart('237928', 'stumbleupon'); socialShareNavigate('https://www.stumbleupon.com/submit?url=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=usssup', '_blank', StumbleTargetParams);" class="stumbleUpon"></a>
					<a ng-click="socialShareStart('237928', 'twitter'); socialShareNavigate('https://twitter.com/intent/tweet?url=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=usstwt&amp;text=Chef%20John's%20Chicken%20Marsala%20%20-%20Allrecipes.com&amp;via=Allrecipes', '_blank', TwitterTargetParams);" class="twitter"></a>
					<a ng-click="socialShareStart('237928', 'google+'); socialShareNavigate('https://plus.google.com/share?url=http://allrecipes.com/recipe/237928/chef-johns-chicken-marsala/?lnkid=ussgog', '_blank', GoogleTargetParams);" class="google"></a>
					<a href="" class="email" ng-click="toggleEmailForm(false)"></a>
				</section>
				<section class="email-recipe">
					<form name="emailForm" ng-submit="sendEmail('237928', 'recipe')" novalidate="" class="ng-pristine ng-valid ng-valid-email">
						<section class="show-form ng-hide" ng-show="showForm">
							<div class="input-wrap">
								<input type="email" placeholder="Recipient's email" name="txtEmail" ng-model="toEmailAddress" class="ng-valid-email ng-pristine ng-untouched ng-valid" ng-focus="hideAds(); AddEmailEnabled = true;" ng-blur="showAds()">
								<a class="btn-basic--small ng-hide" ng-show="AddEmailEnabled" ng-click="addEmail()">Add</a>
							</div>
							<ol class="email-recipe__recipients">
								<!-- ngRepeat: email in toEmailList -->
							</ol>
							<div class="email-recipe__buttons">
								<a class="btns-two-small" ng-click="cancel()">Cancel</a>
								<input class="btns-two-small" type="submit" value="Send">
								<span ng-bind="errorMessage" class="ng-binding"></span>
							</div>
						</section>
					</form>
				</section>
			</section>
			<section class="grid similar-recipes--details ng-scope" id="grid_recipeListItems" ng-controller="ar_controller_similar_recipes" ng-init="init()">
				<h2 class="heading__h2--gutters similar notPhoneView">Similar: <span><a href="" ng-class="{ active: isSet(1) }" ng-click="setTab(1, 'recipes')" class="active">Recipes</a><a href="" ng-class="{ active: isSet(2) }" ng-click="setTab(2, 'videos')">Videos</a><a href="" ng-class="{ active: isSet(3) }" ng-click="setTab(3, 'categories')">Categories</a><a href="" ng-class="{ active: isSet(4) }" ng-click="setTab(4, 'articles')">Articles</a></span></h2>
				<h2 class="heading__h2--gutters similar phoneView" popup-trigger="similar-content-nav" id="f6f4b636-7dbe-4dd2-a39d-95ebf2751e1c">
					Similar: <span class="selected-content ng-binding">recipes<span class="icon--chevron-down"></span></span>
					<span popup-panel="similar-content-nav" class="similar-content-nav ng-hide" id="de951ada-fd3d-4eb7-814f-2017d26bf487">
					<a href="" ng-class="{ active: isSet(1) }" ng-click="setTab(1, 'recipes')" class="active">recipes</a>
					<a href="" ng-class="{ active: isSet(2) }" ng-click="setTab(2, 'videos')">videos</a>
					<a href="" ng-class="{ active: isSet(3) }" ng-click="setTab(3, 'categories')">categories</a>
					<a href="" ng-class="{ active: isSet(4) }" ng-click="setTab(4, 'articles')">articles</a>
					</span>
				</h2>
				<div class="similar-recipes__wrap">
					<!--navigation for carousel -->
					<div class="carousel-navigation">
						<!-- ngIf: similarRecipes_atLeftBound===false -->
						<!-- ngIf: similarRecipes_atRightBound===false -->
						<a carousel-scroll-right="similarRecipes" ng-if="similarRecipes_atRightBound===false" class="ng-scope" id="bb8db06b-a399-4940-b573-61f3f5b0d678">
							<div class="icon--chevron-right"></div>
						</a>
						<!-- end ngIf: similarRecipes_atRightBound===false -->
					</div>
					<div class="similar-recipes__container">
						<div id="scrollDiv" carousel-scroll-target="similarRecipes" scroll-event="">
							<div id="insideScroll" class="grid slider">
								<ul class="recipe-carousel" id="similarRecipes" ng-show="isSet(1)">
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="8974" data-type="'Recipe'" data-name="&quot;Easier Chicken Marsala&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/1476038.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/8974/easier-chicken-marsala/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_1" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_1" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/1476038.jpg" alt="Easier Chicken Marsala Recipe - Eat well, eat healthy with this herbed chicken sauteed with mushrooms and Marsala wine." title="Easier Chicken Marsala" src="http://images.media-allrecipes.com/userphotos/250x250/1476038.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Easier Chicken Marsala</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.5">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.50">
														<span class="grid-col__reviews">520</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="221887" data-type="'Recipe'" data-name="&quot;Chef John's Chicken and Mushrooms&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/3548022.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/221887/chef-johns-chicken-and-mushrooms/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_2" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_2" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/3548022.jpg" alt="Chef John's Chicken and Mushrooms Recipe - Succulent chicken breasts topped with perfectly sauteed mushrooms create a delicious, yet very simple, dish." title="Chef John's Chicken and Mushrooms" src="http://images.media-allrecipes.com/userphotos/250x250/3548022.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Chef John's Chicken and Mushrooms</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.65999984741211">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.66">
														<span class="grid-col__reviews">325</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="8887" data-type="'Recipe'" data-name="&quot;Chicken Marsala&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/1043747.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/8887/chicken-marsala/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_3" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_3" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/1043747.jpg" alt="Chicken Marsala Recipe - Herbed chicken in a sweet Marsala and mushroom sauce -- sounds simple, and it is -- simply delicious." title="Chicken Marsala" src="http://images.media-allrecipes.com/userphotos/250x250/1043747.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Chicken Marsala</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.53000020980835">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.53">
														<span class="grid-col__reviews">3K</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="17672" data-type="'Recipe'" data-name="&quot;Chicken Marsala II&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/753411.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/17672/chicken-marsala-ii/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_4" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_4" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/753411.jpg" alt="Chicken Marsala II Recipe - Flour coated chicken sauteed with a mushroom and Marsala wine sauce. Mmmm, rich Marsala sauce, tender chicken - this recipe is sure to please! Great served with rice and veggies, if desired." title="Chicken Marsala II" src="http://images.media-allrecipes.com/userphotos/250x250/753411.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Chicken Marsala II</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.44000005722046">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.44">
														<span class="grid-col__reviews">124</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="47688" data-type="'Recipe'" data-name="&quot;Chicken Marsala Florentine&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/571416.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/47688/chicken-marsala-florentine/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_5" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_5" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/571416.jpg" alt="Chicken Marsala Florentine Recipe - This is a gorgeous chicken dish with sun-dried tomatoes, spinach, and mushrooms. It is so wonderful when served with garlic mashed potatoes. It tastes fantastic!" title="Chicken Marsala Florentine" src="http://images.media-allrecipes.com/userphotos/250x250/571416.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Chicken Marsala Florentine</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.55000019073486">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.55">
														<span class="grid-col__reviews">246</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="237499" data-type="'Recipe'" data-name="&quot;Chef John's Chicken French &quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/2026862.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/237499/chef-johns-chicken-french/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_6" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_6" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/2026862.jpg" alt="Chef John's Chicken French  Recipe - Chef John's recipe for chicken French, a dish with origins in New York, is made with chicken in a light, lemony white wine sauce." title="Chef John's Chicken French " src="http://images.media-allrecipes.com/userphotos/250x250/2026862.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Chef John's Chicken French </h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.3899998664856">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.39">
														<span class="grid-col__reviews">55</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="239867" data-type="'Recipe'" data-name="&quot;Chef John's Chicken Tikka Masala&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/3537206.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/239867/chef-johns-chicken-tikka-masala/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_7" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_7" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/3537206.jpg" alt="Chef John's Chicken Tikka Masala Recipe - It requires a few ingredients and a little time, but Chef John's recipe for chicken tikka masala is well worth the effort." title="Chef John's Chicken Tikka Masala" src="http://images.media-allrecipes.com/userphotos/250x250/3537206.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Chef John's Chicken Tikka Masala</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.76999998092651">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.77">
														<span class="grid-col__reviews">99</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="24010" data-type="'Recipe'" data-name="&quot;Easy Chicken Marsala&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/6295.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/24010/easy-chicken-marsala/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_8" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_8" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/6295.jpg" alt="Easy Chicken Marsala Recipe - Chicken breasts are sauteed, then braised in Marsala wine and cream with mushrooms and green onion. Chicken Marsala simplified!" title="Easy Chicken Marsala" src="http://images.media-allrecipes.com/userphotos/250x250/6295.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Easy Chicken Marsala</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.36999988555908">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.37">
														<span class="grid-col__reviews">114</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="239896" data-type="'Recipe'" data-name="&quot;Crunchy French Onion Chicken&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/1681349.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/239896/crunchy-french-onion-chicken/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_9" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_9" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/1681349.jpg" alt="Crunchy French Onion Chicken Recipe - This quick and easy recipe makes an awesome crunchy baked chicken that goes with any side dish." title="Crunchy French Onion Chicken" src="http://images.media-allrecipes.com/userphotos/250x250/1681349.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Crunchy French Onion Chicken</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.28999996185303">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.29">
														<span class="grid-col__reviews">36</span>
													</span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar recipe')">
										<div class="slider-card__recipes">
											<a ng-class="{ highlighted : saved }" title="Save this recipe" data-ng-show="showHeart" class="favorite ng-isolate-scope" data-id="30522" data-type="'Recipe'" data-name="&quot;Unbelievable Chicken&quot;" data-imageurl="'http://images.media-allrecipes.com/userphotos/250x250/259036.jpg'"><span class="ng-binding"></span></a>
											<a href="/recipe/30522/unbelievable-chicken/?internalSource=similar_recipe_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_10" data-internal-referrer-link="similar_recipe_banner" data-click-id="simslot_10" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/250x250/259036.jpg" alt="Unbelievable Chicken Recipe - Your taste buds will thrill to this exciting blend of sweet and sour. Grilled chicken never tasted better or more juicy!" title="Unbelievable Chicken" src="http://images.media-allrecipes.com/userphotos/250x250/259036.jpg" data-container="similarRecipes">
												<h3 class="slider-card__h3">Unbelievable Chicken</h3>
											</a>
											<a href="">
												<div class="slider-card__ratings" data-scroll-to-anchor="reviews">
													<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4.48000001907349">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
														<img height="16" width="16" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
													</div>
													<span class="aggregate-rating">
														<meta content="4.48">
														<span class="grid-col__reviews">2K</span>
													</span>
												</div>
											</a>
										</div>
									</li>
								</ul>
								<ul class="video-carousel ng-hide" id="relatedVideos" ng-show="isSet(2)">
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/4592/chef-johns-chicken-marsala?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_1" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_1" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201405/1057/1033249144001_3541480671001_video-still-for-video-3538231713001.jpg?pubId=1033249144001" alt="Chef John's Chicken Marsala Recipe and Video - A classic Italian chicken with mushrooms and wine sauce." title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/4592/chef-johns-chicken-marsala"></span>
												<h3 class="slider-card__h3">Chef John's Chicken Marsala</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">84K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/4554/chef-johns-chicken-french?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_2" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_2" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201404/857/1033249144001_3472232476001_video-still-for-video-3469142031001.jpg?pubId=1033249144001" alt="Chef John's Chicken French Recipe and Video - See how to make tender, tasty chicken in a simple wine and butter sauce." title="Chef John's Chicken French" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/4554/chef-johns-chicken-french"></span>
												<h3 class="slider-card__h3">Chef John's Chicken French</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">22K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/355/chef-johns-chicken-and-mushrooms?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_3" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_3" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/e1/pd/1033249144001/1033249144001_1211514749001_ari-origin05-arc-149-1318292614254.jpg?pubId=1033249144001" alt="Chef John's Chicken and Mushrooms  Recipe and Video - Make a delicious dinner with just two basic ingredients! Technique is the trick. " title="Chef John's Chicken and Mushrooms " src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/355/chef-johns-chicken-and-mushrooms"></span>
												<h3 class="slider-card__h3">Chef John's Chicken and Mushrooms </h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">593K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/5022/chef-johns-chicken-under-a-brick?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_4" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_4" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/v1/unsecured/media/1033249144001/201504/483/1033249144001_4151921469001_video-still-for-video-4070268792001.jpg?pubId=1033249144001" alt="Chef John's Chicken Under a Brick Recipe and Video - Discover Chef John's unique way to produce a gorgeous, juicy and flavorful bird." title="Chef John's Chicken Under a Brick" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/5022/chef-johns-chicken-under-a-brick"></span>
												<h3 class="slider-card__h3">Chef John's Chicken Under a Brick</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">20K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/5316/chef-johns-pan-roasted-chicken-breasts?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_5" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_5" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/v1/unsecured/media/1033249144001/201511/2846/1033249144001_4609899541001_4603664214001-vs.jpg?pubId=1033249144001" alt="Chef John's Pan-Roasted Chicken Breasts Recipe and Video - Try this quick and easy stovetop chicken recipe with butter pan sauce." title="Chef John's Pan-Roasted Chicken Breasts" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/5316/chef-johns-pan-roasted-chicken-breasts"></span>
												<h3 class="slider-card__h3">Chef John's Pan-Roasted Chicken Br...</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">77K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/4714/chef-johns-broiled-chicken?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_6" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_6" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201408/1167/1033249144001_3719567758001_video-still-for-video-3714551599001.jpg?pubId=1033249144001" alt="Chef John's Broiled Chicken Recipe and Video - See how to make juicy broiled chicken with perfectly crispy skin. " title="Chef John's Broiled Chicken" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/4714/chef-johns-broiled-chicken"></span>
												<h3 class="slider-card__h3">Chef John's Broiled Chicken</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">34K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/5222/chef-johns-spicy-caramel-chicken?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_7" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_7" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/v1/unsecured/media/1033249144001/201509/3004/1033249144001_4457682582001_video-still-for-video-4455123752001.jpg?pubId=1033249144001" alt="Chef John's Spicy Caramel Chicken Recipe and Video - Spicy, sweet, and savory stir-fried chicken with peanuts and cilantro." title="Chef John's Spicy Caramel Chicken" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/5222/chef-johns-spicy-caramel-chicken"></span>
												<h3 class="slider-card__h3">Chef John's Spicy Caramel Chicken</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">9K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/4840/chef-johns-chicken-tikka-masala?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_8" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_8" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/v1/unsecured/media/1033249144001/201410/1957/1033249144001_3841705515001_video-still-for-video-3839504643001.jpg?pubId=1033249144001" alt="Chef John's Chicken Tikka Masala Recipe and Video - Coconut milk, instead of cream, is the key to this classic chicken curry dish." title="Chef John's Chicken Tikka Masala" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/4840/chef-johns-chicken-tikka-masala"></span>
												<h3 class="slider-card__h3">Chef John's Chicken Tikka Masala</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">39K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/4053/chef-johns-salt-roasted-chicken?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_9" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_9" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201310/2820/1033249144001_2738042672001_video-still-for-video-2737859221001.jpg?pubId=1033249144001" alt="Chef John's Salt Roasted Chicken Recipe and Video - See how to make earth’s easiest (and possibly tastiest) roasted chicken." title="Chef John's Salt Roasted Chicken" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/4053/chef-johns-salt-roasted-chicken"></span>
												<h3 class="slider-card__h3">Chef John's Salt Roasted Chicken</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">223K plays </span>
												</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar video')">
										<div class="slider-card__videos">
											<a href="/video/4537/chef-johns-chicken-and-olives?internalSource=similar_video_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_10" data-internal-referrer-link="similar_video_banner" data-click-id="simslot_10" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__videos videoImg ng-isolate-scope" data-lazy-load="" data-original-src="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/201403/641/1033249144001_3404632867001_video-still-for-video-3404229498001.jpg?pubId=1033249144001" alt="Chef John's Chicken and Olives Recipe and Video - Moist, tender seared chicken finishes in a savory olive sauce." title="Chef John's Chicken and Olives" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedVideos">
												<span class="icon--videoplay-small" href="/video/4537/chef-johns-chicken-and-olives"></span>
												<h3 class="slider-card__h3">Chef John's Chicken and Olives</h3>
												<div class="counts-div">
													<span class="svg-icon--actions--playcount_grey svg-icon--actions--playcount_grey-dims"></span>
													<span class="counts-text">19K plays </span>
												</div>
											</a>
										</div>
									</li>
								</ul>
								<ul class="hub-carousel ng-hide" id="relatedCategories" ng-show="isSet(3)">
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/17139?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_1" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_1" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/1476038.jpg" alt="" title="Chicken Marsala" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">Chicken Marsala</h3>
												<div class="hub-recipeCount">32 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/1981?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_2" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_2" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/970175.jpg" alt="" title="Pan Fried Chicken Breasts" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">Pan Fried Chicken Breasts</h3>
												<div class="hub-recipeCount">312 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/1642?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_3" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_3" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/212049.jpg" alt="" title="Everyday Cooking" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">Everyday Cooking</h3>
												<div class="hub-recipeCount">36326 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/80?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_4" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_4" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/939621.jpg" alt="" title="Main Dishes" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">Main Dishes</h3>
												<div class="hub-recipeCount">15470 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/1?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_5" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_5" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/4460060.jpg" alt="" title="Recipes" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">Recipes</h3>
												<div class="hub-recipeCount">61349 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/22453?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_6" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_6" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/2453788.jpg" alt="" title="Chef John's Main Dishes" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">Chef John's Main Dishes</h3>
												<div class="hub-recipeCount">371 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/1630?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_7" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_7" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/823712.jpg" alt="" title="San Francisco" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">San Francisco</h3>
												<div class="hub-recipeCount">42 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/17726?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_8" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_8" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/1121507.jpg" alt="" title="45-Minute Chicken Main Dishes" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">45-Minute Chicken Main Dishes</h3>
												<div class="hub-recipeCount">471 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/17739?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_9" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_9" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/328905.jpg" alt="" title="Quick and Easy Chicken Dinners" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">Quick and Easy Chicken Dinners</h3>
												<div class="hub-recipeCount">689 recipes</div>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar categories')">
										<div class="slider-card__hub">
											<a href="/recipes/16791?internalSource=similar_category_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_10" target="_self" data-internal-referrer-link="similar_category_banner" data-click-id="simslot_10" referring-id="237928" class="ng-isolate-scope">
												<img class="slider-card__img hub ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/136x136/3548087.jpg" alt="" title="Food Wishes®" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedCategories">
												<h3 class="slider-card__h3">Food Wishes®</h3>
												<div class="hub-recipeCount">889 recipes</div>
											</a>
										</div>
									</li>
								</ul>
								<ul class="article-carousel ng-hide" id="relatedArticles" ng-show="isSet(4)">
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/rotisserie-chicken-jump-starts-snazzy-meals?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_1" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_1" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/41728.jpg" alt="Rotisserie Chicken Jump-starts Snazzy Meals" title="Rotisserie Chicken Jump-starts Snazzy Meals" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Rotisserie Chicken Jump-starts Sna...</h3>
												<span class="article-author">By: Pam Anderson</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/top-chicken-dinners-for-spring?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_2" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_2" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/42568.jpg" alt="Top Chicken Dinners for Spring" title="Top Chicken Dinners for Spring" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Top Chicken Dinners for Spring</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/deboning-a-chicken-thigh?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_3" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_3" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/7542.jpg" alt="Deboning a Chicken Thigh" title="Deboning a Chicken Thigh" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Deboning a Chicken Thigh</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/cutting-up-a-whole-chicken?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_4" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_4" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/7592.jpg" alt="Cutting Up a Whole Chicken" title="Cutting Up a Whole Chicken" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Cutting Up a Whole Chicken</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/perfect-fried-chicken?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_5" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_5" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/18886.jpg" alt="Perfect Fried Chicken" title="Perfect Fried Chicken" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Perfect Fried Chicken</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/finger-lickin-chicken-dippers?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_6" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_6" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/14811.jpg" alt="Finger-Lickin' Chicken Dippers" title="Finger-Lickin' Chicken Dippers" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Finger-Lickin' Chicken Dippers</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/deboning-a-chicken-breast?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_7" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_7" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/7425.jpg" alt="Deboning a Chicken Breast" title="Deboning a Chicken Breast" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Deboning a Chicken Breast</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/roasting-chicken?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_8" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_8" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/6936.jpg" alt="Roasting Chicken" title="Roasting Chicken" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Roasting Chicken</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/top-9-bacon-wrapped-chicken-recipes?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_9" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_9" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/56625.jpg" alt="Top 9 Bacon-Wrapped Chicken Recipes" title="Top 9 Bacon-Wrapped Chicken Recipes" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Top 9 Bacon-Wrapped Chicken Recipes</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
									<li class="slider-card" ng-click="setAnalyticsCookie('similar article')">
										<div class="slider-card__articles">
											<a href="/HowTo/chicken-cooking-basics?internalSource=similar_article_banner&amp;referringId=237928&amp;referringContentType=recipe&amp;clickId=simslot_10" data-internal-referrer-link="similar_article_banner" data-click-id="simslot_10" referring-id="237928" class="ng-isolate-scope" target="_self">
												<img class="slider-card__img ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/images/6919.jpg" alt="Chicken Cooking Basics" title="Chicken Cooking Basics" src="http://images.media-allrecipes.com/ar/spacer.gif" data-container="relatedArticles">
												<h3 class="slider-card__h3">Chicken Cooking Basics</h3>
												<span class="article-author">By: Allrecipes Staff</span>
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="mag-cta-mobile">
				<div class="mag-cta ng-scope" data-ng-controller="ar_controllers_mag_subscription">
					<a ng-href="http://armagazine.com/get-the-magazine" target="_blank" class="ad-mag-homeBtm" href="http://armagazine.com/get-the-magazine">
						<h2>Get the magazine</h2>
						<img class="ad-mag-homeBtm__th" alt="Subscribe to Allrecipes Magazine" title="Allrecipes Magazine" src="http://images.media-allrecipes.com/images/61544.png">
						<div class="ad-mag-homeBtm__text">
							<h4> Get a full year for just $7.99!</h4>
							<p>Cook 5-star weekday dinners every time.</p>
						</div>
					</a>
				</div>
			</div>
			<script>
				var reviewsInitialSet = {"recipeId":237928,"recipeTitle":"Chef John's Chicken Marsala ","recipeImageUrl":"http://images.media-allrecipes.com/userphotos/250x250/1167787.jpg","heroImage":"http://images.media-allrecipes.com/userphotos/560x315/1167787.jpg","reviews":{"MostHelpfulPositive":{"text":"Perfect, classic chicken marsala. This was so simple but it looked like I worked all day on it. I had two minor changes.....I added a few more mushrooms because we love them and I used bonelss skinless chicken breasts because that is what I had on hand. Thanks for a easy and delicious recipe Chef John!","rating":5.0,"reviewID":4740292,"helpfulCount":51,"dateLastModified":"June 16, 2014","submitter":{"userID":2810501,"name":"mauigirl","profileUrl":"/cook/mauigirl1/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/userphotos/90x90/00/31/28/312893.jpg"}]},"followersCount":348,"favoritesCount":1946,"madeRecipesCount":449,"city":"Lahaina","region":"Hawaii"}},"MostHelpfulNegative":{"text":"Followed recipe to the letter.   Was very disappointed.   The sauce was not nearly thick enough, was a pale golden color and not all that flavorful.   It wasn't terrible, but definitely needs something else to make it \"pop\".    Kind of bland and runny.   Will look for another marsala recipe.","rating":2.0,"reviewID":5030970,"helpfulCount":7,"dateLastModified":"March 16, 2015","submitter":{"userID":15521155,"name":"barbi","profileUrl":"/cook/15521155/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},"followersCount":0,"favoritesCount":0,"madeRecipesCount":1,"city":"","region":""}},"MostPositiveIndex":1,"MostCriticalIndex":11,"Reviews":[{"text":"Perfect, classic chicken marsala. This was so simple but it looked like I worked all day on it. I had two minor changes.....I added a few more mushrooms because we love them and I used bonelss skinless chicken breasts because that is what I had on hand. Thanks for a easy and delicious recipe Chef John!","rating":5.0,"reviewID":4740292,"helpfulCount":51,"dateLastModified":"June 16, 2014","submitter":{"userID":2810501,"name":"mauigirl","profileUrl":"/cook/mauigirl1/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/userphotos/90x90/00/31/28/312893.jpg"}]},"followersCount":348,"favoritesCount":1946,"madeRecipesCount":449,"city":"Lahaina","region":"Hawaii"}},{"text":"Superb recipe and better by far if you use Trader Joe's Organic Chicken Broth (the reg.) It's almost as good as homemade. I soak my chicken breasts beforehand in milk and marsala, about 1/2 cup wine  to 1 1/2 cups milk for 20 min. Then pat dry and I always use flour in a zip lock bag (the gallon sz) when pounding/flattening my chicken so it does not stick or fall apart. Then I use a couple of beaten eggs laced with a little more marsala before I dip into my flour seasoned flour mixture.  My chicken comes out so tender and juicy that you literally do not need a knife ever when eating my chicken.","rating":5.0,"reviewID":5017916,"helpfulCount":48,"dateLastModified":"March 01, 2015","submitter":{"userID":13605517,"name":"Pamela McDonald","profileUrl":"/cook/rulathered/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/userphotos/90x90/02/11/42/2114269.jpg"}]},"followersCount":11,"favoritesCount":10,"madeRecipesCount":5,"city":"","region":"Arizona"}},{"text":"This recipe is straight forward and the final product is very impressive. I added a bit more flour to make the sauce thicker because I wanted it to be more like gravy. As suggested, I served it on garlic toast. I think it would also be fantastic with potatoes. Yet another crowd pleaser from Chef John. Thanks!\n\nP.S. If you are the type of person who makes a recipe using so many modifications that the original is unrecognizable, you are not entitled to rate that recipe nor are you credible if you give said recipe a poor rating. There. I said it.","rating":5.0,"reviewID":5202876,"helpfulCount":35,"dateLastModified":"September 20, 2015","submitter":{"userID":1405081,"name":"Melly Gee","profileUrl":"/cook/1405081/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/userphotos/90x90/00/01/20/12053.jpg"}]},"followersCount":1,"favoritesCount":795,"madeRecipesCount":25,"city":"Winnipeg","region":"Manitoba"}},{"text":"Extremely good except for the fact that I had to thicken my sauce much longer than anticipated. The amount of chicken stock to add should be halved, as should the parsley amount. Other than that, excellent taste.","rating":4.0,"reviewID":4757104,"helpfulCount":19,"dateLastModified":"July 05, 2014","submitter":{"userID":11898579,"name":"Sealunar","profileUrl":"/cook/11898579/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},"followersCount":0,"favoritesCount":3,"madeRecipesCount":1,"city":"","region":""}},{"text":"Awesome flavor!  We loved it!  I used a good quality Marsala so I wouldn't mess this recipe up!  I followed the recipe exactly, even plating it on a piece of toasted sourdough bread.  Next time I may cut down on the chicken stock as it was thin prior to me using a little starch and water.  Thanks Chef John!  I think it was the best thing I've ever cooked!!","rating":5.0,"reviewID":4867715,"helpfulCount":17,"dateLastModified":"October 23, 2014","submitter":{"userID":10120959,"name":"Donna Taylor","profileUrl":"/cook/10120959/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/userphotos/90x90/02/23/63/2236392.jpg"}]},"followersCount":2,"favoritesCount":92,"madeRecipesCount":4,"city":"","region":""}},{"text":"We did not have any Marsala Wine but some good old North Carolina Red Sweet Muscadine Wine just hit the spot.  Great Receipe.  Also did not have any Shallots so we were forced to use Onions and Garlic.  What is not to like...Serve over rice with Broccoli or Zucchini.","rating":5.0,"reviewID":4842323,"helpfulCount":14,"dateLastModified":"September 28, 2014","submitter":{"userID":7482883,"name":"scruplese43","profileUrl":"/cook/7482883/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},"followersCount":0,"favoritesCount":245,"madeRecipesCount":6,"city":"","region":""}},{"text":"OMG!! Fantastic Chicken Marsala and served over pantanella pasta, thanks again Chef John for a fanrtastic and easy recipe for one of my favorites.","rating":5.0,"reviewID":4731115,"helpfulCount":13,"dateLastModified":"June 06, 2014","submitter":{"userID":3450379,"name":"Josephine Wood","profileUrl":"/cook/3450379/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/userphotos/90x90/01/64/22/1642209.jpg"}]},"followersCount":5,"favoritesCount":511,"madeRecipesCount":69,"city":"Lemoore","region":"California"}},{"text":"I decided to make this with some homemade pasta & it tasted just like the one we get at our favorite Italian restaurant! I used 2 cups of Marsala wine and 1 to 1-1/2 cups stock, and replaced the shallot with 2 cloves minced garlic instead. I think I also used a bit more butter and flour too. This has become one of our favorite recipes!","rating":5.0,"reviewID":4805759,"helpfulCount":10,"dateLastModified":"August 24, 2014","submitter":{"userID":1862362,"name":"Heather M","profileUrl":"/cook/1862362/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},"followersCount":1,"favoritesCount":92,"madeRecipesCount":2,"city":"","region":""}},{"text":"Made this tonight for dinner - flavor was fantastic! Thanks Chef!","rating":5.0,"reviewID":4733268,"helpfulCount":10,"dateLastModified":"June 08, 2014","submitter":{"userID":3323468,"name":"Carol","profileUrl":"/cook/3323468/","photo":{"urls":[{"url":"http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},"followersCount":0,"favoritesCount":433,"madeRecipesCount":9,"city":"","region":""}}]},"totalReviews":223};
			</script>
			<section id="reviews" class="recipe-reviews ng-scope" ng-controller="ar_controllers_recipe_reviews" ng-init="init('237928', 2, 9, 'Recipe', 25, 'MostHelpful')">
				<h2 class="heading__h2--gutters review">Reviews</h2>
				<a class="icon-read--reviews" href="" ng-click="$event.preventDefault();reviewModalDialog(1, sortBy)">
				<span>Read all reviews</span>  <span class="svg-icon--recipe-page--read-reviews svg-icon--recipe-page--read-reviews-dims"></span>
				</a>
				<span class="recipe-reviews__header--count">223</span>
				<script>
					var userReview = {"recipeId":0,"userReview":{"text":null,"rating":0.0,"date":null}};
				</script>
				<div class="current-user review-container clearfix current--reviewer ng-scope" data-ng-controller="ar_controllers_rate_and_review">
					<div ng-show="model.userReview.rating == 0" class="current-user__rateballoon own-review">
						<img class="img-profile rateballoon" alt="profile image" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png">
						<a href="javascript:void(0);" ng-click="openRating()" id="ratingButton" target="_self">
							<div class="rateballoon">Rate and review</div>
						</a>
					</div>
					<div ng-show="model.userReview.rating != 0" class="current-user__review own-review ng-hide">
						<article class="reviewer-info imadeit-enabled">
							<div class="review-wrapper">
								<ul class="cook-details">
									<li>
										<a ng-href=""><img class="img-profile elevate-cook-thumbnail" alt="profile image" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"></a>
									</li>
									<li>
										<h4>My review</h4>
										<div class="stars-and-date-container">
											<div data-star-rating="" data-rating="0" class="ng-isolate-scope">
												<div class="grid-col__ratings">
													<span class="rating-stars">
														<!-- ngRepeat: star in stars --><img data-ng-repeat="star in stars" data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png" width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><!-- end ngRepeat: star in stars --><img data-ng-repeat="star in stars" data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png" width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><!-- end ngRepeat: star in stars --><img data-ng-repeat="star in stars" data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png" width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><!-- end ngRepeat: star in stars --><img data-ng-repeat="star in stars" data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png" width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><!-- end ngRepeat: star in stars --><img data-ng-repeat="star in stars" data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png" width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><!-- end ngRepeat: star in stars --> 
													</span>
													<span class="grid-col__reviews ng-binding" ng-bind="(!reviewCount ||reviewCount === 0) ? '' : (reviewCount | largeNumberDisplay)"></span> 
												</div>
											</div>
											<div class="review-date ng-binding" ng-bind="model.userReview.date | date:'M/d/yyyy'"></div>
										</div>
									</li>
								</ul>
								<div ng-bind="model.userReview.text" class="reviewer--text ng-binding"></div>
							</div>
							<div class="icon--edit-review">
								<ul>
									<li class="cook-review--count">
									</li>
									<li>
										<a id="lnkEdit" href="javascript:void()" ng-click="openRating()" class="edit-review" target="_self"><span>Edit review</span></a>
									</li>
								</ul>
							</div>
						</article>
					</div>
				</div>
				<ol>
					<li>
						<h4 class="helpful-header">281 Ratings</h4>
					</li>
					<li>
						<div title="220 cooks loved it!">
							<div class="reviewsummary--bar">
								<div class="reviewsummary--percent" style="width: 78%">&nbsp;</div>
							</div>
							<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
							</div>
						</div>
					</li>
					<li>
						<div title="44 cooks liked it!">
							<div class="reviewsummary--bar">
								<div class="reviewsummary--percent" style="width: 15%">&nbsp;</div>
							</div>
							<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
							</div>
						</div>
					</li>
					<li>
						<div title="11 cooks thought it was OK">
							<div class="reviewsummary--bar">
								<div class="reviewsummary--percent" style="width: 3%">&nbsp;</div>
							</div>
							<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="3">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
							</div>
						</div>
					</li>
					<li>
						<div title="5 cooks didn't like it">
							<div class="reviewsummary--bar">
								<div class="reviewsummary--percent" style="width: 1%">&nbsp;</div>
							</div>
							<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="2">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
							</div>
						</div>
					</li>
					<li>
						<div title="1 cooks couldn't eat it">
							<div class="reviewsummary--bar">
								<div class="reviewsummary--percent" style="width: 0%">&nbsp;</div>
							</div>
							<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="1">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
							</div>
						</div>
					</li>
				</ol>
				<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
					<meta id="metaRecipeTitle" itemprop="itemReviewed" content="">
					<span class="helpful-header">Most helpful positive review</span>
					<article class="reviewer-info imadeit-enabled">
						<div class="recipe-details-cook-stats-container">
							<a href="/cook/mauigirl1/" target="_self">
								<ul class="cook-details">
									<li>
										<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/90x90/00/31/28/312893.jpg" alt="" title="" src="http://images.media-allrecipes.com/userphotos/90x90/00/31/28/312893.jpg" style="display: inline;">
									</li>
									<li class="cook-info">
										<h4 itemprop="author">  mauigirl 
										</h4>
										<ul class="cook-details__followers followers-count">
											<li>
												<span class="icon--cook-card-follower" title="Followers"></span> 
											</li>
											<li>
												<span>348</span>
											</li>
										</ul>
										<ul class="cook-details__favorites favorites-count">
											<li>
												<span class="icon--cook-card-favorite" title="Favorites"></span> 
											</li>
											<li>
												<span>2K</span>
											</li>
										</ul>
										<ul class="cook-details__recipes-made recipes-made-count">
											<li>
												<span class="icon--cook-card-made" title="Recipes Made"></span> 
											</li>
											<li>
												<span>449</span>
											</li>
										</ul>
									</li>
								</ul>
							</a>
						</div>
						<div class="stars-and-date-container">
							<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
							</div>
							<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
								<meta itemprop="ratingValue" content="5">
							</div>
							<div class="review-date">6/16/2014</div>
							<meta itemprop="dateCreated" content="2014-06-16">
						</div>
					</article>
					<p itemprop="reviewBody">
						Perfect, classic chicken marsala. This was so simple but it looked like I worked all day on it. I had two minor changes.....I added a few more mushrooms because we love them and I used bonelss s...
					</p>
					<div class="review-detail">
						<a class="review-detail__link" href="reviews/4740292/" ng-click="$event.preventDefault();reviewModalDialog(0, sortBy)" target="_self">
						<span class="icon--expand-icon"></span>
						<span>Read more</span>
						</a>
					</div>
				</div>
				<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
					<meta id="metaRecipeTitle" itemprop="itemReviewed" content="">
					<span class="helpful-header">Most helpful critical review</span>
					<article class="reviewer-info imadeit-enabled">
						<div class="recipe-details-cook-stats-container">
							<a href="/cook/15521155/" target="_self">
								<ul class="cook-details">
									<li>
										<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" alt="" title="" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" style="display: inline;">
									</li>
									<li class="cook-info">
										<h4 itemprop="author">  barbi 
										</h4>
										<ul class="cook-details__followers followers-count">
											<li>
												<span class="icon--cook-card-follower" title="Followers"></span> 
											</li>
											<li>
												<span>0</span>
											</li>
										</ul>
										<ul class="cook-details__favorites favorites-count">
											<li>
												<span class="icon--cook-card-favorite" title="Favorites"></span> 
											</li>
											<li>
												<span>0</span>
											</li>
										</ul>
										<ul class="cook-details__recipes-made recipes-made-count">
											<li>
												<span class="icon--cook-card-made" title="Recipes Made"></span> 
											</li>
											<li>
												<span>1</span>
											</li>
										</ul>
									</li>
								</ul>
							</a>
						</div>
						<div class="stars-and-date-container">
							<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="2">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
							</div>
							<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
								<meta itemprop="ratingValue" content="2">
							</div>
							<div class="review-date">3/16/2015</div>
							<meta itemprop="dateCreated" content="2015-03-16">
						</div>
					</article>
					<p itemprop="reviewBody">
						Followed recipe to the letter.   Was very disappointed.   The sauce was not nearly thick enough, was a pale golden color and not all that flavorful.   It wasn't terrible, but definitely needs so...
					</p>
					<div class="review-detail">
						<a class="review-detail__link" href="reviews/5030970/" ng-click="$event.preventDefault();reviewModalDialog(10, sortBy)" target="_self">
						<span class="icon--expand-icon"></span>
						<span>Read more</span>
						</a>
					</div>
				</div>
				<div class="review-divider review-container review-ad-space">
					<div data-ad-container-autocollapse="" class="ad-recipe-page-middle-container ad-desktop-only">
						<div class="ad-recipe-page-middle-3 ad-search-grid ng-isolate-scope" ad-slot-hc-type="div-gpt-lazy-leaderboard-fixed-tier3" desktop-only="true">
							<div id="sideLoadedSlotId1" data-ad-slot-type="" style="margin: 0 auto;">
								<div id="div-gpt-lazy-leaderboard-fixed-1" data-tier="3" data-google-query-id="CJepypyRzNECFUSavAodbxQLQg">
									<div id="google_ads_iframe_3865/ar.mdp.com/tier3/recipe/chicken_1__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_3865/ar.mdp.com/tier3/recipe/chicken_1" title="3rd party ad content" name="google_ads_iframe_3865/ar.mdp.com/tier3/recipe/chicken_1" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc="" style="border: 0px; vertical-align: bottom;"></iframe></div>
								</div>
							</div>
							<span class="advertisement">ADVERTISEMENT</span> 
						</div>
					</div>
				</div>
				<div class="tabs reviews-sort">
					<div ng-click="getReviews('MostHelpful')" ng-class="{'selected':sortBy=='MostHelpful'}" class="selected">Most helpful</div>
					<div ng-click="getReviews('MostPositive')" ng-class="{'selected':sortBy=='MostPositive'}">Most positive</div>
					<div ng-click="getReviews('LeastPositive')" ng-class="{'selected':sortBy=='LeastPositive'}">Least positive</div>
					<div ng-click="getReviews('Newest')" ng-class="{'selected':sortBy=='Newest'}">Newest</div>
				</div>
				<div class="review-container dropdown-menu">
					<div ng-controller="ar_controllers_review_details" class="review-detail-nav ng-scope">
						<div class="review-detail-nav__container dropdown-menu">
							<div class="review-detail-nav__sort__dropdownlist" ng-click="toggleShowSortOptions()" id="sort">
								<span>
								<span class="review-detail-nav__sort__dropdownlist__text ng-binding" ng-bind="'Reviews: ' + sortByFriendlyName[sortBy]">Reviews: Most helpful</span><span ng-class="indicatorStyle" class="icon--chevron-down"></span>
								</span>
							</div>
						</div>
						<ul class="sort-nav exposed collapsed" ng-class="showSortFiltersStyle" ng-click="toggleShowSortOptions()">
							<li ng-click="getReviews('MostHelpful')" ng-class="{'btn-grey':sortBy == 'MostHelpful'}" ng-bind="::sortByFriendlyName['MostHelpful']" class="ng-binding btn-grey">Most helpful</li>
							<li ng-click="getReviews('MostPositive')" ng-class="{'btn-grey':sortBy == 'MostPositive'}" ng-bind="::sortByFriendlyName['MostPositive']" class="ng-binding">Most positive</li>
							<li ng-click="getReviews('LeastPositive')" ng-class="{'btn-grey':sortBy == 'LeastPositive'}" ng-bind="::sortByFriendlyName['LeastPositive']" class="ng-binding">Least positive</li>
							<li ng-click="getReviews('Newest')" ng-class="{'btn-grey':sortBy == 'Newest'}" ng-bind="::sortByFriendlyName['Newest']" class="ng-binding">Newest</li>
						</ul>
					</div>
				</div>
				<section ar-initial-reviews="">
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/mauigirl1/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/90x90/00/31/28/312893.jpg" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/userphotos/90x90/00/31/28/312893.jpg" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  mauigirl 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>348</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>2K</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>449</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="5">
								</div>
								<div class="review-date">6/16/2014</div>
								<meta itemprop="dateCreated" content="2014-06-16">
							</div>
						</article>
						<p itemprop="reviewBody">
							Perfect, classic chicken marsala. This was so simple but it looked like I worked all day on it. I had two minor changes.....I added a few more mushrooms because we love them and I used bonelss s...
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/4740292/" ng-click="$event.preventDefault();reviewModalDialog(0, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/rulathered/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/90x90/02/11/42/2114269.jpg" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/userphotos/90x90/02/11/42/2114269.jpg" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  Pamela McDonald 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>11</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>10</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>5</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="5">
								</div>
								<div class="review-date">3/1/2015</div>
								<meta itemprop="dateCreated" content="2015-03-01">
							</div>
						</article>
						<p itemprop="reviewBody">
							Superb recipe and better by far if you use Trader Joe's Organic Chicken Broth (the reg.) It's almost as good as homemade. I soak my chicken breasts beforehand in milk and marsala, about 1/2 cup ...
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/5017916/" ng-click="$event.preventDefault();reviewModalDialog(1, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/1405081/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/90x90/00/01/20/12053.jpg" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/userphotos/90x90/00/01/20/12053.jpg" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  Melly Gee 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>1</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>795</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>25</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="5">
								</div>
								<div class="review-date">9/20/2015</div>
								<meta itemprop="dateCreated" content="2015-09-20">
							</div>
						</article>
						<p itemprop="reviewBody">
							This recipe is straight forward and the final product is very impressive. I added a bit more flour to make the sauce thicker because I wanted it to be more like gravy. As suggested, I served it ...
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/5202876/" ng-click="$event.preventDefault();reviewModalDialog(2, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-divider"></div>
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/11898579/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  Sealunar 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>0</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>3</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>1</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="4">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="4">
								</div>
								<div class="review-date">7/5/2014</div>
								<meta itemprop="dateCreated" content="2014-07-05">
							</div>
						</article>
						<p itemprop="reviewBody">
							Extremely good except for the fact that I had to thicken my sauce much longer than anticipated. The amount of chicken stock to add should be halved, as should the parsley amount. Other than that...
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/4757104/" ng-click="$event.preventDefault();reviewModalDialog(3, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/10120959/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/90x90/02/23/63/2236392.jpg" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/userphotos/90x90/02/23/63/2236392.jpg" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  Donna Taylor 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>2</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>92</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>4</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="5">
								</div>
								<div class="review-date">10/23/2014</div>
								<meta itemprop="dateCreated" content="2014-10-23">
							</div>
						</article>
						<p itemprop="reviewBody">
							Awesome flavor!  We loved it!  I used a good quality Marsala so I wouldn't mess this recipe up!  I followed the recipe exactly, even plating it on a piece of toasted sourdough bread.  Next time ...
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/4867715/" ng-click="$event.preventDefault();reviewModalDialog(4, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/7482883/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  scruplese43 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>0</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>245</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>6</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="5">
								</div>
								<div class="review-date">9/28/2014</div>
								<meta itemprop="dateCreated" content="2014-09-28">
							</div>
						</article>
						<p itemprop="reviewBody">
							We did not have any Marsala Wine but some good old North Carolina Red Sweet Muscadine Wine just hit the spot.  Great Receipe.  Also did not have any Shallots so we were forced to use Onions and ...
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/4842323/" ng-click="$event.preventDefault();reviewModalDialog(5, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-divider"></div>
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/3450379/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/userphotos/90x90/01/64/22/1642209.jpg" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/userphotos/90x90/01/64/22/1642209.jpg" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  Josephine Wood 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>5</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>511</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>69</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="5">
								</div>
								<div class="review-date">6/6/2014</div>
								<meta itemprop="dateCreated" content="2014-06-06">
							</div>
						</article>
						<p itemprop="reviewBody">
							OMG!! Fantastic Chicken Marsala and served over pantanella pasta, thanks again Chef John for a fanrtastic and easy recipe for one of my favorites.        
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/4731115/" ng-click="$event.preventDefault();reviewModalDialog(6, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/1862362/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  Heather M 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>1</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>92</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>2</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="5">
								</div>
								<div class="review-date">8/24/2014</div>
								<meta itemprop="dateCreated" content="2014-08-24">
							</div>
						</article>
						<p itemprop="reviewBody">
							I decided to make this with some homemade pasta &amp; it tasted just like the one we get at our favorite Italian restaurant! I used 2 cups of Marsala wine and 1 to 1-1/2 cups stock, and replaced the...
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/4805759/" ng-click="$event.preventDefault();reviewModalDialog(7, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-container clearfix" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
						<meta id="metaRecipeTitle" itemprop="itemReviewed" content="Chef John's Chicken Marsala">
						<article class="reviewer-info imadeit-enabled">
							<div class="recipe-details-cook-stats-container">
								<a href="/cook/3323468/" target="_self">
									<ul class="cook-details">
										<li>
											<img class="img-profile elevate-cook-thumbnail ng-isolate-scope" data-lazy-load="" data-original-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" alt="Chef John's Chicken Marsala" title="Chef John's Chicken Marsala" src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png" style="display: inline;">
										</li>
										<li class="cook-info">
											<h4 itemprop="author">  Carol 
											</h4>
											<ul class="cook-details__followers followers-count">
												<li>
													<span class="icon--cook-card-follower" title="Followers"></span> 
												</li>
												<li>
													<span>0</span>
												</li>
											</ul>
											<ul class="cook-details__favorites favorites-count">
												<li>
													<span class="icon--cook-card-favorite" title="Favorites"></span> 
												</li>
												<li>
													<span>433</span>
												</li>
											</ul>
											<ul class="cook-details__recipes-made recipes-made-count">
												<li>
													<span class="icon--cook-card-made" title="Recipes Made"></span> 
												</li>
												<li>
													<span>9</span>
												</li>
											</ul>
										</li>
									</ul>
								</a>
							</div>
							<div class="stars-and-date-container">
								<div class="rating-stars" data-scroll-to-anchor="reviews" data-ratingstars="5">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
									<img height="14" width="14" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
								</div>
								<div itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
									<meta itemprop="ratingValue" content="5">
								</div>
								<div class="review-date">6/8/2014</div>
								<meta itemprop="dateCreated" content="2014-06-08">
							</div>
						</article>
						<p itemprop="reviewBody">
							Made this tonight for dinner - flavor was fantastic! Thanks Chef!        
						</p>
						<div class="review-detail">
							<a class="review-detail__link" href="reviews/4733268/" ng-click="$event.preventDefault();reviewModalDialog(8, sortBy)" target="_self">
							<span class="icon--expand-icon"></span>
							<span>Read more</span>
							</a>
						</div>
					</div>
					<div class="review-divider"></div>
				</section>
				<div class="recipe-reviews__more-container">
					<!-- ngRepeat: review in reviews -->
					<div ng-click="getReviews()" class="more-button" data-ng-hide="!moreReviewsAvailable">
						<a class="moreReviews btns-one-small">More Reviews</a>
					</div>
				</div>
			</section>
			<!-- once the feature toggle is moved the zergnet javascript down into the scripts section below -->
			<section class="zergnet">
				<h2 class="heading__h2--gutters">
					Other stories that may interest you
				</h2>
				<div id="zergnet-widget-33596" class="zergnet-reserve-space widget-loaded">
					<div id="zerglayout" class="zerglayoutcl" style="clear:both;line-height:normal;border: 0px solid #000; font-family: arial,serif; font-size: 17px; text-align: center; background: #fff; width: 915px; margin: 0px auto;">
						<div style="clear:both;">
							<div style="clear:both;"></div>
						</div>
						<div style="clear:both;">
							<div class="zergentity" style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: both;">
								<a href="http://www.zergnet.com/i/1228660/33596/0/0/47754161" target="_blank" rel="nofollow">
								<img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;" src="http://img1.zergnet.com/1228660_140.jpg" nopin="true" data-pin-no-hover="true">
								</a>
								<div class="zergheadline" style="margin-top: 2px;">
									<a href="http://www.zergnet.com/i/1228660/33596/0/0/47754161" style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;" target="_blank" rel="nofollow">17 Slow-Cooker Recipes We Can’t Live Without</a>
								</div>
								<div style="clear:both;"></div>
							</div>
							<div class="zergentity" style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
								<a href="http://www.zergnet.com/i/1332741/33596/0/0/47754161" target="_blank" rel="nofollow">
								<img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;" src="http://img2.zergnet.com/1332741_140.jpg" nopin="true" data-pin-no-hover="true">
								</a>
								<div class="zergheadline" style="margin-top: 2px;">
									<a href="http://www.zergnet.com/i/1332741/33596/0/0/47754161" style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;" target="_blank" rel="nofollow">10 High-Impact Foods That Will Boost Your Energy</a>
								</div>
								<div style="clear:both;"></div>
							</div>
							<div class="zergentity" style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
								<a href="http://www.zergnet.com/i/1332565/33596/0/0/47754161" target="_blank" rel="nofollow">
								<img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;" src="http://img2.zergnet.com/1332565_140.jpg" nopin="true" data-pin-no-hover="true">
								</a>
								<div class="zergheadline" style="margin-top: 2px;">
									<a href="http://www.zergnet.com/i/1332565/33596/0/0/47754161" style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;" target="_blank" rel="nofollow">12 Ways To Eat Healthy No Matter How Busy You Are</a>
								</div>
								<div style="clear:both;"></div>
							</div>
							<div class="zergentity" style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
								<a href="http://www.zergnet.com/i/1172472/33596/0/0/47754161" target="_blank" rel="nofollow">
								<img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;" src="http://img1.zergnet.com/1172472_140.jpg" nopin="true" data-pin-no-hover="true">
								</a>
								<div class="zergheadline" style="margin-top: 2px;">
									<a href="http://www.zergnet.com/i/1172472/33596/0/0/47754161" style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;" target="_blank" rel="nofollow">8 of The Most Caffeinated Coffee Drinks</a>
								</div>
								<div style="clear:both;"></div>
							</div>
							<div class="zergentity" style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
								<a href="http://www.zergnet.com/i/1046104/33596/0/0/47754161" target="_blank" rel="nofollow">
								<img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;" src="http://img1.zergnet.com/1046104_140.jpg" nopin="true" data-pin-no-hover="true">
								</a>
								<div class="zergheadline" style="margin-top: 2px;">
									<a href="http://www.zergnet.com/i/1046104/33596/0/0/47754161" style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;" target="_blank" rel="nofollow">5 Buddha Bowls You Need to Try</a>
								</div>
								<div style="clear:both;"></div>
							</div>
							<div class="zergentity" style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
								<a href="http://www.zergnet.com/i/808470/33596/0/0/47754161" target="_blank" rel="nofollow">
								<img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;" src="http://img5.zergnet.com/808470_140.jpg" nopin="true" data-pin-no-hover="true">
								</a>
								<div class="zergheadline" style="margin-top: 2px;">
									<a href="http://www.zergnet.com/i/808470/33596/0/0/47754161" style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;" target="_blank" rel="nofollow">The Most Addictive Bread You'll Ever Eat</a>
								</div>
								<div style="clear:both;"></div>
							</div>
							<div style="clear:both;"></div>
						</div>
					</div>
					<style type="text/css">#zergnet-widget-33596 .zerglayoutcl { width: 100% !important; }
						#zergnet-widget-33596 .zergentity { width:16.95% !important; margin-left:2.5% !important; margin-bottom:15px !important; }
						#zergnet-widget-33596 .zergentity img{ display:block !important; width:100% !important; height:auto !important;}
						#zergnet-widget-33596 .zergheadline {width:100% !important; margin-top:5px !important; text-align:left !important; color:#2e2e2e !important;}
						#zergnet-widget-33596 .zergheadline a {font-family:'Source Sans Pro',Arial !important; font-size:14px !important; line-height:17px !important;}
						#zergnet-widget-33596 .zergentity:nth-of-type(6) {display:none !important;}
						@media (max-width: 767px) {
						#zergnet-widget-33596 .zergentity:nth-of-type(6) {display:block !important;}
						#zergnet-widget-33596 .zergentity { width:30% !important; margin-left:2.5% !important;}
						#zergnet-widget-33596 .zergentity:nth-of-type(3n+1) { clear:left !important;}
						#zergnet-widget-33596 .zergheadline {width:auto !important;}
						#zergnet-widget-33596 .zergheader {font-size:28px !important;}
						}
						@media (max-width: 600px) {
						#zergnet-widget-33596 .zergentity { width:46% !important; margin-left:6% !important;}
						#zergnet-widget-33596 .zergentity:nth-of-type(3n+1) { clear:none !important; margin-left:6% !important;}
						#zergnet-widget-33596 .zergentity:nth-of-type(2n+1) {clear:left !important; margin-left:2% !important;}
						#zergnet-widget-33596 .zergheader {font-size: 26px !important;}
						#zergnet-widget-33596 .zergheadline a {font-size: 15px !important; line-height:18px !important;}
						}
					</style>
				</div>
			</section>
			<script language="javascript" type="text/javascript">
				$(function () {
				    var zergnet = document.createElement('script');
				    zergnet.type = 'text/javascript';
				    zergnet.async = true;
				    zergnet.src = 'http://www.zergnet.com/zerg.js?id=33596';
				    var znscr = document.getElementsByTagName('script')[0];
				    znscr.parentNode.insertBefore(zergnet, znscr);
				});
			</script>
		</section>
		@include(VIEW_FRONTEND_PATH . '.blocks.sidebar')
	</div>
</div>
@stop