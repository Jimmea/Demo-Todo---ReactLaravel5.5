@extends(MASTER_V1.'.layout_master')
@section('seo')
@stop
@section('content')
    <div class="container-content body-content">
        <div class="recipe-container-outer">
            <section class="ar_recipe_index full-page">
                <ul class="breadcrumbs breadcrumbs">
                    <li>
                        <a href="" target="_self" class="">
                        <span class="toggle-similar__title">
                            Home
                        </span>
                            <span class="icon--chevron-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_self" class="">
                        <span class="toggle-similar__title">
                            Recipes
                        </span>
                            <span class="icon--chevron-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_self" class="">
                        <span class="toggle-similar__title">
                            Main Dish
                        </span>
                            <span class="icon--chevron-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_self" class="">
                        <span class="toggle-similar__title">
                            Stuffed Main Dishes
                        </span>
                            <span class="icon--chevron-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_self" class="">
                        <span class="toggle-similar__title">
                            Stuffed Cabbage
                        </span>
                        </a>
                    </li>
                </ul>
                <div class="summary-background">
                    <div class="summaryGroup downsized clearfix">
                        <section class="hero-photo hero-photo--250">
                            <a title="Save this recipe"
                               class="favorite "><span class="ng-binding"></span></a>
                            <span ng-hide="showplayer"
                                  class="hero-photo__image ng-scope">
                                <a href="" target="_self">
                                    <img class="rec-photo"
                                         src="http://images.media-allrecipes.com/userphotos/250x250/934920.jpg"
                                         alt="Cabbage Rolls II" title="Cabbage Rolls II">
                                </a>
                            </span>
                            <div id="msg-toolbar" class="notification hidden "><span
                                        class="notification__message"></span></div>
                            <div class="photo-with-video">
                                <div>
                                    <meta itemprop="thumbnailUrl"
                                          content="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/1033249144001_1797465094001_th-1795844149001.jpg?pubId=1033249144001">
                                    <meta
                                            content="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/1033249144001_1797315960001_ari-origin05-arc-150-1345574229715.jpg?pubId=1033249144001">
                                    <meta itemprop="embedUrl"
                                          content="http://c.brightcove.com/services/viewer/federated_f9?&amp;width=640&amp;height=360&amp;flashID=myExperience1086638575001&amp;bgcolor=%23FFFFFF&amp;playerID=1094141761001&amp;playerKey=AQ~~%2CAAAA8JJyvME~%2CK4ozHF41iv1geq61oV_5IVDU4aWxAYLa&amp;wmode=transparent&amp;isVid=true&amp;isUI=true&amp;dynamicStreaming=true&amp;%40videoPlayer=1795844149001&amp;autoStart=true&amp;debuggerID=">
                                    <meta content="Cabbage Rolls II">
                                    <meta itemprop="description"
                                          content="See how to make beefy, saucy cabbage rolls in the slow cooker.">
                                    <meta itemprop="interactionCount" content="157821">
                                    <meta itemprop="uploadDate" content="8/21/2012 3:02:15 PM">
                                </div>
                            </div>
                        </section>
                        <section class="recipe-summary downsized clearfix">
                            <h1 class="recipe-summary__h1">Cabbage Rolls II</h1>
                            <!--rating stars-->
                            <div class="recipe-summary__stars">
                                <div class="rating-stars"
                                >
                                    <img height="20" width="20"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="20" width="20"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="20" width="20"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="20" width="20"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="20" width="20"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star-2015.svg">
                                </div>
                                <span
                                        itemtype="http://schema.org/AggregateRating" class="aggregate-rating">
                                    <meta itemprop="ratingValue" content="4.31">
                                    <meta itemprop="reviewCount" content="1073">
                                </span>
                            </div>
                            <!-- total made it count & read review link -->
                            <div class="summary-stats-box">
                                <div class="total-made-it ng-scope">
                                    <span
                                            class="ng-scope">
                                        <a class="read--reviews"
                                           target="_self">
                                            <span class="made-it-count ng-binding">3K</span><span>&nbsp;made it</span><span>&nbsp; |&nbsp;</span>
                                            <span class="review-count">1073 reviews</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="submitter">
                                <p>
                                    <span class="submitter__byline">Recipe by: </span><span class="submitter__name"
                                                                                            itemprop="author">BJ</span>
                                </p>
                                <div class="submitter__description" itemprop="description">
                                    "Cabbage leaves stuffed with ground beef, onion and rice, covered in a sweet and
                                    tangy tomato sauce and cooked in a slow cooker."
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div ng-controller="ar_controllers_recipe_toolbar" ng-init="init(20045, 'Recipe')" class="ng-scope">
                    <div class="dropdown-heart ng-hide" data-show-on-scroll="700"
                         ng-show="(yTrigger == true) &amp;&amp; (saved == false)">
                        <a href="" class="save-on-click"
                           ng-click="saveOnClick(20045, 'Recipe',&quot;Cabbage Rolls II&quot;,'http://images.media-allrecipes.com/userphotos/250x250/149646.jpg')">
                            <span class="svg-icon--recipe-navbar--heart_off svg-icon--recipe-navbar--heart_off-dims"></span>
                            <span>Save to favorites</span>
                        </a>
                    </div>
                    <section class="recipe-navbar">
                        <a href="" class="save-on-click"
                           ng-click="saveOnClick(20045, 'Recipe',&quot;Cabbage Rolls II&quot;,'http://images.media-allrecipes.com/userphotos/250x250/149646.jpg')">
                            <div ng-switch="" on="saved">
                                <!-- ngSwitchWhen: true -->
                                <!-- ngSwitchWhen: false -->
                                <div ng-switch-when="false" class="ng-scope">
                                    <span class="svg-icon--recipe-navbar--heart_off svg-icon--recipe-navbar--heart_off-dims"></span>
                                    <span>Save</span>
                                </div><!-- end ngSwitchWhen: -->
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
                        <a href=""
                           ng-click="openShareModal({&quot;RecipeId&quot;:20045,&quot;IsLoggedIn&quot;:false,&quot;PinterestUrl&quot;:&quot;http://pinterest.com/pin/create/button/?url=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=usspnt\u0026media=http://images.media-allrecipes.com/userphotos/250x250/149646.jpg\u0026description=Cabbage%20Rolls%20II%20-%20Allrecipes.com&quot;,&quot;FacebookUrl&quot;:&quot;https://facebook.com/sharer.php?u=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=ussfac&quot;,&quot;TwitterUrl&quot;:&quot;https://twitter.com/intent/tweet?url=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=usstwt\u0026text=Cabbage%20Rolls%20II%20-%20Allrecipes.com\u0026via=Allrecipes&quot;,&quot;GooglePlusUrl&quot;:&quot;https://plus.google.com/share?url=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=ussgog&quot;,&quot;StumbleUpon&quot;:&quot;https://www.stumbleupon.com/submit?url=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=usssup&quot;,&quot;ImageUrl&quot;:&quot;http://images.media-allrecipes.com/userphotos/250x250/149646.jpg&quot;,&quot;Title&quot;:&quot;Cabbage%20Rolls%20II%20-%20Allrecipes.com&quot;,&quot;ShareSectionTitle&quot;:null})"
                           hidewhenclicked="">
                            <span class="icon svg-icon--recipe-navbar--share svg-icon--recipe-navbar--share-dims"></span>
                            <span>Share</span>
                        </a>
                        <a id="print-recipe" ng-href="print/?recipeType=Recipe&amp;servings=6" target="_self"
                           href="print/?recipeType=Recipe&amp;servings=6">
                            <span class="svg-icon--recipe-navbar--print svg-icon--recipe-navbar--print-dims"></span>
                            <span>Print</span>
                        </a>
                    </section>
                </div>
                <div data-ad-container-autocollapse=""
                     class="ad-recipe-page-middle-container ad-mobile-only reserve-ad-space">
                    <div id="ad-recipepagemiddle-2" class="ad-recipe-page-middle-2">
                        <div id="div-gpt-mob-square-fixed-1" data-tier="1"></div>
                    </div>
                    <span class="advertisement">ADVERTISEMENT</span>
                </div>
                <section class="recipe-ingredients ng-scope" ng-controller="ar_controllers_recipe_ingredient"
                         ng-init="init(6,20045,'Recipe',21302411, 'Cabbage Rolls II')">
                    <div id="msg-add-to-shoppinglist" class="ng-hide">
                        <span>Added to shopping list.</span>
                        <a href="">Go to shopping list.</a>
                    </div>
                    <h2 class="heading__h2--gutters recipe-ingredients__header">Ingredients</h2>
                    <span class="recipe-ingredients__header__toggles">
                        <span class="ready-in-time__container">
                            <span class="ready-in-time">9 h 30 m</span>
                            <span class="icon--stats-clock"></span>
                        </span>
                        <meta id="metaRecipeServings" itemprop="recipeYield" content="6">
                        <a href="" id="servings-button" popup-trigger="servingsSection">
                            <span class="servings-count" ng-class="{'active': servingsSection_showing}"><span
                                        ng-bind="adjustedServings"
                                        class="ng-binding">6</span><span
                                        class="servings-count__desc" ng-class="{'active': servingsSection_showing}"> servings</span></span>
                        <span class="icon--adjust-servings" ng-class="{'active': servingsSection_showing}"></span>
                    </a>
                    <a href="" id="nutrition-button" popup-trigger="nutritionSection">
                        <span class="calorie-count"
                              ng-class="{'active': nutritionSection_showing}"><span>246</span> <span
                                    class="calorie-count__desc"
                                    ng-class="{'active': nutritionSection_showing}"> cals</span></span>
                        <span class="icon--nutrition-info" ng-class="{'active': nutritionSection_showing}"></span>
                    </a>
                </span>
                    <section class="adjustServings panel ng-hide nav-tab" ng-class="isServingsPopup ? 'nav-tab' : ''"
                             popup-panel="servingsSection" ignore-global="false"
                             id="7b331e7a-432d-485b-bdb0-e1dd11112950">
                        <div id="msg-scale" style="display:none;">for serving adjustment</div>
                        <div class="" style="display:none;">Serving size has been adjusted!</div>
                        <div class="subtext">Original recipe yields 6 servings</div>
                        <ul class="adjust-servings__form">
                            <li>
                                <input ng-model="servings" type="number" name="servings" data-role="none" id="servings"
                                       class="ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max" min="0"
                                       max="300" value="6" data-original="6" ng-focus="hideAds()" ng-blur="showAds()">
                                <a class="btns-one-small" href="" ng-click="getIngredients(20045,'Recipe', true)"
                                   id="btn-adjust">Adjust</a>
                            </li>
                            <li class="adjust-servings__select">
                                <label class="radio-lbl">
                                    <input type="radio" data-role="none" name="isMetric" checked="checked"
                                           ng-value="false" ng-model="isMetric"
                                           class="ng-pristine ng-untouched ng-valid" value="false"><span></span>
                                </label>
                                <span class="measurement-title">US</span>
                            </li>
                            <li class="adjust-servings__select">
                                <label class="radio-lbl">
                                    <input type="radio" data-role="none" name="isMetric" ng-value="true"
                                           ng-model="isMetric" class="ng-pristine ng-untouched ng-valid"
                                           value="true"><span></span>
                                </label>
                                <span class="measurement-title">Metric</span>
                            </li>
                        </ul>
                        <div id="msg-directions" style="display:none;">Note: Recipe directions are for original size.
                        </div>
                    </section>
                    <section class="ng-hide recipe-nutrition panel nav-tab" ng-class="isNutritionPopup ? 'nav-tab' : ''"
                             popup-panel="nutritionSection" ignore-global="false"
                             id="0730bc0a-2d42-404a-9635-40bfd3e61360">
                        <div class="recipe-nutrition__form" itemprop="nutrition"
                             itemtype="http://schema.org/NutritionInformation" ng-show="fullNutrition===false">
                            <h3>Nutrition</h3>
                            <p ng-bind="'Amount per serving (' + servings + ' total)'" class="ng-binding">Amount per
                                serving (6 total)</p>
                            <ul class="nutrientLine">
                                <li class="nutrientLine__item">Calories:</li>
                                <li class="nutrientLine__item--amount" itemprop="calories"><span>246</span> kcal</li>
                                <li class="nutrientLine__item--grid">
                                    <div class="nutriRating">
                                        <div class="nutriGradient" style="width: 12%;"></div>
                                    </div>
                                </li>
                                <li class="nutrientLine__item--percent">12%</li>
                            </ul>
                            <ul class="nutrientLine">
                                <li class="nutrientLine__item">Fat:</li>
                                <li class="nutrientLine__item--amount" itemprop="fatContent"><span>10.8</span> g</li>
                                <li class="nutrientLine__item--grid">
                                    <div class="nutriRating">
                                        <div class="nutriGradient" style="width: 17%;"></div>
                                    </div>
                                </li>
                                <li class="nutrientLine__item--percent">17%</li>
                            </ul>
                            <ul class="nutrientLine">
                                <li class="nutrientLine__item">Carbs:</li>
                                <li class="nutrientLine__item--amount" itemprop="carbohydrateContent"><span>18.3</span>g
                                </li>
                                <li class="nutrientLine__item--grid">
                                    <div class="nutriRating">
                                        <div class="nutriGradient" style="width: 6%;"></div>
                                    </div>
                                </li>
                                <li class="nutrientLine__item--percent">6%</li>
                            </ul>
                            <ul class="nutrientLine">
                                <li class="nutrientLine__item">Protein:</li>
                                <li class="nutrientLine__item--amount" itemprop="proteinContent"><span>19</span> g</li>
                                <li class="nutrientLine__item--grid">
                                    <div class="nutriRating">
                                        <div class="nutriGradient" style="width: 38%;"></div>
                                    </div>
                                </li>
                                <li class="nutrientLine__item--percent">38%</li>
                            </ul>
                            <ul class="nutrientLine">
                                <li class="nutrientLine__item">Cholesterol:</li>
                                <li class="nutrientLine__item--amount" itemprop="cholesterolContent"><span>83</span> mg
                                </li>
                                <li class="nutrientLine__item--grid">
                                    <div class="nutriRating">
                                        <div class="nutriGradient" style="width: 28%;"></div>
                                    </div>
                                </li>
                                <li class="nutrientLine__item--percent">28%</li>
                            </ul>
                            <ul class="nutrientLine">
                                <li>Sodium:</li>
                                <li class="nutrientLine__item--amount" itemprop="sodiumContent"><span>748</span> mg</li>
                                <li class="nutrientLine__item--grid">
                                    <div class="nutriRating">
                                        <div class="nutriGradient" style="width: 30%;"></div>
                                    </div>
                                </li>
                                <li class="nutrientLine__item--percent">30%</li>
                            </ul>
                            <p class="recipe-nutrition__blurb">Based on a 2,000 calorie diet</p>
                            <a href="" class="btns-one-small" ng-click="showFullNutrition()">See full nutrition</a>
                        </div>
                        <div class="recipe-nutrition__form ng-hide" itemprop="nutrition"
                             itemtype="http://schema.org/NutritionInformation" ng-show="fullNutrition===true">
                            <!-- DETAILED NUTRITION -->
                            <div id="nutritiontable" class="fullNutrition">
                                <h3>Nutritional Information</h3>
                                <p class="recipe-title ng-binding" ng-bind="::title">Cabbage Rolls II</p>
                                <div class="top light-underline">
                                    1 Serving <br>
                                    Servings Per Recipe: <span ng-bind="servings" class="ng-binding">6</span><br>
                                    <strong>Amount Per Serving</strong><br>
                                    <div class="nutrition-line-container "
                                         nutrient="::nutrition.calories" hideunits="true" hidepercent="true"
                                         plainname="true"><span ng-hide="nutrient.hasCompleteData===true">** </span>
                                        <span ng-bind="::nutrient.name"
                                              ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                              class="ng-binding bold"></span><span>:</span> <span class="value"> <span
                                                    ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                    ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                    class="ng-binding plain"></span> </span> <span
                                                ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                class="pull-right ng-hide">%</span><span
                                                ng-bind="::nutrient.percentDailyValue"
                                                ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                class="pull-right ng-binding ng-hide"></span></div>
                                    <div class="nutrition-line-container "
                                         nutrient="::nutrition.caloriesFromFat" boldvalue="true" hideunits="true"
                                         hidepercent="true" plainname="true"><span
                                                ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                ng-bind="::nutrient.name"
                                                ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                class="ng-binding bold"></span><span>:</span> <span class="value"> <span
                                                    ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                    ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                    class="ng-binding plain"></span> </span> <span
                                                ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                class="pull-right ng-hide">%</span><span
                                                ng-bind="::nutrient.percentDailyValue"
                                                ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                class="pull-right ng-binding ng-hide"></span></div>
                                </div>
                                <div class="daily-value-container bold-underline">
                                    <label class="daily-value">% Daily Value *</label>
                                </div>
                                <ul class="nutrDetList bold-underline">
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.fat"><span ng-hide="nutrient.hasCompleteData===true">** </span>
                                            <span ng-bind="::nutrient.name"
                                                  ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                  class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="indent light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.saturatedFat"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.cholesterol"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.sodium"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.carbohydrates"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="indent light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.sugars"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="indent light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.fiber"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.protein"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.vitaminA"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.vitaminC"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.calcium"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.iron"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.potassium"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.thiamin"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.niacin"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.vitaminB6"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li class="light-underline">
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.magnesium"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
                                    </li>
                                    <li>
                                        <div class="nutrition-line-container "
                                             nutrient="::nutrition.folate"><span
                                                    ng-hide="nutrient.hasCompleteData===true">** </span> <span
                                                    ng-bind="::nutrient.name"
                                                    ng-class="::(plainname==='true' ? 'plain' : 'bold')"
                                                    class="ng-binding bold"></span><span>:</span> <span
                                                    class="value"> <span
                                                        ng-bind="nutrient.displayValue + (hideunits ? '' : nutrient.unit)"
                                                        ng-class="::(boldvalue==='true' ? 'bold' : 'plain')"
                                                        class="ng-binding plain"></span> </span> <span
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-hide">%</span><span
                                                    ng-bind="::nutrient.percentDailyValue"
                                                    ng-hide="::(hidepercent || nutrient.percentDailyValue==='0')"
                                                    class="pull-right ng-binding ng-hide"></span></div>
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
                                    <a href="" class="btns-one-small" ng-click="showSummaryNutrition()">Hide full
                                        nutrition</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div id="msg-toolbar" class="notification hidden "><span
                                class="notification__message"></span></div>
                    <link href="http://css01.media-allrecipes.com/assets/deployables/v-1.55.0.3383/local-offers-css.bundled.Css"
                          rel="stylesheet">
                    <div class="lo-reservespace">
                        <!-- ngIf: localOffersService.localOffersFeatureEnabled() -->
                        <div class="lo-column ng-scope" ng-controller="ar_controllers_local_offers"
                             ng-if="localOffersService.localOffersFeatureEnabled()">
                            <div class="lo-container--slider ">
                                <div class="title">
                                    <h2>On Sale</h2><span>What's on sale near you.</span>
                                </div>
                                <div class="onoffswitch">
                                    <input type="checkbox" name="myonoffswitch"
                                           class="onoffswitch-checkbox ng-pristine ng-untouched ng-valid"
                                           id="myonoffswitch" data-ng-model="userToggleEnabled"
                                           ng-model-options="{ getterSetter: true }">
                                    <label class="onoffswitch-label" for="myonoffswitch"
                                           id="local-offers-toggle-slider">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                                <div data-ng-show="userToggleEnabled()">
                                    <input type="checkbox" data-ng-click="showSettings = !showSettings"
                                           data-ng-class="{active:showSettings}">
                                    <label class="location-toggle-btn"></label>
                                </div>
                                <div class="dotted-line--local-offers"></div>
                            </div>
                            <div data-ng-show="localOffersService.localOffersUserEnabled()">
                                <script type="text/html" id="stores-template">
                                    <![CDATA[
                                    <div class="retailer carousel-item">
                                        <div class="logo">
                                            <img src=""/>
                                        </div>
                                        <ul cl></ul>
                                    </div>
                                    ]]>
                                </script>
                                <section class="sail local-offers ng-hide" ng-show="showSettings">
                                    <div class="buttons-container">
                                        <div class="lo-container--settings">
                                            <button class="button-reg find-me ui-link" data-ng-click="findMe()"><span
                                                        class="pin icon icon--map-pin--white"></span> Find Me
                                            </button>
                                            <p>or</p>
                                            <div class="zip-container">
                                                <input type="text" max="99999" placeholder="Enter zip code"
                                                       class="ui-input-text ui-body-c ui-corner-all ui-shadow-inset ng-pristine ng-untouched ng-valid"
                                                       ng-model="userZipCode">
                                                <button class="button-reg ui-link"
                                                        data-ng-click="getRetailersByZipCode()">OK
                                                </button>
                                            </div>
                                            <p>Sort stores by</p>
                                            <button class="button-reg sort-by ui-link active"
                                                    data-ng-class="{active:sortingOption === 'ClosestToMe'}"
                                                    data-ng-click="sortRetailersList('ClosestToMe')">Closest to me
                                            </button>
                                            <button class="button-reg sort-by ui-link"
                                                    data-ng-class="{active:sortingOption === 'MostDeals'}"
                                                    data-ng-click="sortRetailersList('MostDeals')">Most deals
                                            </button>
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
                                            <!--<a href='#' class='locate input-circle' title=''></a>--><a href="#next"
                                                                                                           class="next arrows input-circle"
                                                                                                           aria-hidden="true"
                                                                                                           title="Next"><span
                                                        class="icon icon--chevron-right"></span></a></nav>
                                    </div>
                                </div>
                                <div class="local-offers">
                                    <div class="lo-message-box ng-hide" ng-show="displayOverlay">
                                        <div class="lo-msg-arrow-up"></div>
                                        <div class="lo-message-box__box">
                                            <div class="lo-message-box__title">
                                                <div class="lo-message-box__title__text">These nearby stores have
                                                    ingredients on sale!
                                                </div>
                                                <div class="lo-message-box__title__icon">
                                                    <span class="icon--close" ng-click="closeOverlay()"></span>
                                                </div>
                                            </div>
                                            <a>
                                                <div class="lo-message-box__button"
                                                     ng-click="closeOverlay(); findMe();">
                                                    <div class="lo-message-box__button__title">Find the closest stores
                                                    </div>
                                                    <div class="lo-message-box__button__subtitle">(uses your location)
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="clientID"></div>
                        </div><!-- end ngIf: localOffersService.localOffersFeatureEnabled() -->
                    </div>
                    <ul class="checklist dropdownwrapper list-ingredients-1" ng-hide="reloaded" id="lst_ingredients_1">
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="4267" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,4267)">
                                <span class="recipe-ingred_txt added" data-id="4267" data-nameid="4267"
                                      itemprop="ingredients">12 leaves cabbage</span>
                            </label>
                            <!-- ngRepeat: deal in deals["4267"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="1657" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,1657)">
                                <span class="recipe-ingred_txt added" data-id="1657" data-nameid="1657"
                                      itemprop="ingredients">1 cup cooked white rice</span>
                            </label>
                            <!-- ngRepeat: deal in deals["1657"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="16317" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,16317)">
                                <span class="recipe-ingred_txt added" data-id="16317" data-nameid="16317"
                                      itemprop="ingredients">1 egg, beaten</span>
                            </label>
                            <!-- ngRepeat: deal in deals["16317"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="16278" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,16278)">
                                <span class="recipe-ingred_txt added" data-id="16278" data-nameid="16278"
                                      itemprop="ingredients">1/4 cup milk</span>
                            </label>
                            <!-- ngRepeat: deal in deals["16278"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="4397" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,4397)">
                                <span class="recipe-ingred_txt added" data-id="4397" data-nameid="4397"
                                      itemprop="ingredients">1/4 cup minced onion</span>
                            </label>
                            <!-- ngRepeat: deal in deals["4397"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="4140" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,4140)">
                                <span class="recipe-ingred_txt added" data-id="4140" data-nameid="4140"
                                      itemprop="ingredients">1 pound extra-lean ground beef</span>
                            </label>
                            <!-- ngRepeat: deal in deals["4140"] -->
                        </li>
                    </ul>
                    <ul class="checklist dropdownwrapper list-ingredients-2" ng-hide="reloaded" id="lst_ingredients_2">
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="16421" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,16421)">
                                <span class="recipe-ingred_txt added" data-id="16421" data-nameid="16421"
                                      itemprop="ingredients">1 1/4 teaspoons salt</span>
                            </label>
                            <!-- ngRepeat: deal in deals["16421"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="16406" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,16406)">
                                <span class="recipe-ingred_txt added" data-id="16406" data-nameid="16406"
                                      itemprop="ingredients">1 1/4 teaspoons ground black pepper</span>
                            </label>
                            <!-- ngRepeat: deal in deals["16406"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="4582" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,4582)">
                                <span class="recipe-ingred_txt added" data-id="4582" data-nameid="4582"
                                      itemprop="ingredients">1 (8 ounce) can tomato sauce</span>
                            </label>
                            <!-- ngRepeat: deal in deals["4582"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="1525" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,1525)">
                                <span class="recipe-ingred_txt added" data-id="1525" data-nameid="1525"
                                      itemprop="ingredients">1 tablespoon brown sugar</span>
                            </label>
                            <!-- ngRepeat: deal in deals["1525"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="5107" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,5107)">
                                <span class="recipe-ingred_txt added" data-id="5107" data-nameid="5107"
                                      itemprop="ingredients">1 tablespoon lemon juice</span>
                            </label>
                            <!-- ngRepeat: deal in deals["5107"] -->
                        </li>
                        <li class="checkList__line">
                            <label ng-class="{true: 'checkList__item'}[true]" class="checkList__item">
                                <input data-id="7428" name="ingredientCheckbox" data-role="none" type="checkbox"
                                       value="N" ng-click="saveIngredient($event,7428)">
                                <span class="recipe-ingred_txt added" data-id="7428" data-nameid="7428"
                                      itemprop="ingredients">1 teaspoon Worcestershire sauce</span>
                            </label>
                            <!-- ngRepeat: deal in deals["7428"] -->
                        </li>
                        <li class="checkList__line">
                            <label class="checkList__item" id="btn-addtolist">
                                <input ng-model="allIngredientsCheckBox" name="slCheckbox" data-role="none"
                                       type="checkbox" ng-click="saveRecipe('20045','Recipe')"
                                       class="ng-pristine ng-untouched ng-valid">
                                <span class="recipe-ingred_txt added white">Add all ingredients to list</span>
                            </label>
                        </li>
                    </ul>
                    <!-- ngRepeat: column in ingredientColumns -->
                    <div class="lo-smu-output ng-scope ng-hide" data-ng-controller="ar_controllers_recipe_mws"
                         data-ng-show="mws">
                        <div class="lo-smu-container">
                            <img class="lo-smu-photo">
                            <p class="lo-smu-title">May we suggest</p>
                            <div class="lo-smu-text">
                                <p class="offer-name ng-binding" data-ng-bind-html="mws.defaultDisplayDescription"></p>
                                <p data-ng-bind-html="mws.title" class="ng-binding"></p>
                                <p><a data-no-follow-if-external="" data-ng-click="fireClickPixel(mws.clickPixels)"
                                      data-ng-href="" target="_blank" data-ng-bind-html="mws.clickThroughText"
                                      class="ng-binding" rel="nofollow"></a></p>
                                <p class="lo-smu-ad">ADVERTISEMENT</p>
                                <div class="tracking-element " load-dom-script="" script="mws.moatUrl"></div>
                                <!-- ngRepeat: trackingUrl in mws.trackingPixels track by $index -->
                                <!-- ngRepeat: clickPixel in listClickPixels track by $index -->
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    var userInformation =
                        {
                            clientIp: '118.70.233.70'
                        };
                </script>
                <section class="recipe-directions ng-scope" data-ng-controller="ar_controllers_directions"
                         data-ng-init="init(20045)">
                    <h2 class=" heading__h2--gutters">
                        Directions
                    </h2>
                    <span class="recipe-directions__header--toggles">
