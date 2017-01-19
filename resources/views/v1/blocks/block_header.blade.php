<header class="header new-nav">
    <section class="header-topbar">
        <div class="top-left">
           <p>Trang thông tin chia sẻ món ăn nội hàng ngày</p>
        </div>
        <div class="top-right">
            <ul type="none">
                <li><a href="">Đăng tin món ăn</a></li>
                <li><a href="">Hỗ trợ đặt bàn</a></li>
                <li><a href="">Hỗ trợ công thức nấu ăn</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </section>
    <section class="header-search">
        <ul class="ar-nav-section">
            <li class="ar-logo-tab">
                <a href="/" target="_self">
                    <div class="ar-logo">
                        <img alt="Allrecipes" height="36" src="http://images.media-allrecipes.com/ar-images/ARlogo.svg" width="96">
                    </div>
                </a>
            </li>
            <li class="browse-recipes">
                <a id="navmenu_recipes" class="recipes-txt">
                    <span>Công thức</span>
                    <span class="icon--chevron-down"></span>
                </a>
            </li>
            <li class="search-tab">
                <div class="nav-search">
                    <input id="searchText" type="text" placeholder="Find a recipe" class="fsrVisible">
                    <button class="btn-basic--small search-button">
                        <span class="icon svg-icon--top-nav-bar--search-magnify svg-icon--top-nav-bar--search-magnify-dims"></span>
                    </button>
                    <div id="ingredientSearch" class="ingredient-searchtxt">Ingredient Search</div>
                </div>
            </li>
            <li class="social-notification">
                <div class="socialNotification">
                    <span class="svg-icon--top-nav-bar--nav-bell svg-icon--top-nav-bar--nav-bell-dims"></span>
                    <span class="notification-count">1</span>
                </div>
            </li>
            <li class="nav-favorites">
                <a href="/cook/my/favorites/" target="_self">
                    <span class="svg-icon--top-nav-bar--grey-heart svg-icon--top-nav-bar--grey-heart-dims"></span>
                </a>
            </li>
            <li class="nav-profile anonymous-user">
                <a href="">
                    <div class="login-state">
                        <div class="img-profile icon svg-icon--top-nav-bar--userhead svg-icon--top-nav-bar--userhead-dims fsrHidden"></div>
                        <span class="username icon-user--default" id="offCanvasDisplayName" >
							Create a profile
						</span>
                    </div>
                </a>
            </li>
            <li class="small-screen search-phone--landscape">
                <a href="" class="topNavSearchMenu">
                    <div class="nav-search">
                        <span><img alt="search" height="23" src="http://images.media-allrecipes.com/ar-images/icons/NavSearchIcon.svg" width="23"></span>
                    </div>
                </a>
            </li>
            <li class="small-screen profile-phone--landscape" popup-trigger="topNavProfileMenu" id="8149092e-baa7-4144-8b1f-66ecd129bba9">
                <a href="">
                    <div class="login-state">
                        <div class="img-profile icon svg-icon--top-nav-bar--userhead svg-icon--top-nav-bar--userhead-dims fsrHidden"></div>
                    </div>
                </a>
            </li>
            <li class="hamburger-tab" id="hamburger-tab">
                <a>
                    <div class="hamburger-nav">
                        <span class="browse-recipes-iconbar"></span>
                        <span class="browse-recipes-iconbar"></span>
                        <span class="browse-recipes-iconbar"></span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="notifications menucontainer" style="display: none">
            <div class="nav-tab notification-menu unauthenticated-message">
                <ul class="nav-tab__options">
                    <li class="unauthenticated">
                        <h2>Cook in good company</h2>
                        <ul>
                            <li>Connect with like-minded cooks</li>
                            <li>Celebrate your cooking triumphs</li>
                            <li>Discover new favorite recipes</li>
                        </ul>
                        <a href="" class="btn-gold" target="_self">Sign up (free)</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-tab nav-tab__search topNavSearchMenu menucontainer" style="display: none">
            <form class="ng-pristine ng-valid">
                <div>
                    <span class="icon--close" title="Close Ingredient Search" hidewhenclicked=""></span>
                    <div class="input-wrap--home">
                        <span class="search-spyglass"><img alt="Allrecipes" height="23" src="http://images.media-allrecipes.com/ar-images/icons/NavSearchIcon.svg" width="23"></span>
                        <input id="searchText" type="text" placeholder="Keywords" class="setFocus-keywordSearch ng-pristine ng-untouched ng-valid fsrVisible">
                    </div>
                    <div class="input-wrap--home ingredients">
                        <div class="ingredient-add-exclude">
                            <input id="includeIngText" type="text" placeholder="Include ingredients">
                        </div>
                        <a class="btn-basic--small include"><span>+</span></a>
                    </div>
                    <div class="input-wrap--home ingredients">
                        <div class="ingredient-add-exclude">
                            <input id="excludeIngText" type="text" name="txtExcludeIng" class="setFocus-excludeIng ng-pristine ng-untouched ng-valid fsrVisible" placeholder="Exclude ingredients">
                        </div>
                        <a class="btn-basic--small exclude"><span>—</span></a>
                    </div>
                    <div class="nav-tab__buttons">
                        <button class="btn-basic--small btn-search">Go</button>
                    </div>
                </div>
                <div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
            </form>
        </div>
        <div class="browse-recipe-tab social menucontainer" id="topBrowseRecipePanel" style="display: none">
            <section class="hero-link  nav-tab__options recipe-nav-tab__options">
                <div class="grid underline_hero_link">
                    <ul class="browse-hubs">
                        <li class="browse-hubs__categories">
                            <h3>
                                Meal Type
                            </h3>
                            <span class="icon--chevron-right"></span>
                            <ul class="browse-hubs__subcategories">
                                <li>
                                    <a href="/recipes/76/appetizers-and-snacks/" ng-click="setAnalyticsCookie('browse|appetizers \u0026 snacks')" title="Appetizers &amp; Snacks Recipes" target="_self">
                                        Appetizers &amp; Snacks
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/78/breakfast-and-brunch/" ng-click="setAnalyticsCookie('browse|breakfast \u0026 brunch')" title="Breakfast &amp; Brunch Recipes" target="_self">
                                        Breakfast &amp; Brunch
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/79/desserts/" ng-click="setAnalyticsCookie('browse|desserts')" title="Desserts Recipes" target="_self">
                                        Desserts
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/17562/dinner/" ng-click="setAnalyticsCookie('browse|dinner')" title="Dinner Recipes" target="_self">
                                        Dinner
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/77/drinks/" ng-click="setAnalyticsCookie('browse|drinks')" title="Drinks Recipes" target="_self">
                                        Drinks
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="browse-hubs__categories">
                            <h3>
                                Ingredient
                            </h3>
                            <span class="icon--chevron-right"></span>
                            <ul class="browse-hubs__subcategories">
                                <li>
                                    <a href="/recipes/200/meat-and-poultry/beef/" ng-click="setAnalyticsCookie('browse|beef')" title="Beef Recipes" target="_self">
                                        Beef
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/201/meat-and-poultry/chicken/" ng-click="setAnalyticsCookie('browse|chicken')" title="Chicken Recipes" target="_self">
                                        Chicken
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/95/pasta-and-noodles/" ng-click="setAnalyticsCookie('browse|pasta')" title="Pasta Recipes" target="_self">
                                        Pasta
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/205/meat-and-poultry/pork/" ng-click="setAnalyticsCookie('browse|pork')" title="Pork Recipes" target="_self">
                                        Pork
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/416/seafood/fish/salmon/" ng-click="setAnalyticsCookie('browse|salmon')" title="Salmon Recipes" target="_self">
                                        Salmon
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="browse-hubs__categories">
                            <h3>
                                Diet &amp; Health
                            </h3>
                            <span class="icon--chevron-right"></span>
                            <ul class="browse-hubs__subcategories">
                                <li>
                                    <a href="/recipes/739/healthy-recipes/diabetic/" ng-click="setAnalyticsCookie('browse|diabetic')" title="Diabetic Recipes" target="_self">
                                        Diabetic
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/741/healthy-recipes/gluten-free/" ng-click="setAnalyticsCookie('browse|gluten free')" title="Gluten Free Recipes" target="_self">
                                        Gluten Free
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/84/healthy-recipes/" ng-click="setAnalyticsCookie('browse|healthy')" title="Healthy Recipes" target="_self">
                                        Healthy
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/1232/healthy-recipes/low-calorie/" ng-click="setAnalyticsCookie('browse|low calorie')" title="Low Calorie Recipes" target="_self">
                                        Low Calorie
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/1231/healthy-recipes/low-fat/" ng-click="setAnalyticsCookie('browse|low fat')" title="Low Fat Recipes" target="_self">
                                        Low Fat
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="browse-hubs__categories">
                            <h3>
                                Seasonal
                            </h3>
                            <span class="icon--chevron-right"></span>
                            <ul class="browse-hubs__subcategories">
                                <li>
                                    <a href="http://allrecipes.com/recipes/17668/holidays-and-events/lunar-new-year/" ng-click="setAnalyticsCookie('browse|lunar new year')" title="Lunar New Year Recipes" target="_self">
                                        Lunar New Year
                                    </a>
                                </li>
                                <li>
                                    <a href="http://allrecipes.com/recipes/1419/holidays-and-events/big-game/" ng-click="setAnalyticsCookie('browse|big game')" title="Big Game Recipes" target="_self">
                                        Big Game
                                    </a>
                                </li>
                                <li>
                                    <a href="http://allrecipes.com/recipes/199/holidays-and-events/valentines-day/" ng-click="setAnalyticsCookie('browse|valentine\u0027s day')" title="Valentine's Day Recipes" target="_self">
                                        Valentine's Day
                                    </a>
                                </li>
                                <li>
                                    <a href="http://allrecipes.com/recipes/192/holidays-and-events/mardi-gras/" ng-click="setAnalyticsCookie('browse|mardi gras')" title="Mardi Gras Recipes" target="_self">
                                        Mardi Gras
                                    </a>
                                </li>
                                <li>
                                    <a href="http://allrecipes.com/recipes/85/holidays-and-events/" ng-click="setAnalyticsCookie('browse|more holidays and events')" title="More Holidays and Events Recipes" target="_self">
                                        More Holidays and Events
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="browse-hubs__categories">
                            <h3>
                                Dish Type
                            </h3>
                            <span class="icon--chevron-right"></span>
                            <ul class="browse-hubs__subcategories">
                                <li>
                                    <a href="/recipes/156/bread/" ng-click="setAnalyticsCookie('browse|breads')" title="Breads Recipes" target="_self">
                                        Breads
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/276/desserts/cakes/" ng-click="setAnalyticsCookie('browse|cakes')" title="Cakes Recipes" target="_self">
                                        Cakes
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/96/salad/" ng-click="setAnalyticsCookie('browse|salads')" title="Salads Recipes" target="_self">
                                        Salads
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/138/drinks/smoothies/" ng-click="setAnalyticsCookie('browse|smoothies')" title="Smoothies Recipes" target="_self">
                                        Smoothies
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/94/soups-stews-and-chili/" ng-click="setAnalyticsCookie('browse|soups, stews \u0026 chili')" title="Soups, Stews &amp; Chili Recipes" target="_self">
                                        Soups, Stews &amp; Chili
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="browse-hubs__categories">
                            <h3>
                                Cooking Style
                            </h3>
                            <span class="icon--chevron-right"></span>
                            <ul class="browse-hubs__subcategories">
                                <li>
                                    <a href="/recipes/88/bbq-grilling/" ng-click="setAnalyticsCookie('browse|bbq \u0026 grilling')" title="BBQ &amp; Grilling Recipes" target="_self">
                                        BBQ &amp; Grilling
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/1947/everyday-cooking/quick-and-easy/" ng-click="setAnalyticsCookie('browse|quick \u0026 easy')" title="Quick &amp; Easy Recipes" target="_self">
                                        Quick &amp; Easy
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/253/everyday-cooking/slow-cooker/" ng-click="setAnalyticsCookie('browse|slow cooker')" title="Slow Cooker Recipes" target="_self">
                                        Slow Cooker
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/1227/everyday-cooking/vegan/" ng-click="setAnalyticsCookie('browse|vegan')" title="Vegan Recipes" target="_self">
                                        Vegan
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/87/everyday-cooking/vegetarian/" ng-click="setAnalyticsCookie('browse|vegetarian')" title="Vegetarian Recipes" target="_self">
                                        Vegetarian
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="browse-hubs__categories">
                            <h3>
                                World Cuisine
                            </h3>
                            <span class="icon--chevron-right"></span>
                            <ul class="browse-hubs__subcategories">
                                <li>
                                    <a href="/recipes/227/world-cuisine/asian/" ng-click="setAnalyticsCookie('browse|asian')" title="Asian Recipes" target="_self">
                                        Asian
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/233/world-cuisine/asian/indian/" ng-click="setAnalyticsCookie('browse|indian')" title="Indian Recipes" target="_self">
                                        Indian
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/723/world-cuisine/european/italian/" ng-click="setAnalyticsCookie('browse|italian')" title="Italian Recipes" target="_self">
                                        Italian
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/728/world-cuisine/latin-american/mexican/" ng-click="setAnalyticsCookie('browse|mexican')" title="Mexican Recipes" target="_self">
                                        Mexican
                                    </a>
                                </li>
                                <li>
                                    <a href="/recipes/15876/us-recipes/southern/" ng-click="setAnalyticsCookie('browse|southern')" title="Southern Recipes" target="_self">
                                        Southern
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="browse-hubs__categories">
                            <h3>
                                Special Collections
                            </h3>
                            <span class="icon--chevron-right"></span>
                            <ul class="browse-hubs__subcategories">
                                <li>
                                    <a href="http://allrecipes.com/recipes/17235/everyday-cooking/allrecipes-magazine-recipes/" ng-click="setAnalyticsCookie('browse|allrecipes magazine recipes')" title="Allrecipes Magazine Recipes" target="_self">
                                        Allrecipes Magazine Recipes
                                    </a>
                                </li>
                                <li>
                                    <a href="http://allrecipes.com/recipes/16791/everyday-cooking/special-collections/web-show-recipes/food-wishes/" ng-click="setAnalyticsCookie('browse|food wishes with chef john')" title="Food Wishes with Chef John Recipes" target="_self">
                                        Food Wishes with Chef John
                                    </a>
                                </li>
                                <li>
                                    <a href="http://dish.allrecipes.com/trusted-brand-pages/" ng-click="setAnalyticsCookie('browse|trusted brands')" title="Trusted Brands Recipes" target="_self">
                                        Trusted Brands
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <a class="recipe-hero-link__item__text" href="/recipes?grouping=all" ng-click="setAnalyticsCookie('browse|all categories')" target="_self">All Categories</a>
            </section>
        </div>
        <!-- user sign in area -->
        <div class="nav-tab social profile-nav ng-hide" popup-panel="topNavProfileMenu" id="f09119d4-39d2-4075-b985-e8bfe0f7e515">
            <ul class="nav-tab__options">
                <li ng-click="setAnalyticsCookie('profile|feed', 'menu')">
                    <a href="?loginReferrerUrl=/home" id="navmenu_myFeed" target="_self">
                        <span class="iconContainer"><span class="icon svg-icon--top-nav-bar--home svg-icon--top-nav-bar--home-dims"></span></span>
                        <span class="itemText">Feed</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsCookie('profile|profile', 'menu')">
                    <a href="/cook/my/" id="navmenu_myprofile" target="_self">
                        <span class="iconContainer"><span class="icon svg-icon--top-nav-bar--nav-profile svg-icon--top-nav-bar--nav-profile-dims"></span></span>
                        <span class="itemText">Profile</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsCookie('profile|favorites', 'menu')">
                    <a href="/cook/my/favorites/" rel="nofollow" id="navmenu_recipebox" target="_self">
					<span class="iconContainer">
					<span class="icon svg-icon--top-nav-bar--grey-heart svg-icon--top-nav-bar--grey-heart-dims"></span>
					</span>
                        <span class="itemText">Favorites</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsCookie('profile|friends', 'menu')">
                    <a href="/cook/my/findfriends/" rel="nofollow" id="navmenu_findfriends" target="_self">
					<span class="iconContainer">
					<span class="icon svg-icon--top-nav-bar--nav-friends svg-icon--top-nav-bar--nav-friends-dims"></span>
					</span>
                        <span class="itemText">Friends</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsCookie('profile|shopping list', 'menu')">
                    <a href="/my/shopping-lists/" rel="nofollow" id="navmenu_shoppinglist" target="_self">
					<span class="iconContainer">
					<span class="icon svg-icon--top-nav-bar--grey-shopping svg-icon--top-nav-bar--grey-shopping-dims"></span>
					</span>
                        <span class="itemText">Shopping List</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsCookie('profile|settings', 'menu')">
                    <a href="/cook/my/account-settings/" rel="nofollow" id="navmenu_settings" target="_self">
					<span class="iconContainer">
					<span class="icon svg-icon--top-nav-bar--nav-settings svg-icon--top-nav-bar--nav-settings-dims"></span>
					</span>
                        <span class="itemText">Settings</span>
                    </a>
                </li>
            </ul>
            <div class="signin" ng-click="setAnalyticsCookie('profile|sign in ', 'menu')">
                <button onclick=" location.href='?actionsource=' +(typeof dataLayer !=='undefined' ? dataLayer.page.category.contentType : '' ) " class="btn-basic--large btn-gold" id="navmenu_signin_signup">Sign In <em>or</em> Sign Up</button>
            </div>
        </div>
        <!-- hub links, etc. -->
        <div class="nav-tab last menucontainer" id="topNavHamburgerMenu" style="display: none">
            <ul class="nav-tab__options">
                <li class="underline_link">
                    <a id="navmenu_recipes">
                        <span class="icon svg-icon--top-nav-bar--nav-browse svg-icon--top-nav-bar--nav-browse-dims"></span>
                        <span>Browse Recipes</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsData('allrecipes magazine')">
                    <a href="http://armagazine.com/mobile-site" id="navmenu_magazine" target="_blank">
                        <span class="icon svg-icon--top-nav-bar--nav-magazine svg-icon--top-nav-bar--nav-magazine-dims"></span>
                        <span>Allrecipes Magazine</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsData('dinner spinner tv')">
                    <a href="http://allrecipes.com/DinnerSpinnerTV/" id="navmenu_tv" target="_self">
                        <span class="icon svg-icon--top-nav-bar--tv_icon svg-icon--top-nav-bar--tv_icon-dims"></span>
                        <span>Dinner Spinner TV</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsData('shop')">
                    <a href="http://shop.allrecipes.com/shop" id="navmenu_shop" target="_blank">
                        <span class="icon svg-icon--top-nav-bar--nav-shop svg-icon--top-nav-bar--nav-shop-dims"></span>
                        <span>Shop</span>
                    </a>
                </li>
                <li class="underline_link" ng-click="setAnalyticsData('cooking school')">
                    <a href="http://cookingschool.allrecipes.com/" id="navmenu_cooking_school" target="_blank">
                        <span class="icon svg-icon--top-nav-bar--nav-cookingschool svg-icon--top-nav-bar--nav-cookingschool-dims"></span>
                        <span>Cooking School</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsData('articles and tips')">
                    <a href="http://dish.allrecipes.com/" target="_self" id="navmenu_articles">
                        <span class="icon svg-icon--top-nav-bar--nav-article svg-icon--top-nav-bar--nav-article-dims"></span>
                        <span>Articles &amp; Tips</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsData('profile|blogs')">
                    <a href="http://dish.allrecipes.com/blogs/" rel="nofollow" id="navmenu_blogs" target="_self">
					<span class="iconContainer">
					<span class="icon svg-icon--top-nav-bar--nav-blog svg-icon--top-nav-bar--nav-blog-dims"></span>
					</span>
                        <span class="itemText">Blogs</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsCookie('newsletters')">
                    <a href="/cook/my/account-settings/#NewslettersSubscription" id="navmenu_social_gallery" target="_self">
                        <span class="icon svg-icon--top-nav-bar--nav-newsletters svg-icon--top-nav-bar--nav-newsletters-dims"></span>
                        <span>Newsletters</span>
                    </a>
                </li>
                <li ng-click="setAnalyticsData('ask the community')">
                    <a href="http://dish.allrecipes.com/ask-the-community/" target="_self" id="navmenu_dish">
                        <span class="icon svg-icon--top-nav-bar--nav-community svg-icon--top-nav-bar--nav-community-dims"></span>
                        <span>Ask the Community</span>
                    </a>
                </li>
                <li class="underline_link" ng-click="setAnalyticsData('help')">
                    <a href="http://dish.allrecipes.com/customer-service/" id="navmenu_help" target="_self">
                        <span class="icon svg-icon--top-nav-bar--nav-help svg-icon--top-nav-bar--nav-help-dims"></span>
                        <span>Help</span>
                    </a>
                </li>
                <li>
                    <a href="http://dish.allrecipes.com/allrecipes-jobs-2/" target="_self" ng-click="setAnalyticsData('jobs')">Jobs</a>
                    <a href="http://press.allrecipes.com/" ng-click="setAnalyticsData('newsroom')" target="_self">Newsroom</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="header-keywords">
        <div class="history-keyword">
            <div class="link-keyword">
                <a href="">Bánh chưng tết &nbsp; | &nbsp; </a>
                <a href="">Thịt kho &nbsp; | &nbsp; </a>
                <a href="">Món ngon cuối tuần &nbsp; | &nbsp; </a>
                <a href="" class="light-bold">Vào bếp cùng a &nbsp; | &nbsp; </a>
                <a href="" class="light-bold">Mua bán đồ bếp &nbsp; | &nbsp; </a>
                <a href="">Làm mứt tết &nbsp;  </a>
            </div>
        </div>
        <div class="menu-link">
            <div class="container">
                <a class="link-title">Tìm kiếm nổi bật </a>
                <a href="#">Món ăn ngon ngày tết</a>
                <a href="#">Món bánh tết</a>
                <a href="#">Cách làm bánh giò</a>
                <a href="#">Sale bếp xinh </a>
                <a href="#">Bếp nướng giảm giá ngày tết</a>
                <a href="#">Bếp lẫu</a>
                <a href="#">Bánh tráng trộn tại gia</a>
                <a href="#">Làm thịt kho</a>
            </div>
        </div>
    </section>
</header>