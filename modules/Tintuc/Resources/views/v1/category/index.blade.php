@extends(MASTER_V1.'.layout_master')
@section('seo')
@stop
@section('content')
<div class="container-content body-content">
    <section class="recipe_hub full-page ">                                
        @include(NEW_V1 . '.incs.inc_breadcrumbs')
        @include(NEW_V1 . '.incs.inc_page_title')
        @include(NEW_V1 . '.incs.inc_slider')            
        <section class="hub-daughters ">
            <div class="ng-isolate-scope">
                <ul id="hub_nav_bar" class="sub-hub-tabs hub-daughter__header">
                    <li class=" selected"><a class="category-title">Most Popular</a></li>
                    <li class=""><a class="category-title">By Recipe Type</a></li>
                    <li class=""><a class="category-title">By Main Ingredient</a></li>
                    <li class=""><a class="category-title">Related Categories</a></li>
                    <li class="category end-items ng-hide" ng-hide="hideEllipsis"
                        id="ac639233-e251-438a-94e6-51912d0b7b39"><span class="category-title">...</span></li>
                </ul>
                <div class="ng-hide nav-tab">
                    <ul class="sort-nav">

                    </ul>
                </div>
            </div>
            <div class="hub-daughters__wrap" id="hubDaughtersDiv">
                <div class="hub-daughters__container">
                    <div id="scrollDiv">
                        <div id="insideScroll" class="grid slider mobile-view">
                            <ul>
                                <li>
                                    <a target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Dips and Spreads" title="Dips and Spreads"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/52/92/529246.jpg">
                                        <span class="category-title">Dips and Spreads</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/104/appetizers-and-snacks/cheese/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Cheese Appetizers" title="Cheese Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/25/88/258899.jpg">
                                        <span class="category-title">Cheese Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/107/appetizers-and-snacks/meat-and-poultry/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Meat and Poultry Appetizers"
                                             title="Meat and Poultry Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/06/33/63324.jpg">
                                        <span class="category-title">Meat and Poultry A..</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/116/appetizers-and-snacks/spicy/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Spicy Appetizers" title="Spicy Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/69/80/698000.jpg">
                                        <span class="category-title">Spicy Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Seafood Appetizers" title="Seafood Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/75/19/751976.jpg">
                                        <span class="category-title">Seafood Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/17146/appetizers-and-snacks/snacks/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Snack Recipes" title="Snack Recipes"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/88/82/888224.jpg">
                                        <span class="category-title">Snack Recipes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/102/appetizers-and-snacks/antipasto/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Antipasto" title="Antipasto"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/66/77/667757.jpg">
                                        <span class="category-title">Antipasto</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/16833/appetizers-and-snacks/bruschetta/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Bruschetta" title="Bruschetta"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/03/64/66/3646620.jpg">
                                        <span class="category-title">Bruschetta</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/17249/appetizers-and-snacks/canapes-and-crostini/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Canapes and Crostini" title="Canapes and Crostini"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/01/10/47/1104772.jpg">
                                        <span class="category-title">Canapes and Crostini</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/16212/appetizers-and-snacks/snacks/crackers/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Crackers" title="Crackers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/01/09/99/1099997.jpg">
                                        <span class="category-title">Crackers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/110/appetizers-and-snacks/deviled-eggs/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Deviled Eggs" title="Deviled Eggs"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/97/12/971228.jpg">
                                        <span class="category-title">Deviled Eggs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/14966/appetizers-and-snacks/garlic-bread/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Garlic Bread" title="Garlic Bread"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/80/52/805203.jpg">
                                        <span class="category-title">Garlic Bread</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/490/appetizers-and-snacks/pasta-appetizers/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Pasta Appetizers" title="Pasta Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/00/63/6388.jpg">
                                        <span class="category-title">Pasta Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/113/appetizers-and-snacks/pastries/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Pastry Appetizers" title="Pastry Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/89/31/893191.jpg">
                                        <span class="category-title">Pastry Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/13426/side-dish/sauces-and-condiments/canning-and-preserving/pickled/pickles/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Dill Pickles and Sweet Pickles"
                                             title="Dill Pickles and Sweet Pickles"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/24/47/244754.jpg">
                                        <span class="category-title">Dill Pickles and S..</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/17614/appetizers-and-snacks/pickled-eggs/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Pickled Eggs" title="Pickled Eggs"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/02/30/08/2300806.jpg">
                                        <span class="category-title">Pickled Eggs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/16051/appetizers-and-snacks/snacks/popcorn/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Popcorn" title="Popcorn"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/01/18/41/1184177.jpg">
                                        <span class="category-title">Popcorn</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/16424/everyday-cooking/slow-cooker/appetizers/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Slow Cooker Appetizers" title="Slow Cooker Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/02/21/25/2212506.jpg">
                                        <span class="category-title">Slow Cooker Appeti..</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/1659/appetizers-and-snacks/snacks/kids/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Kids' Snacks" title="Kids' Snacks"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/20/63/206355.jpg">
                                        <span class="category-title">Kids' Snacks</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/17807/appetizers-and-snacks/tapas/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Tapas Recipes" title="Tapas Recipes"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/97/12/971228.jpg">
                                        <span class="category-title">Tapas Recipes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/115/appetizers-and-snacks/wraps-and-rolls/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Wraps and Rolls Appetizers"
                                             title="Wraps and Rolls Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/84/19/841959.jpg">
                                        <span class="category-title">Wraps and Rolls Ap..</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/111/appetizers-and-snacks/beans-and-peas/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Bean and Pea Appetizers" title="Bean and Pea Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/74/68/746838.jpg">
                                        <span class="category-title">Bean and Pea Appet..</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/106/appetizers-and-snacks/fruit/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Fruit Appetizers" title="Fruit Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/01/06/07/1060723.jpg">
                                        <span class="category-title">Fruit Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/1118/appetizers-and-snacks/vegetable/mushrooms/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Mushroom Appetizers" title="Mushroom Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/01/02/96/1029640.jpg">
                                        <span class="category-title">Mushroom Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/114/appetizers-and-snacks/nuts-and-seeds/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Nuts and Seeds Appetizers"
                                             title="Nuts and Seeds Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/05/57/55705.jpg">
                                        <span class="category-title">Nuts and Seeds App..</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/112/appetizers-and-snacks/vegetable/olives/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Olive Appetizers" title="Olive Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/96/85/968570.jpg">
                                        <span class="category-title">Olive Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/109/appetizers-and-snacks/vegetable/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Vegetable Appetizers" title="Vegetable Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/70/09/700951.jpg">
                                        <span class="category-title">Vegetable Appetizers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/1319/healthy-recipes/appetizers/?internalSource=hub nav&amp;referringId=76&amp;referringContentType=recipe hub&amp;linkName=hub nav daughter&amp;clickId=hub nav 2"
                                       target="_self" class="grid-col--subnav ng-isolate-scope">
                                        <img class="" alt="Healthy Appetizers" title="Healthy Appetizers"
                                             src="http://images.media-allrecipes.com/userphotos/140x140/00/01/76/17668.jpg">
                                        <span class="category-title">Healthy Appetizers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="insideScroll" class="grid slider desktop-view">

                            <ul class="">
                                <li class="">
								<span>
								<a href="" target="_self" class="grid-col--subnav ng-isolate-scope">
								<img class="" alt="Dips and Spreads" title="Dips and Spreads"
                                     src="http://images.media-allrecipes.com/userphotos/140x140/00/52/92/529246.jpg">
								<span class="category-title">Dips and Spreads</span>
								</a>
								</span>
                                </li>
                                <li class="">
								<span>
								<a href="" target="_self" class="grid-col--subnav ng-isolate-scope">
								<img class="" alt="Cheese Appetizers" title="Cheese Appetizers"
                                     src="http://images.media-allrecipes.com/userphotos/140x140/00/25/88/258899.jpg">
								<span class="category-title">Cheese Appetizers</span>
								</a>
								</span>
                                </li>
                                <li class="">
								<span>
								<a href="" target="_self" class="grid-col--subnav ng-isolate-scope">
								<img class="" alt="Meat and Poultry Appetizers" title="Meat and Poultry Appetizers"
                                     src="http://images.media-allrecipes.com/userphotos/140x140/00/06/33/63324.jpg">
								<span class="category-title">Meat and Poultry Appetizers</span>
								</a>
								</span>
                                </li>
                                <li class="">
								<span>
								<a href="" target="_self" class="grid-col--subnav ng-isolate-scope">
								<img class="" alt="Spicy Appetizers" title="Spicy Appetizers"
                                     src="http://images.media-allrecipes.com/userphotos/140x140/00/69/80/698000.jpg">
								<span class="category-title">Spicy Appetizers</span>
								</a>
								</span>
                                </li>
                                <li class="">
								<span>
								<a href="" target="_self" class="grid-col--subnav ng-isolate-scope">
								<img class="" alt="Seafood Appetizers" title="Seafood Appetizers"
                                     src="http://images.media-allrecipes.com/userphotos/140x140/00/75/19/751976.jpg">
								<span class="category-title">Seafood Appetizers</span>
								</a>
								</span>
                                </li>
                                <li class="">
								<span>
								<a href="" target="_self" class="grid-col--subnav ng-isolate-scope">
								<img class="" alt="Snack Recipes" title="Snack Recipes"
                                     src="http://images.media-allrecipes.com/userphotos/140x140/00/88/82/888224.jpg">
								<span class="category-title">Snack Recipes</span>
								</a>
								</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="cook_order">
            <form class="ng-pristine ng-valid">
                <h2 class="heading__h2 heading__h2--search-results" id="sort">
                    <div>
                        <span class="">Recipes</span>
                        <a class="toggle-similar view">
                            <span class="toggle-similar__view__text">Popular</span><span
                                    class="icon--chevron-down"></span>
                        </a>
                        <span class="toggle-similar drop-down-label">Sort by:</span>
                    </div>
                    <ul class="sort-nav ng-hide">
                        <li>
                            <a class="btn-grey">Popular</a>
                        </li>
                        <li>
                            <a>Newest</a>
                        </li>
                        <li>
                            <a>Title</a>
                        </li>
                    </ul>
                </h2>
            </form>
            @include(NEW_V1 . '.incs.inc_post_grid')
        </div>
    </section>
</div>
@stop