<span class="recipe-directions--print"><a ng-href="print/?recipeType=Recipe&amp;servings=6"
                                          data-internal-referrer-link="recipe button" data-click-id="recipe button"
                                          class="" target="_self" href="print/?recipeType=Recipe&amp;servings=6"><span
                class="kf-text print">Print</span> <span class="icon--recipe-directions-print"></span></a></span>

</span>
                    <div class="directions--section">
                        <div class="directions--section__steps">
                            <!-- cooking stats -->
                            <ul class="prepTime">
                                <li class="prepTime__item"><span class="icon--stats-clock"></span></li>
                                <li class="prepTime__item">
                                    <p class="prepTime__item--type">Prep</p>
                                    <time itemprop="prepTime" datetime="PT30M"><span
                                                class="prepTime__item--time">30</span> m
                                    </time>
                                </li>
                                <li class="prepTime__item">
                                    <p class="prepTime__item--type">Cook</p>
                                    <time itemprop="cookTime" datetime="PT9H"><span
                                                class="prepTime__item--time">9</span> h
                                    </time>
                                </li>
                                <li class="prepTime__item">
                                    <p class="prepTime__item--type">Ready In</p>
                                    <time itemprop="totalTime" datetime="PT9H30M"><span
                                                class="prepTime__item--time">9</span> h <span
                                                class="prepTime__item--time">30</span> m
                                    </time>
                                </li>
                            </ul>
                            <ol class="list-numbers recipe-directions__list" itemprop="recipeInstructions">
                                <li class="step" ng-class="{'finished': stepIsActive0}"
                                    ng-click="stepIsActive0 = !stepIsActive0"><span
                                            class="recipe-directions__list--item">Bring a large pot of water to a boil. Boil cabbage leaves 2 minutes; drain.</span>
                                </li>
                                <li class="step" ng-class="{'finished': stepIsActive1}"
                                    ng-click="stepIsActive1 = !stepIsActive1"><span
                                            class="recipe-directions__list--item">In large bowl, combine 1 cup cooked rice, egg, milk, onion, ground beef, salt, and pepper. Place about 1/4 cup of meat mixture in center of each cabbage leaf, and roll up, tucking in ends. Place rolls in slow cooker.</span>
                                </li>
                                <li class="step" ng-class="{'finished': stepIsActive2}"
                                    ng-click="stepIsActive2 = !stepIsActive2"><span
                                            class="recipe-directions__list--item">In a small bowl, mix together tomato sauce, brown sugar, lemon juice, and Worcestershire sauce. Pour over cabbage rolls.</span>
                                </li>
                                <li class="step" ng-class="{'finished': stepIsActive3}"
                                    ng-click="stepIsActive3 = !stepIsActive3"><span
                                            class="recipe-directions__list--item">Cover, and cook on Low 8 to 9 hours.</span>
                                </li>
                            </ol>
                            <ol class="list-numbers recipe-directions__list recipeNotes ng-hide" ng-show="itemNote">
                                <li class="step"><span class="recipe-directions__list--item ng-binding"
                                                       ng-bind-html="itemNote"></span></li>
                            </ol>
                        </div>
                        <div class="directions--section__right-side">
                            <div class="directions--section__tipsAndTricks">
                                <div class="directions--section__tipsAndTricks__title">
                                    <span class="directions--section__tipsAndTricks__title__font">You might also like</span>
                                </div>
                                <div class="relatedVideos">
                                    <div class="relatedVideos__item">
                                        <a href="/video/766/coconut-milk-corned-beef-and-cabbage?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 1"
                                           data-internal-referrer-link="tips and tricks"
                                           data-click-id="tips and tricks 1" class="" target="_self">
                                            <img class="relatedVideos__thumbnail"
                                                 src="http://brightcove.vo.llnwd.net/d22/unsecured/media/1033249144001/1033249144001_1618103237001_th-1565542298001.jpg?pubId=1033249144001">
                                        </a>
                                        <div class="relatedVideos__thumbnail__icon-hasVideo">
                                            <a class="icon--videoplay "
                                               href="/video/766/coconut-milk-corned-beef-and-cabbage?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 1"
                                               data-internal-referrer-link="tips and tricks"
                                               data-click-id="tips and tricks 1" target="_self"></a>
                                        </div>
                                        <div class="relatedVideos__details">
                                            <a href="/video/766/coconut-milk-corned-beef-and-cabbage?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 1"
                                               data-internal-referrer-link="tips and tricks"
                                               data-click-id="tips and tricks 1" class="" target="_self">
                                                <span class="relatedVideos__details_title">Coconut Milk Corned Beef and Cabbage</span>
                                                <p class="relatedVideos__details__description">See how to make corned
                                                    beef, Thai-style, with coconut milk and curry paste.</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relatedVideos__item">
                                        <a href="/video/5086/unstuffed-cabbage-roll?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 2"
                                           data-internal-referrer-link="tips and tricks"
                                           data-click-id="tips and tricks 2" class="" target="_self">
                                            <img class="relatedVideos__thumbnail"
                                                 src="http://brightcove.vo.llnwd.net/v1/unsecured/media/1033249144001/201506/2897/1033249144001_4269414114001_th-4269350634001.jpg?pubId=1033249144001">
                                        </a>
                                        <div class="relatedVideos__thumbnail__icon-hasVideo">
                                            <a class="icon--videoplay "
                                               href="/video/5086/unstuffed-cabbage-roll?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 2"
                                               data-internal-referrer-link="tips and tricks"
                                               data-click-id="tips and tricks 2" target="_self"></a>
                                        </div>
                                        <div class="relatedVideos__details">
                                            <a href="/video/5086/unstuffed-cabbage-roll?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 2"
                                               data-internal-referrer-link="tips and tricks"
                                               data-click-id="tips and tricks 2" class="" target="_self">
                                                <span class="relatedVideos__details_title">Unstuffed Cabbage Roll</span>
                                                <p class="relatedVideos__details__description">One pot meal with
                                                    cabbage, meat, tomatoes and seasonings. </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="relatedVideos__item">
                                        <a href="/video/2656/corned-beef-and-cabbage-i?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 3"
                                           data-internal-referrer-link="tips and tricks"
                                           data-click-id="tips and tricks 3" class="" target="_self">
                                            <img class="relatedVideos__thumbnail"
                                                 src="http://brightcove.vo.llnwd.net/d21/unsecured/media/1033249144001/1033249144001_1957324004001_th-1954509279001.jpg?pubId=1033249144001">
                                        </a>
                                        <div class="relatedVideos__thumbnail__icon-hasVideo">
                                            <a class="icon--videoplay "
                                               href="/video/2656/corned-beef-and-cabbage-i?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 3"
                                               data-internal-referrer-link="tips and tricks"
                                               data-click-id="tips and tricks 3" target="_self"></a>
                                        </div>
                                        <div class="relatedVideos__details">
                                            <a href="/video/2656/corned-beef-and-cabbage-i?internalSource=tips and tricks&amp;referringId=20045&amp;referringContentType=recipe&amp;clickId=tips and tricks 3"
                                               data-internal-referrer-link="tips and tricks"
                                               data-click-id="tips and tricks 3" class="" target="_self">
                                                <span class="relatedVideos__details_title">Corned Beef and Cabbage I</span>
                                                <p class="relatedVideos__details__description">See how to make a
                                                    traditional recipe for corned beef and cabbage.</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <h2 class="heading__h2--gutters share">Share</h2>
                <section ng-controller="ar_controllers_share_item" id="shareRecipe" class="ng-scope">
                    <section class="recipe-share share-container">
                        <a ng-click="socialShareStart('20045', 'pinterest'); socialShareNavigate('http://pinterest.com/pin/create/button/?url=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=usspnt&amp;media=http://images.media-allrecipes.com/userphotos/250x250/149646.jpg&amp;description=Cabbage%20Rolls%20II%20-%20Allrecipes.com', '_blank', PinterestTargetParams);"
                           class="pinterest"></a>
                        <a ng-click="socialShareStart('20045', 'facebook'); socialShareNavigate('https://facebook.com/sharer.php?u=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=ussfac', '_blank', FacebookTargetParams);"
                           class="facebook"></a>
                        <a ng-click="socialShareStart('20045', 'stumbleupon'); socialShareNavigate('https://www.stumbleupon.com/submit?url=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=usssup', '_blank', StumbleTargetParams);"
                           class="stumbleUpon"></a>
                        <a ng-click="socialShareStart('20045', 'twitter'); socialShareNavigate('https://twitter.com/intent/tweet?url=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=usstwt&amp;text=Cabbage%20Rolls%20II%20-%20Allrecipes.com&amp;via=Allrecipes', '_blank', TwitterTargetParams);"
                           class="twitter"></a>
                        <a ng-click="socialShareStart('20045', 'google+'); socialShareNavigate('https://plus.google.com/share?url=http://allrecipes.com/recipe/20045/cabbage-rolls-ii/?lnkid=ussgog', '_blank', GoogleTargetParams);"
                           class="google"></a>
                        <a href="" class="email" ng-click="toggleEmailForm(false)"></a>
                    </section>
                    <section class="email-recipe">
                        <form name="emailForm" ng-submit="sendEmail('20045', 'recipe')" novalidate=""
                              class="ng-pristine ng-valid ng-valid-email">
                            <section class="show-form ng-hide" ng-show="showForm">
                                <div class="input-wrap">
                                    <input type="email" placeholder="Recipient's email" name="txtEmail"
                                           ng-model="toEmailAddress"
                                           class="ng-valid-email ng-pristine ng-untouched ng-valid"
                                           ng-focus="hideAds(); AddEmailEnabled = true;" ng-blur="showAds()">
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
                <div class="mag-cta-mobile">
                    <div class="mag-cta ng-scope" data-ng-controller="ar_controllers_mag_subscription">
                        <a ng-href="http://armagazine.com/get-the-magazine" target="_blank" class="ad-mag-homeBtm"
                           href="http://armagazine.com/get-the-magazine">
                            <h2>Get the magazine</h2>
                            <img class="ad-mag-homeBtm__th" alt="Subscribe to Allrecipes Magazine"
                                 title="Allrecipes Magazine" src="http://images.media-allrecipes.com/images/61544.png">
                            <div class="ad-mag-homeBtm__text">
                                <h4> Get a full year for just $7.99!</h4>
                                <p>Cook 5-star weekday dinners every time.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <script>
                    var reviewsInitialSet = {
                        "recipeId": 20045,
                        "recipeTitle": "Cabbage Rolls II",
                        "recipeImageUrl": "http://images.media-allrecipes.com/userphotos/250x250/149646.jpg",
                        "heroImage": null,
                        "reviews": {
                            "MostHelpfulPositive": {
                                "text": "We all really enjoyed these!  My kother-in-law gave me a great tip to make this recipe easier:  Put you cabbage head in the freezer, and freeze completely.  When you take it out and it thaws, the leaves will be wilted and very easy to work with, eliminating the process of boiling the cabbage---one less step!",
                                "rating": 5.0,
                                "reviewID": 637888,
                                "helpfulCount": 3075,
                                "dateLastModified": "January 14, 2006",
                                "submitter": {
                                    "userID": 221539,
                                    "name": "Saltair4",
                                    "profileUrl": "/cook/221539/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/userphotos/90x90/01/00/59/1005937.jpg"}]},
                                    "followersCount": 13,
                                    "favoritesCount": 598,
                                    "madeRecipesCount": 9,
                                    "city": "LeRoy",
                                    "region": "New York"
                                }
                            },
                            "MostHelpfulNegative": {
                                "text": "This recipe is really just okay, but could be tweaked to make it better.\r\n\r\nThe sauce recipe needs to be quadrupled, because even a double batch leaves the rolls pretty dry.  I would also add a little tomato sauce to the ground beef mixture, and a little garlic and maybe a little mustard powder.\r\n\r\nAlso, you should know that the easiest way to prepare your cabbage is to core the head, and steam the entire thing.  If you try to peel the unsteamed leaves, you are going to tear them.",
                                "rating": 3.0,
                                "reviewID": 231793,
                                "helpfulCount": 1081,
                                "dateLastModified": "September 30, 2003",
                                "submitter": {
                                    "userID": 276865,
                                    "name": "PATSY HENNESSEY",
                                    "profileUrl": "/cook/276865/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},
                                    "followersCount": 9,
                                    "favoritesCount": 22,
                                    "madeRecipesCount": 57,
                                    "city": "Tucson",
                                    "region": "Arizona"
                                }
                            },
                            "MostPositiveIndex": 1,
                            "MostCriticalIndex": 3,
                            "Reviews": [{
                                "text": "We all really enjoyed these!  My kother-in-law gave me a great tip to make this recipe easier:  Put you cabbage head in the freezer, and freeze completely.  When you take it out and it thaws, the leaves will be wilted and very easy to work with, eliminating the process of boiling the cabbage---one less step!",
                                "rating": 5.0,
                                "reviewID": 637888,
                                "helpfulCount": 3075,
                                "dateLastModified": "January 14, 2006",
                                "submitter": {
                                    "userID": 221539,
                                    "name": "Saltair4",
                                    "profileUrl": "/cook/221539/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/userphotos/90x90/01/00/59/1005937.jpg"}]},
                                    "followersCount": 13,
                                    "favoritesCount": 598,
                                    "madeRecipesCount": 9,
                                    "city": "LeRoy",
                                    "region": "New York"
                                }
                            }, {
                                "text": "5 stars (if you follow other reviewers' advice).  I am so glad I read the other reviews, because they turned out perfectly!  I, too, steamed the entire head of cabbage first, added some garlic powder to the beef mixture (I used 1/8 tsp - perfect!), doubled the sauce (a must!), and baked at 350 (covered with foil) for an hour, instead of using the slow cooker.  The only things I would change include using 3/4 tsp. pepper (1 1/4 tsp. was too spicy), and increase the onion to 1/2 cup for more flavor (which I did, and it was great!).  I measured exactly 1/4 cup for each roll, and I ended up with 10 rolls.  If you are pressed for time, you can substitute 1 Tbl. dried minced onion for the fresh onion.  The second time I made this, I sprinkled some salt on the rolls before adding the sauce, and that helped give it more flavor.  One more note: be SURE and use VERY lean beef - you don't cook the meat before rolling it into the cabbage leaves, so there will be no way to drain off the fat.  Thanks for the recipe!",
                                "rating": 5.0,
                                "reviewID": 340054,
                                "helpfulCount": 1900,
                                "dateLastModified": "January 15, 2004",
                                "submitter": {
                                    "userID": 296701,
                                    "name": "KRANEY",
                                    "profileUrl": "/cook/296701/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/global/features/54.gif"}]},
                                    "followersCount": 40,
                                    "favoritesCount": 785,
                                    "madeRecipesCount": 650,
                                    "city": "Houston",
                                    "region": "Texas"
                                }
                            }, {
                                "text": "This recipe is really just okay, but could be tweaked to make it better.\r\n\r\nThe sauce recipe needs to be quadrupled, because even a double batch leaves the rolls pretty dry.  I would also add a little tomato sauce to the ground beef mixture, and a little garlic and maybe a little mustard powder.\r\n\r\nAlso, you should know that the easiest way to prepare your cabbage is to core the head, and steam the entire thing.  If you try to peel the unsteamed leaves, you are going to tear them.",
                                "rating": 3.0,
                                "reviewID": 231793,
                                "helpfulCount": 1081,
                                "dateLastModified": "January 19, 2003",
                                "submitter": {
                                    "userID": 276865,
                                    "name": "PATSY HENNESSEY",
                                    "profileUrl": "/cook/276865/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},
                                    "followersCount": 9,
                                    "favoritesCount": 22,
                                    "madeRecipesCount": 57,
                                    "city": "Tucson",
                                    "region": "Arizona"
                                }
                            }, {
                                "text": "THEY WERE AWESOME, I THINK THE BEST I EVER MADE. I FOLLOWED MOST OF THE REVIEWS, AND MADE MY OWN ADJUSTMENTS. I DOUBLED THE RECIPE ADDED 4 CLOVES OF GARLIC AND USED A COUPLE OF SHALLOTS INSTEAD OF THE ONION. THE SAUCE I MADE WAS 1 28 OZ CAN OF DICED TOMATOES AND 1 28 OZ CAN OF CRUSHED TOMATOES, WITH 3 TBSP OF BROWN SUGAR, 3 TBSP OF LEMON JUICE AND 1 TSP OF WORCESTERSHIRE. I COOKED SOME IN MY CROCK POT AND SOME IN THE OVEN. THE ONES FROM THE OVEN TURNED OUT THE BEST. THIS RECIPE IS A DEFINTE KEEPER.",
                                "rating": 5.0,
                                "reviewID": 215117,
                                "helpfulCount": 552,
                                "dateLastModified": "December 10, 2002",
                                "submitter": {
                                    "userID": 748819,
                                    "name": "Shelly",
                                    "profileUrl": "/cook/748819/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},
                                    "followersCount": 0,
                                    "favoritesCount": 2,
                                    "madeRecipesCount": 4,
                                    "city": "",
                                    "region": ""
                                }
                            }, {
                                "text": "my 5 star rating is for this recipe as written.  I would give this 10 stars with my changes as it can be totally out of this world awesome with the alterations! I've been taught (by several Polish ancestors) to use half ground beef and half ground pork for tender, flavorful golumbki.  I cooked the rice in water with 2 beef bouillion cubes added to it. (don't add extra salt to the meat mixture though.) To the meat, I added 1/2 tsp. garlic powder. The pepper may seem like a lot but makes this dish sing! (well, it made my family sing...)  I tripled this recipe with great success.  If you're going through the trouble of making golumbki, make enough to freeze another meal or for a family gathering.  THANK YOU for asking us to boil the cabbage leaves rather than freeze them.  (Tripling this took 2 heads of cabbage and made about 48 rolls.) It makes all the difference between tender edible cabbage leaves or rubbery ones to boil the cabbage leaves.  My family has always taken rinsed, squeezed out sour kraut to lay over the prepared cabbage rolls.  Pour the tomato sauce mixture over all this and top with (uncooked) bacon slices.  No, this is not for the faint of heart fat free consumers, but for the people who want traditional cabbbage rolls (golumbki) that they and their kids will gobble up and ask for more! One more thing, this dish freezes well, so made in large quantities is nothing to fear.",
                                "rating": 5.0,
                                "reviewID": 1603245,
                                "helpfulCount": 481,
                                "dateLastModified": "November 12, 2008",
                                "submitter": {
                                    "userID": 727164,
                                    "name": "Vicky Gunkel",
                                    "profileUrl": "/cook/727164/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/userphotos/90x90/01/82/88/1828868.jpg"}]},
                                    "followersCount": 35,
                                    "favoritesCount": 195,
                                    "madeRecipesCount": 250,
                                    "city": "",
                                    "region": ""
                                }
                            }, {
                                "text": "These were great...just like I remember my Mom making.  I did double the sauce and baked them in a 9x13 casserole dish for 1 hour at 350 deg instead of using the crockpot.",
                                "rating": 5.0,
                                "reviewID": 304680,
                                "helpfulCount": 371,
                                "dateLastModified": "September 24, 2003",
                                "submitter": {
                                    "userID": 894235,
                                    "name": "ACPHIFER",
                                    "profileUrl": "/cook/894235/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},
                                    "followersCount": 4,
                                    "favoritesCount": 209,
                                    "madeRecipesCount": 239,
                                    "city": "Athens",
                                    "region": "Pennsylvania"
                                }
                            }, {
                                "text": "I doubled the sauce also, and it was super. The batch I made produced more than 12 rolls (I guess European cabbages are smaller?) but it was still delicious. \r\nSomething I'll try next time is chopping the remainder of the cabbage and placing that in the bottom of the pan, rolls atop it, to allow for people who really love their cabbage. The juices make everything taste fabulous.",
                                "rating": 4.0,
                                "reviewID": 117832,
                                "helpfulCount": 287,
                                "dateLastModified": "June 07, 2002",
                                "submitter": {
                                    "userID": 538634,
                                    "name": "Susanne_NL",
                                    "profileUrl": "/cook/538634/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/userphotos/90x90/00/31/54/315419.jpg"}]},
                                    "followersCount": 0,
                                    "favoritesCount": 115,
                                    "madeRecipesCount": 12,
                                    "city": "Apeldoorn",
                                    "region": "Gelderland"
                                }
                            }, {
                                "text": "i was shocked! being of ukranian descent and having married into polish heritage, i'd had 'piggies' as many times as i've had haluski but had no idea they were so simple! started them yesterday AM before we cleaned our basement and by the time we needed a break they were done! my husband LOVED them (and that's saying something) and my 3 y.o wolfed his down, eating even the cabbage! this one has earned its place in my recipe basket!",
                                "rating": 5.0,
                                "reviewID": 105618,
                                "helpfulCount": 264,
                                "dateLastModified": "March 29, 2002",
                                "submitter": {
                                    "userID": 544360,
                                    "name": "PRINCESSRICA",
                                    "profileUrl": "/cook/544360/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},
                                    "followersCount": 1,
                                    "favoritesCount": 0,
                                    "madeRecipesCount": 7,
                                    "city": "",
                                    "region": ""
                                }
                            }, {
                                "text": "This recipe is excellent, I looked at the reviews and other recipes and made a few alterations; my family loved them.  I quadrupled the sauce recipe.  And I used 1# of hamburger and 1# of spicey italian sausage.  I ended up with 2 casseroles (one for the freezer).  Also, I steamed one head of lettuce and it went to long and ended up a mushy mess.  I found a video on the internet with a different technique for the cabbage leaves and I'll never do it another way.  Get a very large pot of water and bring up to a small boil; as you're waiting for the water to boil core the cabbage head with a fairly wide margin at the top and take off the outer leaves that are dirty. Once the water is hot, place the cabbage head into the boiling water.  After about a minute or so, the outside leaves will start to separate from the head; approx every 45 seconds a leaf or two will separate.  As they separate remove them from the water into a pie tin or bowl.  This is fail proof and the leaves are the perfect softness to roll with ease.",
                                "rating": 5.0,
                                "reviewID": 1752149,
                                "helpfulCount": 240,
                                "dateLastModified": "February 03, 2009",
                                "submitter": {
                                    "userID": 944190,
                                    "name": "MERKLEDA",
                                    "profileUrl": "/cook/944190/",
                                    "photo": {"urls": [{"url": "http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"}]},
                                    "followersCount": 0,
                                    "favoritesCount": 138,
                                    "madeRecipesCount": 13,
                                    "city": "",
                                    "region": ""
                                }
                            }]
                        },
                        "totalReviews": 1073
                    };
                </script>
                <section id="reviews" class="recipe-reviews ng-scope"
                         ng-init="init('20045', 2, 9, 'Recipe', 120, 'MostHelpful')">
                    <h2 class="heading__h2--gutters review">Reviews</h2>
                    <a class="icon-read--reviews" href=""
                       ng-click="$event.preventDefault();reviewModalDialog(1, sortBy)">
                        <span>Read all reviews</span> <span
                                class="svg-icon--recipe-page--read-reviews svg-icon--recipe-page--read-reviews-dims"></span>
                    </a>
                    <span class="recipe-reviews__header--count">1073</span>
                    <script>
                        var userReview = {"recipeId": 0, "userReview": {"text": null, "rating": 0.0, "date": null}};
                    </script>
                    <div class="current-user review-container clearfix current--reviewer ng-scope"
                         data-ng-controller="ar_controllers_rate_and_review">
                        <div ng-show="model.userReview.rating == 0" class="current-user__rateballoon own-review">
                            <img class="img-profile rateballoon" alt="profile image"
                                 src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png">
                            <a href="javascript:void(0);" ng-click="openRating()" id="ratingButton" target="_self">
                                <div class="rateballoon">Rate and review</div>
                            </a>
                        </div>
                        <div ng-show="model.userReview.rating != 0" class="current-user__review own-review ng-hide">
                        </div>
                    </div>
                    <ol>
                        <li><h4 class="helpful-header">1431 Ratings</h4></li>
                        <li>
                            <div title="778 cooks loved it!">
                                <div class="reviewsummary--bar">
                                    <div class="reviewsummary--percent" style="width: 54%">&nbsp;</div>
                                </div>
                                <div class="rating-stars" data-ratingstars="5">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div title="428 cooks liked it!">
                                <div class="reviewsummary--bar">
                                    <div class="reviewsummary--percent" style="width: 29%">&nbsp;</div>
                                </div>
                                <div class="rating-stars" data-ratingstars="4">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div title="145 cooks thought it was OK">
                                <div class="reviewsummary--bar">
                                    <div class="reviewsummary--percent" style="width: 10%">&nbsp;</div>
                                </div>
                                <div class="rating-stars" data-ratingstars="3">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div title="51 cooks didn't like it">
                                <div class="reviewsummary--bar">
                                    <div class="reviewsummary--percent" style="width: 3%">&nbsp;</div>
                                </div>
                                <div class="rating-stars" data-ratingstars="2">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div title="29 cooks couldn't eat it">
                                <div class="reviewsummary--bar">
                                    <div class="reviewsummary--percent" style="width: 2%">&nbsp;</div>
                                </div>
                                <div class="rating-stars" data-ratingstars="1">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                </div>
                            </div>
                        </li>
                    </ol>
                    <div class="review-container clearfix" itemprop="review" itemtype="http://schema.org/Review">
                        <meta id="metaRecipeTitle" itemprop="itemReviewed" content="">
                        <span class="helpful-header">Most helpful positive review</span>
                        <article class="reviewer-info imadeit-enabled">
                            <div class="recipe-details-cook-stats-container">
                                <a href="/cook/221539/" target="_self">
                                    <ul class="cook-details">
                                        <li>
                                            <img class="img-profile elevate-cook-thumbnail " data-lazy-load=""
                                                 data-original-src="http://images.media-allrecipes.com/userphotos/90x90/01/00/59/1005937.jpg"
                                                 alt="" title=""
                                                 src="http://images.media-allrecipes.com/userphotos/90x90/01/00/59/1005937.jpg"
                                                 style="display: inline;">
                                        </li>
                                        <li class="cook-info">
                                            <h4 itemprop="author"> Saltair4
                                            </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li>
                                                    <span class="icon--cook-card-follower" title="Followers"></span>
                                                </li>
                                                <li>
                                                    <span>13</span>
                                                </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li>
                                                    <span class="icon--cook-card-favorite" title="Favorites"></span>
                                                </li>
                                                <li>
                                                    <span>598</span>
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
                                <div class="rating-stars" data-ratingstars="5">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                </div>
                                <div itemprop="reviewRating" itemtype="http://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                </div>
                                <div class="review-date">1/14/2006</div>
                                <meta itemprop="dateCreated" content="2006-01-14">
                            </div>
                        </article>
                        <p itemprop="reviewBody">
                            We all really enjoyed these! My kother-in-law gave me a great tip to make this recipe
                            easier: Put you cabbage head in the freezer, and freeze completely. When you take it out and
                            it thaws, th...
                        </p>
                        <div class="review-detail">
                            <a class="review-detail__link" href="reviews/637888/" target="_self">
                                <span class="icon--expand-icon"></span>
                                <span>Read more</span>
                            </a>
                        </div>
                    </div>
                    <div class="review-container clearfix" itemprop="review" itemtype="http://schema.org/Review">
                        <meta id="metaRecipeTitle" itemprop="itemReviewed" content="">
                        <span class="helpful-header">Most helpful critical review</span>
                        <article class="reviewer-info imadeit-enabled">
                            <div class="recipe-details-cook-stats-container">
                                <a href="/cook/276865/" target="_self">
                                    <ul class="cook-details">
                                        <li>
                                            <img class="img-profile elevate-cook-thumbnail " data-lazy-load=""
                                                 data-original-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"
                                                 alt="" title=""
                                                 src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"
                                                 style="display: inline;">
                                        </li>
                                        <li class="cook-info">
                                            <h4 itemprop="author"> PATSY HENNESSEY
                                            </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li>
                                                    <span class="icon--cook-card-follower" title="Followers"></span>
                                                </li>
                                                <li>
                                                    <span>9</span>
                                                </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li>
                                                    <span class="icon--cook-card-favorite" title="Favorites"></span>
                                                </li>
                                                <li>
                                                    <span>22</span>
                                                </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li>
                                                    <span class="icon--cook-card-made" title="Recipes Made"></span>
                                                </li>
                                                <li>
                                                    <span>57</span>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <div class="stars-and-date-container">
                                <div class="rating-stars" data-ratingstars="3">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star-2015.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                    <img height="14" width="14"
                                         src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.svg">
                                </div>
                                <div itemprop="reviewRating" itemtype="http://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="3">
                                </div>
                                <div class="review-date">9/30/2003</div>
                                <meta itemprop="dateCreated" content="2003-09-30">
                            </div>
                        </article>
                        <p itemprop="reviewBody">
                            This recipe is really just okay, but could be tweaked to make it better.
                            The sauce recipe needs to be quadrupled, because even a double batch leaves the rolls pretty
                            dry. I would also add a ...
                        </p>
                        <div class="review-detail">
                            <a class="review-detail__link" href="reviews/231793/"
                               ng-click="$event.preventDefault();reviewModalDialog(2, sortBy)" target="_self">
                                <span class="icon--expand-icon"></span>
                                <span>Read more</span>
                            </a>
                        </div>
                    </div>

                    <div class="recipe-reviews__more-container">
                        <div class="more-button">
                            <a class="moreReviews btns-one-small">More Reviews</a>
                        </div>
                    </div>

                </section>

                <section class="zergnet">
                    <h2 class="heading__h2--gutters">
                        Other stories that may interest you
                    </h2>
                    <div id="zergnet-widget-33596" class="zergnet-reserve-space widget-loaded">
                        <div id="zerglayout" class="zerglayoutcl"
                             style="clear:both;line-height:normal;border: 0px solid #000; font-family: arial,serif; font-size: 17px; text-align: center; background: #fff; width: 915px; margin: 0px auto;">
                            <div style="clear:both;"></div>
                            <div style="clear:both;">
                                <div class="zergentity"
                                     style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: both;">
                                    <a href="http://www.zergnet.com/i/1384548/33596/0/0/0" target="_blank"
                                       rel="nofollow">
                                        <img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;"
                                             src="http://img1.zergnet.com/1384548_140.jpg" nopin="true"
                                             data-pin-no-hover="true">
                                    </a>
                                    <div class="zergheadline" style="margin-top: 2px;">
                                        <a href="http://www.zergnet.com/i/1384548/33596/0/0/0"
                                           style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;"
                                           target="_blank" rel="nofollow">5 Things You Didn't Know About Costco's Food
                                            Court</a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="zergentity"
                                     style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
                                    <a href="http://www.zergnet.com/i/1411956/33596/0/0/0" target="_blank"
                                       rel="nofollow">
                                        <img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;"
                                             src="http://img1.zergnet.com/1411956_140.jpg" nopin="true"
                                             data-pin-no-hover="true">
                                    </a>
                                    <div class="zergheadline" style="margin-top: 2px;">
                                        <a href="http://www.zergnet.com/i/1411956/33596/0/0/0"
                                           style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;"
                                           target="_blank" rel="nofollow">10 Restaurant Decisions You'll Regret Every
                                            Time</a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="zergentity"
                                     style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
                                    <a href="http://www.zergnet.com/i/1371217/33596/0/0/0" target="_blank"
                                       rel="nofollow">
                                        <img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;"
                                             src="http://img2.zergnet.com/1371217_140.jpg" nopin="true"
                                             data-pin-no-hover="true">
                                    </a>
                                    <div class="zergheadline" style="margin-top: 2px;">
                                        <a href="http://www.zergnet.com/i/1371217/33596/0/0/0"
                                           style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;"
                                           target="_blank" rel="nofollow">How To Make Ice Cream In Your Blender</a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="zergentity"
                                     style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
                                    <a href="http://www.zergnet.com/i/1353486/33596/0/0/0" target="_blank"
                                       rel="nofollow">
                                        <img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;"
                                             src="http://img5.zergnet.com/1353486_140.jpg" nopin="true"
                                             data-pin-no-hover="true">
                                    </a>
                                    <div class="zergheadline" style="margin-top: 2px;">
                                        <a href="http://www.zergnet.com/i/1353486/33596/0/0/0"
                                           style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;"
                                           target="_blank" rel="nofollow">The Best and Easiest Mexican Dinners You'll
                                            Ever Make</a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="zergentity"
                                     style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
                                    <a href="http://www.zergnet.com/i/1396948/33596/0/0/0" target="_blank"
                                       rel="nofollow">
                                        <img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;"
                                             src="http://img1.zergnet.com/1396948_140.jpg" nopin="true"
                                             data-pin-no-hover="true">
                                    </a>
                                    <div class="zergheadline" style="margin-top: 2px;">
                                        <a href="http://www.zergnet.com/i/1396948/33596/0/0/0"
                                           style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;"
                                           target="_blank" rel="nofollow">8 Breakfast Bars to Simplify Your Morning
                                            Routine</a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="zergentity"
                                     style="float: left; width: 130px; margin-top:4px;margin-bottom:2px; margin-left: 0px; margin-right: 0px; overflow: hidden; clear: none;">
                                    <a href="http://www.zergnet.com/i/1414003/33596/0/0/0" target="_blank"
                                       rel="nofollow">
                                        <img style="-ms-interpolation-mode:bicubic;margin:0;padding:0; height: 130px; width: 130px; border: 0px solid #666;"
                                             src="http://img4.zergnet.com/1414003_140.jpg" nopin="true"
                                             data-pin-no-hover="true">
                                    </a>
                                    <div class="zergheadline" style="margin-top: 2px;">
                                        <a href="http://www.zergnet.com/i/1414003/33596/0/0/0"
                                           style="font-family:Arial;color: #4d4d4d; font-weight: Normal; text-decoration: none;"
                                           target="_blank" rel="nofollow">10 Kitchen Hacks You'll Wish You Knew
                                            Sooner</a>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <aside id="recipe-page-right-rail" class="recipe-page-right-rail four-tabs">
                <right-rail-feed><h2 class="heading__h2--gutters rr-content"> Recommended for you <a
                                href="/cook/my/profile-settings/?tab=tastePrefs&amp;internalSource=rr_tasteprefs&amp;referringContentType=recipe"
                                target="_self" data-ng-hide="isAnonymous"> <span
                                    class="svg-icon--profile--gear-grey svg-icon--profile--gear-grey-dims"></span> </a>
                    </h2>
                    <div class="recommended-content">
                        <article class="content-card recipe ng-scope">
                            <a href="" class="" target="_self"> <img
                                        class="content-card__image "
                                        alt="" title=""
                                        src="http://images.media-allrecipes.com/userphotos/250x250/2004403.jpg">
                                <h3 class="content-card__h3 ng-binding">Hearty Irish Egg Drop Soup</h3>
                            </a>
                            <div class="">
                                <div class="grid-col__ratings">
                                    <span class="rating-stars">
                                        <img width="16" height="16" class="ng-scope"
                                                src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-starff<img data-ng-repeat="star in stars"
                                                                                 
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                        
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png<img data-ng-repeat="star in stars"
                                                                                 
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"</span> <span
                                            class="grid-col__reviews ng-binding">1</span>
                                </div>
                            </div>
                            <div class="content-card-profile"><a href="/cook/6188687" data-internal-referrer-link=""
                                                                 data-click-id="" class="" target="_self">
                                    <ul class="cook-pic-name">
                                        <li><img class="img-profile" alt="profile image"
                                                 ng-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"
                                                 src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png">
                                        </li>
                                        <li><h4 class="ng-binding"><span>By </span>Tahryn</h4></li>
                                    </ul>
                                </a></div>
                        </article>
                        <article ng-repeat="recipe in recipes" class="content-card recipe ng-scope"><a
                                    href="/recipe/220582?clickId=right rail 1&amp;internalSource=rr_feed_recipe&amp;referringId=220582&amp;referringContentType=recipe"
                                     class="" target="_self"> <img
                                        class="content-card__image " data-lazy-load=""
                                        data-original-src="http://images.media-allrecipes.com/userphotos/250x250/1010191.jpg"
                                        alt="" title="Mashed Potatoes and Apples"
                                        src="http://images.media-allrecipes.com/userphotos/250x250/1010191.jpg">
                                <h3 class="content-card__h3 ng-binding">Mashed Potatoes and Apples</h3></a>
                            <div data-star-rating="" data-rating="4" data-review-count="1" class="">
                                <div class="grid-col__ratings"><span class="rating-stars"> <!-- ngRepeat: star in stars --><img
                                                data-ng-repeat="star in stars"
                                                data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                width="16" height="16" class="ng-scope"
                                                src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"</span> <span
                                            class="grid-col__reviews ng-binding"
                                            ng-bind="(!reviewCount ||reviewCount === 0) ? '' : (reviewCount | largeNumberDisplay)">1</span>
                                </div>
                            </div>
                            <div class="content-card-profile"><a href="/cook/1776666" data-internal-referrer-link=""
                                                                 data-click-id="" class="" target="_self">
                                    <ul class="cook-pic-name">
                                        <li><img class="img-profile" alt="profile image"
                                                 ng-src="http://images.media-allrecipes.com/userphotos/50x50/23341.jpg"
                                                 src="http://images.media-allrecipes.com/userphotos/50x50/23341.jpg">
                                        </li>
                                        <li><h4 class="ng-binding"><span>By </span>Kari</h4></li>
                                    </ul>
                                </a></div>
                        </article>
                        <article ng-repeat="recipe in recipes" class="content-card recipe ng-scope"><a
                                    href="/recipe/220583?clickId=right rail 2&amp;internalSource=rr_feed_recipe&amp;referringId=220583&amp;referringContentType=recipe"
                                     class="" target="_self"> <img
                                        class="content-card__image " data-lazy-load=""
                                        data-original-src="http://images.media-allrecipes.com/userphotos/250x250/934920.jpg"
                                        alt="" title="Glazed Carrots and Parsnips with Chives"
                                        src="http://images.media-allrecipes.com/userphotos/250x250/934920.jpg">
                                <h3 class="content-card__h3 ng-binding">Glazed Carrots and Parsnips with Chives</h3></a>
                            <div data-star-rating="" data-rating="4.5" data-review-count="15" class="">
                                <div class="grid-col__ratings"><span class="rating-stars"> <!-- ngRepeat: star in stars --><img
                                                data-ng-repeat="star in stars"
                                                data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                width="16" height="16" class="ng-scope"
                                                src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"</span> <span
                                            class="grid-col__reviews ng-binding"
                                            ng-bind="(!reviewCount ||reviewCount === 0) ? '' : (reviewCount | largeNumberDisplay)">15</span>
                                </div>
                            </div>
                            <div class="content-card-profile"><a href="/cook/7863005" data-internal-referrer-link=""
                                                                 data-click-id="" class="" target="_self">
                                    <ul class="cook-pic-name">
                                        <li><img class="img-profile" alt="profile image"
                                                 ng-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"
                                                 src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png">
                                        </li>
                                        <li><h4 class="ng-binding"><span>By </span>Taddo1965</h4></li>
                                    </ul>
                                </a></div>
                        </article>
                        <article ng-repeat="recipe in recipes" class="content-card recipe ng-scope"><a
                                    href="/recipe/220584?clickId=right rail 3&amp;internalSource=rr_feed_recipe&amp;referringId=220584&amp;referringContentType=recipe"
                                     class="" target="_self"> <img
                                        class="content-card__image " data-lazy-load=""
                                        data-original-src="http://images.media-allrecipes.com/userphotos/250x250/3399552.jpg"
                                        alt="" title="Fried Irish Cabbage with Bacon"
                                        src="http://images.media-allrecipes.com/userphotos/250x250/3399552.jpg">
                                <h3 class="content-card__h3 ng-binding">Fried Irish Cabbage with Bacon</h3></a>
                            <div data-star-rating="" data-rating="4.68" data-review-count="47" class="">
                                <div class="grid-col__ratings"><span class="rating-stars"> <!-- ngRepeat: star in stars --><img
                                                data-ng-repeat="star in stars"
                                                data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                width="16" height="16" class="ng-scope"
                                                src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"</span> <span
                                            class="grid-col__reviews ng-binding"
                                            ng-bind="(!reviewCount ||reviewCount === 0) ? '' : (reviewCount | largeNumberDisplay)">47</span>
                                </div>
                            </div>
                            <div class="content-card-profile"><a href="/cook/2861383" data-internal-referrer-link=""
                                                                 data-click-id="" class="" target="_self">
                                    <ul class="cook-pic-name">
                                        <li><img class="img-profile" alt="profile image"
                                                 ng-src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png"
                                                 src="http://images.media-allrecipes.com/mobile/allrecipes/images/icon-user-default_v2.png">
                                        </li>
                                        <li><h4 class="ng-binding"><span>By </span>cmarten</h4></li>
                                    </ul>
                                </a></div>
                        </article>
                        <article ng-repeat="recipe in recipes" class="content-card recipe ng-scope"><a
                                    href="/recipe/220612?clickId=right rail 4&amp;internalSource=rr_feed_recipe&amp;referringId=220612&amp;referringContentType=recipe"
                                     class="" target="_self"> <img
                                        class="content-card__image " data-lazy-load=""
                                        data-original-src="http://images.media-allrecipes.com/userphotos/250x250/1413849.jpg"
                                        alt="" title="Bean Rarebit"
                                        src="http://images.media-allrecipes.com/userphotos/250x250/1413849.jpg">
                                <h3 class="content-card__h3 ng-binding">Bean Rarebit</h3></a>
                            <div data-star-rating="" data-rating="4.74" data-review-count="18" class="">
                                <div class="grid-col__ratings"><span class="rating-stars"> <!-- ngRepeat: star in stars --><img
                                                data-ng-repeat="star in stars"
                                                data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                width="16" height="16" class="ng-scope"
                                                src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"</span> <span
                                            class="grid-col__reviews ng-binding"
                                            ng-bind="(!reviewCount ||reviewCount === 0) ? '' : (reviewCount | largeNumberDisplay)">18</span>
                                </div>
                            </div>
                            <div class="content-card-profile"><a href="/cook/1910271" data-internal-referrer-link=""
                                                                 data-click-id="" class="" target="_self">
                                    <ul class="cook-pic-name">
                                        <li><img class="img-profile" alt="profile image"
                                                 ng-src="http://images.media-allrecipes.com/userphotos/50x50/1008853.jpg"
                                                 src="http://images.media-allrecipes.com/userphotos/50x50/1008853.jpg">
                                        </li>
                                        <li><h4 class="ng-binding"><span>By </span>Jennifer T</h4></li>
                                    </ul>
                                </a></div>
                        </article>
                        <article ng-repeat="recipe in recipes" class="content-card recipe ng-scope"><a
                                    href="/recipe/220615?clickId=right rail 5&amp;internalSource=rr_feed_recipe&amp;referringId=220615&amp;referringContentType=recipe"
                                     class="" target="_self"> <img
                                        class="content-card__image " data-lazy-load=""
                                        data-original-src="http://images.media-allrecipes.com/userphotos/250x250/846255.jpg"
                                        alt="" title="Apple Potato Pancakes"
                                        src="http://images.media-allrecipes.com/userphotos/250x250/846255.jpg">
                                <h3 class="content-card__h3 ng-binding">Apple Potato Pancakes</h3></a>
                            <div data-star-rating="" data-rating="4.64" data-review-count="9" class="">
                                <div class="grid-col__ratings"><span class="rating-stars"> <!-- ngRepeat: star in stars --><img
                                                data-ng-repeat="star in stars"
                                                data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                width="16" height="16" class="ng-scope"
                                                src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png<img data-ng-repeat="star in stars"
                                                                                 data-ng-src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"
                                                                                 width="16" height="16" class="ng-scope"
                                                                                 src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"</span> <span
                                            class="grid-col__reviews ng-binding"
                                            ng-bind="(!reviewCount ||reviewCount === 0) ? '' : (reviewCount | largeNumberDisplay)">9</span>
                                </div>
                            </div>
                            <div class="content-card-profile"><a href="/cook/696690" data-internal-referrer-link=""
                                                                 data-click-id="" class="" target="_self">
                                    <ul class="cook-pic-name">
                                        <li><img class="img-profile" alt="profile image"
                                                 ng-src="http://images.media-allrecipes.com/global/features/mini/2414.jpg"
                                                 src="http://images.media-allrecipes.com/global/features/mini/2414.jpg">
                                        </li>
                                        <li><h4 class="ng-binding"><span>By </span>HeidiS</h4></li>
                                    </ul>
                                </a></div>
                        </article> 
                    </div>
                    <a href="/?internalSource=rr_tasteprefs&amp;referringContentType=recipe" target="_self"
                       class="btns-one-small rr-content">See all recommendations</a>
                </right-rail-feed>
            </aside>
        </div>
    </div>
@stop