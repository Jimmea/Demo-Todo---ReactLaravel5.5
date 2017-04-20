@extends(MASTER_V1.'.layout_master')
@section('seo')
@stop
@section('content')
<div class="container-content body-content">
	<section class="recipe_hub full-page">
		{{-- Danh sach category noi tieng --}}
		<div class="oldView">
			<div>
				<div class="title-section">
					<h1>
					<span class="title-section__text title">Recipes</span>
					</h1>
					<span class="title-section__text subtitle">Find and share everyday cooking inspiration on Allrecipes. Discover recipes, cooks, videos, and how-tos based on the food you love and the friends you follow.</span>
				</div>
				<div id="karma-lazy-sponsorLogo" class="hub-sponsor"> </div>
			</div>
			<section class="hero-link" id="herolinks">
				<h2 class="heading__h2 heading__h2--search-results" id="sort">
				<div>
					<span class="iphone-5">Categories</span>
					<span class="ng-binding">Popular Categories</span>
					<a class="toggle-similar view" id="97705112-1f07-47f4-b5e0-efb511ab2ea2">
						<span class="toggle-similar__view__text ng-binding">Popular</span><span class="icon--chevron-down"></span>
					</a>
					<span class="toggle-similar drop-down-label">Show:</span>
				</div>
				<ul class="sort-nav ng-hide" id="a13d3336-77ff-4cac-abd8-e27c93606817">
					<li>
						<a hidewhenclicked="">All</a>
					</li>
					<li>
						<a hidewhenclicked="" class="btn-grey">Popular</a>
					</li>
				</ul>
				</h2>
				<div class="grid">
					<a href="http://allrecipes.com/recipes/appetizers-and-snacks/?prop24=hn_slide0&amp;evt19=1" class="hero-link__item" title="Appetizer Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60583.png" alt="Appetizer Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Appetizer</span>
					</a>
					<a href="http://allrecipes.com/recipes/breakfast-and-brunch/?prop24=hn_slide0&amp;evt19=1" class="hero-link__item" title="Breakfast &amp; Brunch Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60586.png" alt="Breakfast &amp; Brunch Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Breakfast &amp; Brunch</span>
					</a>
					<a href="http://allrecipes.com/recipes/meat-and-poultry/chicken/?prop24=hn_slide0&amp;evt19=1" class="hero-link__item" title="Chicken Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60628.png" alt="Chicken Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Chicken</span>
					</a>
					<a href="http://allrecipes.com/recipes/desserts/?prop24=hn_slide0&amp;evt19=1" class="hero-link__item" title="Dessert Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60587.png" alt="Dessert Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Dessert</span>
					</a>
					<a href="http://allrecipes.com/recipes/healthy-recipes/?prop24=hn_slide0&amp;evt19=1" class="hero-link__item" title="Healthy Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60592.png" alt="Healthy Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Healthy</span>
					</a>
					<a href="http://m.allrecipes.com/recipes/85/holidays-and-events/" class="hero-link__item" title="Holidays and Events Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60593.png" alt="Holidays and Events Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Holidays and Events</span>
					</a>
					<a href="http://allrecipes.com/recipes/17235/everyday-cooking/allrecipes-magazine-recipes/" class="hero-link__item" title="Magazine Favorites Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/61721.png" alt="Magazine Favorites Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Magazine Favorites</span>
					</a>
					<a href="http://allrecipes.com/recipes/main-dish/?prop24=hn_slide0&amp;evt19=1" class="hero-link__item" title="Main Dish Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60596.png" alt="Main Dish Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Main Dish</span>
					</a>
					<a href="/recipes/1947/everyday-cooking/quick-and-easy/" class="hero-link__item" title="Quick &amp; Easy Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60629.png" alt="Quick &amp; Easy Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Quick &amp; Easy</span>
					</a>
					<a href="http://allrecipes.com/Recipes/Everyday-Cooking/Slow-Cooker/?prop24=hn_slide0&amp;evt19=1" class="hero-link__item" title="Slow Cooker Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60630.png" alt="Slow Cooker Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Slow Cooker</span>
					</a>
					<a href="http://dish.allrecipes.com/trusted-brand-pages/" class="hero-link__item" title="Trusted Brands Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/58574.png" alt="Trusted Brands Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Trusted Brands</span>
					</a>
					<a href="http://allrecipes.com/recipes/everyday-cooking/vegetarian/?prop24=hn_slide0&amp;evt19=1" class="hero-link__item" title="Vegetarian Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/60631.png" alt="Vegetarian Recipes" class="hero-link__item__image"><span class="hero-link__item__text">Vegetarian</span>
					</a>
				</div>
				<div class="grid ng-hide">
					<a href="/recipes/76/appetizers-and-snacks/" class="hero-link__item" title="Appetizers and Snacks" target="_self">
						<img src="http://images.media-allrecipes.com/images/56559.png" class="hero-link__item__image" alt="Appetizers and Snacks"><span class="hero-link__item__text">Appetizers and Snacks</span>
					</a>
					<a href="/recipes/88/bbq-grilling/" class="hero-link__item" title="BBQ &amp; Grilling" target="_self">
						<img src="http://images.media-allrecipes.com/images/56594.png" class="hero-link__item__image" alt="BBQ &amp; Grilling"><span class="hero-link__item__text">BBQ &amp; Grilling</span>
					</a>
					<a href="/recipes/156/bread/" class="hero-link__item" title="Bread Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/56560.png" class="hero-link__item__image" alt="Bread Recipes"><span class="hero-link__item__text">Bread Recipes</span>
					</a>
					<a href="/recipes/78/breakfast-and-brunch/" class="hero-link__item" title="Breakfast and Brunch" target="_self">
						<img src="http://images.media-allrecipes.com/images/56561.png" class="hero-link__item__image" alt="Breakfast and Brunch"><span class="hero-link__item__text">Breakfast and Brunch</span>
					</a>
					<a href="/recipes/79/desserts/" class="hero-link__item" title="Desserts" target="_self">
						<img src="http://images.media-allrecipes.com/images/56562.png" class="hero-link__item__image" alt="Desserts"><span class="hero-link__item__text">Desserts</span>
					</a>
					<a href="/recipes/17562/dinner/" class="hero-link__item" title="Dinner Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/58654.png" class="hero-link__item__image" alt="Dinner Recipes"><span class="hero-link__item__text">Dinner Recipes</span>
					</a>
					<a href="/recipes/77/drinks/" class="hero-link__item" title="Drinks" target="_self">
						<img src="http://images.media-allrecipes.com/images/56563.png" class="hero-link__item__image" alt="Drinks"><span class="hero-link__item__text">Drinks</span>
					</a>
					<a href="/recipes/1642/everyday-cooking/" class="hero-link__item" title="Everyday Cooking" target="_self">
						<img src="http://images.media-allrecipes.com/images/58655.png" class="hero-link__item__image" alt="Everyday Cooking"><span class="hero-link__item__text">Everyday Cooking</span>
					</a>
					<a href="/recipes/1116/fruits-and-vegetables/" class="hero-link__item" title="Fruits, Vegetables and Other Produce" target="_self">
						<img src="http://images.media-allrecipes.com/images/56586.png" class="hero-link__item__image" alt="Fruits, Vegetables and Other Produce"><span class="hero-link__item__text">Fruits, Vegetables and Other Produce</span>
					</a>
					<a href="/recipes/84/healthy-recipes/" class="hero-link__item" title="Healthy Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/56597.png" class="hero-link__item__image" alt="Healthy Recipes"><span class="hero-link__item__text">Healthy Recipes</span>
					</a>
					<a href="/recipes/85/holidays-and-events/" class="hero-link__item" title="Holidays and Events" target="_self">
						<img src="http://images.media-allrecipes.com/images/58447.png" class="hero-link__item__image" alt="Holidays and Events"><span class="hero-link__item__text">Holidays and Events</span>
					</a>
					<a href="/recipes/17567/ingredients/" class="hero-link__item" title="Ingredients" target="_self">
						<img src="http://images.media-allrecipes.com/images/56569.png" class="hero-link__item__image" alt="Ingredients"><span class="hero-link__item__text">Ingredients</span>
					</a>
					<a href="/recipes/17561/lunch/" class="hero-link__item" title="Lunch Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/58652.png" class="hero-link__item__image" alt="Lunch Recipes"><span class="hero-link__item__text">Lunch Recipes</span>
					</a>
					<a href="/recipes/80/main-dish/" class="hero-link__item" title="Main Dishes" target="_self">
						<img src="http://images.media-allrecipes.com/images/56564.png" class="hero-link__item__image" alt="Main Dishes"><span class="hero-link__item__text">Main Dishes</span>
					</a>
					<a href="/recipes/92/meat-and-poultry/" class="hero-link__item" title="Meat and Poultry" target="_self">
						<img src="http://images.media-allrecipes.com/images/56568.png" class="hero-link__item__image" alt="Meat and Poultry"><span class="hero-link__item__text">Meat and Poultry</span>
					</a>
					<a href="/recipes/95/pasta-and-noodles/" class="hero-link__item" title="Pasta and Noodles" target="_self">
						<img src="http://images.media-allrecipes.com/images/56589.png" class="hero-link__item__image" alt="Pasta and Noodles"><span class="hero-link__item__text">Pasta and Noodles</span>
					</a>
					<a href="/recipes/96/salad/" class="hero-link__item" title="Salad Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/56565.png" class="hero-link__item__image" alt="Salad Recipes"><span class="hero-link__item__text">Salad Recipes</span>
					</a>
					<a href="/recipes/93/seafood/" class="hero-link__item" title="Seafood Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/56591.png" class="hero-link__item__image" alt="Seafood Recipes"><span class="hero-link__item__text">Seafood Recipes</span>
					</a>
					<a href="/recipes/81/side-dish/" class="hero-link__item" title="Side Dishes" target="_self">
						<img src="http://images.media-allrecipes.com/images/56566.png" class="hero-link__item__image" alt="Side Dishes"><span class="hero-link__item__text">Side Dishes</span>
					</a>
					<a href="/recipes/94/soups-stews-and-chili/" class="hero-link__item" title="Soups, Stews and Chili" target="_self">
						<img src="http://images.media-allrecipes.com/images/56567.png" class="hero-link__item__image" alt="Soups, Stews and Chili"><span class="hero-link__item__text">Soups, Stews and Chili</span>
					</a>
					<a href="/recipes/82/trusted-brands-recipes-and-tips/" class="hero-link__item" title="Trusted Brands" target="_self">
						<img src="http://images.media-allrecipes.com/images/56617.png" class="hero-link__item__image" alt="Trusted Brands"><span class="hero-link__item__text">Trusted Brands</span>
					</a>
					<a href="/recipes/236/us-recipes/" class="hero-link__item" title="U.S. Recipes" target="_self">
						<img src="http://images.media-allrecipes.com/images/58656.png" class="hero-link__item__image" alt="U.S. Recipes"><span class="hero-link__item__text">U.S. Recipes</span>
					</a>
					<a href="/recipes/86/world-cuisine/" class="hero-link__item" title="World Cuisine" target="_self">
						<img src="http://images.media-allrecipes.com/images/56610.png" class="hero-link__item__image" alt="World Cuisine"><span class="hero-link__item__text">World Cuisine</span>
					</a>
				</div>
			</section>
		</div>
		{{-- Danh sach mon an noi tieng --}}
		<div class="popularRecipe cook_order">
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