@extends(MASTER_USER_V1.'.layout_master_user_full')
@section('user_content')
<div class="profile-wrapper full-page ng-scope">
    <div class="ng-scope">
        <div>
            <ul class="profile-top-toolbar private-profile--toolbar">
                <li class="profile-top-toolbar--buttons selected"> 
                	<a href="/cook/my/collections/" data-spa="true" class="btns-two-small" disabled>Collections</a>
                	<a href="/cook/my/favorites" data-spa="true" class="btns-two-small selected">Recipes</a> 
                </li>
                <li class="profile-top-toolbar--search">
                    <ul class="profile-search--tools">
                        <li class="search-box">
                            <div class="input-wrap">
                                <input type="text" placeholder="Find a saved recipe" class="light ng-pristine ng-untouched ng-valid" data-ng-keyup="$event.keyCode == 13 &amp;&amp; search()">
                                <div class="icon-clear-wrapper ng-hide"> <span class="icon icon--clear"></span> </div>
                                <button class="btn-basic--small btn-orange ng-pristine ng-untouched ng-valid"><span class="icon mag-glass"></span></button> 
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="profile-top-toolbar--nav sort--nav">
                    <span class="toolbar--sort">Sort by:</span> 
                    <ul id="529d3545-feea-41b5-b53c-281172de0014">
                        <li> <a class="toggle-similar view light" data-on="sortType">    <span class="toggle-similar__view__text ng-scope">Newest</span> <span class="icon--chevron-down"></span> </a> </li>
                    </ul>
                    <ul class="sort-nav sort--selector ng-hide" id="sort-results" data-on="pageType">
                        <li hidewhenclicked="" class="ng-scope"><a>Newest</a></li>
                        <li hidewhenclicked="" class="ng-scope ng-hide"><a>Rating</a></li>
                        <li hidewhenclicked="" class="ng-scope"><a>Title</a></li>
                    </ul>
                </li>
                <li class="profile-top-toolbar--nav recipe--nav ng-hide">
                    <span class="toolbar--sort">View:</span> 
                    <ul id="a214b9e2-9d8d-4ab0-99db-4f4561f821d9">
                        <li> <a class="toggle-similar view light" data-on="favoriteType"> <span class="ng-scope">Recipes</span>   <span class="icon--chevron-down"></span> </a> </li>
                    </ul>
                    <ul class="sort-nav recipe--selector ng-hide" id="sort-results" data-on="pageType">
                        <li hidewhenclicked="" class="ng-scope selected"><a>Recipes</a></li>
                        <li hidewhenclicked="" class="ng-scope"><a>Saved links</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="search-results">
            <div data-search-result-count="" style="margin:0 0 0 1rem;padding:5px 0 10px 0;" class="ng-hide">
                <p class="search-results-text"> <span>  
	                <span class="subtext ng-binding ng-scope">14</span> 
	                </span> <span class="ng-binding"></span>
                </p>
            </div>

            <div style="padding:0 15px;" class="ng-hide"> <span class="search-results__text">You can also try different words that have similar meanings like “crumble” instead of “cobbler.”</span> </div>            
            <section class="grid grid-fixed cards" style="position: relative; height: 455.172px;">
			    <div>
			        <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 0px; top: 0px;">
			            <div>
			                <div class="ng-scope">
			                    <div class="private-profile">
			                        <div class="ng-hide">
			                            <span>  <a title="Save this recipe" class="favorite ng-scope ng-isolate-scope"><span class="ng-binding"></span></a> </span> <a target="_self" class="ng-scope" href="/recipe/247023/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes/"> <img class="grid-col__rec-image ng-isolate-scope" alt="Jan's Pasta-N-Peas with Tuna and Sun-Dried Tomatoes" title="Jan's Pasta-N-Peas with Tuna and Sun-Dried Tomatoes" src="" style="display: inline;"></a>
			                            <h3 class="grid-col__h3 grid-col__h3--recipe-grid">
			                                <a target="_self" class="ng-scope" href="/recipe/247023/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes/"> <span class="ng-binding">Jan's Pasta-N-Peas with Tuna and Sun-Dried Tomatoes</span> </a>
			                                <div class="grid-col__video ng-hide"><a target="_self" class="ng-scope" href="/recipe/247023/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes/"> </a><a target="_self" href="/video//jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes"> <span class="icon--videoplay-small-white"></span> </a> </div>
			                            </h3>
			                            <a target="_self" class="ng-scope" href="/recipe/247023/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes/">
			                                <div data-rating="0" data-review-count="0" class="ng-isolate-scope">
			                                    <div class="grid-col__ratings"> <span class="rating-stars"> <img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"></span> <span class="grid-col__reviews ng-binding">0</span> </div>
			                                </div>
			                                <div class="rec-card__description ng-binding ng-scope">This is a fresh and modern take on two recipes from my Italian mother-in-law. Fresh peas in place of canned, sun dried tomatoes in place of heavy tomato sauce and Bumble Bee® Solid White Albacore Tuna in Water replacing tuna in oil. This is a fast and flavorful meal to put together with just a few shelf stable ingredients.</div>
			                            </a>
			                            <div class="profile profile--recipe-card ng-scope">
			                                <div>
			                                    <a target="_self" class="ng-isolate-scope" href="/cook/bumblebee/">
			                                        <ul class="cook-details">
			                                            <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4472152.jpg"></li>
			                                            <li>
			                                                <h4><span class="ng-binding">Recipe by </span><span class="ng-binding">Bumble Bee</span></h4>
			                                                <ul class="cook-details__followers followers-count">
			                                                    <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">872</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__favorites favorites-count">
			                                                    <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">10</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__recipes-made recipes-made-count">
			                                                    <li> <span class="icon icon--cook-card-made" title="Recipes Made"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">0</span> </li>
			                                                </ul>
			                                            </li>
			                                        </ul>
			                                    </a>
			                                </div>
			                            </div>
			                        </div>
			                        <div>
			                            <span>  <a title="Remove this recipe from your favorites" class="favorite ng-scope ng-isolate-scope highlighted"><span class="ng-binding"></span></a> </span> <span class="ng-scope"> <span data-text="::('Saved in')" data-collectioncount="::item.collectionCount" data-folderids="::item.folderIds" class="ng-isolate-scope"> <span class="ng-scope"> <span class="collection-overlay"> <a title="Add to Collection"> Add to Collection </a> </span> </span>  </span> </span> <a target="_self" class="ng-scope" href="/recipe/247023/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes/"> <img class="grid-col__rec-image ng-isolate-scope" alt="Jan's Pasta-N-Peas with Tuna and Sun-Dried Tomatoes" title="Jan's Pasta-N-Peas with Tuna and Sun-Dried Tomatoes" src="http://images.media-allrecipes.com/userphotos/250x250/3544343.jpg" style="display: inline;"></a>
			                            <h3 class="grid-col__h3 grid-col__h3--recipe-grid">
			                                <a target="_self" class="ng-scope" href="/recipe/247023/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes/"> <span class="ng-binding">Jan's Pasta-N-Peas with Tuna and Sun-Dried Tomatoes</span> </a>
			                                <div class="grid-col__video ng-hide"><a target="_self" class="ng-scope" href="/recipe/247023/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes/"> </a><a target="_self" href="/video/0/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes"> <span class="icon--videoplay-small-white"></span> </a> </div>
			                            </h3>
			                            <a target="_self" class="ng-scope" href="/recipe/247023/jans-pasta-n-peas-with-tuna-and-sun-dried-tomatoes/">
			                                <div data-rating="0" data-review-count="0" class="ng-isolate-scope">
			                                    <div class="grid-col__ratings"> <span class="rating-stars"> <img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/empty-star.png"></span> <span class="grid-col__reviews ng-binding">0</span> </div>
			                                </div>
			                                <div class="rec-card__description ng-binding ng-scope">This is a fresh and modern take on two recipes from my Italian mother-in-law. Fresh peas in place of canned, sun dried tomatoes in place of heavy tomato sauce and Bumble Bee® Solid White Albacore Tuna in Water replacing tuna in oil. This is a fast and flavorful meal to put together with just a few shelf stable ingredients.</div>
			                            </a>
			                            <div class="profile profile--recipe-card ng-scope">
			                                <div>
			                                    <a target="_self" class="ng-isolate-scope" href="/cook/bumblebee/">
			                                        <ul class="cook-details">
			                                            <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4472152.jpg"></li>
			                                            <li>
			                                                <h4><span class="ng-binding">Recipe by </span><span class="ng-binding">Bumble Bee</span></h4>
			                                                <ul class="cook-details__followers followers-count">
			                                                    <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">872</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__favorites favorites-count">
			                                                    <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">10</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__recipes-made recipes-made-count">
			                                                    <li> <span class="icon icon--cook-card-made" title="Recipes Made"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">0</span> </li>
			                                                </ul>
			                                            </li>
			                                        </ul>
			                                    </a>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </article>
			        <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 314px; top: 0px;">
			            <div>
			                <div class="ng-scope">
			                    <div class="private-profile">
			                        <div class="ng-hide">
			                            <span>  <a title="Save this recipe" class="favorite ng-scope ng-isolate-scope"><span class="ng-binding"></span></a> </span> <a target="_self" class="ng-scope" href="/recipe/247020/easy-microwave-potatoes-and-tuna/"> <img class="grid-col__rec-image ng-isolate-scope" alt="Easy Microwave Potatoes and Tuna" title="Easy Microwave Potatoes and Tuna" src="" style="display: inline;"></a>
			                            <h3 class="grid-col__h3 grid-col__h3--recipe-grid">
			                                <a target="_self" class="ng-scope" href="/recipe/247020/easy-microwave-potatoes-and-tuna/"> <span class="ng-binding">Easy Microwave Potatoes and Tuna</span> </a>
			                                <div class="grid-col__video ng-hide"><a target="_self" class="ng-scope" href="/recipe/247020/easy-microwave-potatoes-and-tuna/"> </a><a target="_self" href="/video//easy-microwave-potatoes-and-tuna"> <span class="icon--videoplay-small-white"></span> </a> </div>
			                            </h3>
			                            <a target="_self" class="ng-scope" href="/recipe/247020/easy-microwave-potatoes-and-tuna/">
			                                <div data-rating="4.67" data-review-count="3" class="ng-isolate-scope">
			                                    <div class="grid-col__ratings"> <span class="rating-stars"> <img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"></span> <span class="grid-col__reviews ng-binding">3</span> </div>
			                                </div>
			                                <div class="rec-card__description ng-binding ng-scope">Prepared in the microwave, this dinner comes together quickly. The mild dressing on the potatoes 
			                                    partners perfectly with the fresh flavor of the high protein tuna.
			                                </div>
			                            </a>
			                            <div class="profile profile--recipe-card ng-scope">
			                                <div>
			                                    <a target="_self" class="ng-isolate-scope" href="/cook/bumblebee/">
			                                        <ul class="cook-details">
			                                            <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4472152.jpg"></li>
			                                            <li>
			                                                <h4><span class="ng-binding">Recipe by </span><span class="ng-binding">Bumble Bee</span></h4>
			                                                <ul class="cook-details__followers followers-count">
			                                                    <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">872</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__favorites favorites-count">
			                                                    <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">10</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__recipes-made recipes-made-count">
			                                                    <li> <span class="icon icon--cook-card-made" title="Recipes Made"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">0</span> </li>
			                                                </ul>
			                                            </li>
			                                        </ul>
			                                    </a>
			                                </div>
			                            </div>
			                        </div>
			                        <div>
			                            <span>  <a title="Remove this recipe from your favorites" class="favorite ng-scope ng-isolate-scope highlighted"><span class="ng-binding"></span></a> </span> <span class="ng-scope"> <span data-text="::('Saved in')" data-collectioncount="::item.collectionCount" data-folderids="::item.folderIds" class="ng-isolate-scope"> <span class="ng-scope"> <span class="collection-overlay"> <a title="Add to Collection"> Add to Collection </a> </span> </span>  </span> </span> <a target="_self" class="ng-scope" href="/recipe/247020/easy-microwave-potatoes-and-tuna/"> <img class="grid-col__rec-image ng-isolate-scope" alt="Easy Microwave Potatoes and Tuna" title="Easy Microwave Potatoes and Tuna" src="http://images.media-allrecipes.com/userphotos/250x250/3511820.jpg" style="display: inline;"></a>
			                            <h3 class="grid-col__h3 grid-col__h3--recipe-grid">
			                                <a target="_self" class="ng-scope" href="/recipe/247020/easy-microwave-potatoes-and-tuna/"> <span class="ng-binding">Easy Microwave Potatoes and Tuna</span> </a>
			                                <div class="grid-col__video ng-hide"><a target="_self" class="ng-scope" href="/recipe/247020/easy-microwave-potatoes-and-tuna/"> </a><a target="_self" href="/video/0/easy-microwave-potatoes-and-tuna"> <span class="icon--videoplay-small-white"></span> </a> </div>
			                            </h3>
			                            <a target="_self" class="ng-scope" href="/recipe/247020/easy-microwave-potatoes-and-tuna/">
			                                <div data-rating="4.67" data-review-count="3" class="ng-isolate-scope">
			                                    <div class="grid-col__ratings"> <span class="rating-stars"> <img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/half-star.png"></span> <span class="grid-col__reviews ng-binding">3</span> </div>
			                                </div>
			                                <div class="rec-card__description ng-binding ng-scope">Prepared in the microwave, this dinner comes together quickly. The mild dressing on the potatoes 
			                                    partners perfectly with the fresh flavor of the high protein tuna.
			                                </div>
			                            </a>
			                            <div class="profile profile--recipe-card ng-scope">
			                                <div>
			                                    <a target="_self" class="ng-isolate-scope" href="/cook/bumblebee/">
			                                        <ul class="cook-details">
			                                            <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4472152.jpg"></li>
			                                            <li>
			                                                <h4><span class="ng-binding">Recipe by </span><span class="ng-binding">Bumble Bee</span></h4>
			                                                <ul class="cook-details__followers followers-count">
			                                                    <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">872</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__favorites favorites-count">
			                                                    <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">10</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__recipes-made recipes-made-count">
			                                                    <li> <span class="icon icon--cook-card-made" title="Recipes Made"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">0</span> </li>
			                                                </ul>
			                                            </li>
			                                        </ul>
			                                    </a>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </article>
			        <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 628px; top: 0px;">
			            <div>
			                <div class="ng-scope">
			                    <div class="private-profile">
			                        <div class="ng-hide">
			                            <span>  <a title="Save this recipe" class="favorite ng-scope ng-isolate-scope"><span class="ng-binding"></span></a> </span> <a target="_self" class="ng-scope" href="/recipe/247022/easy-white-albacore-ceviche/"> <img class="grid-col__rec-image ng-isolate-scope" alt="Easy White Albacore Ceviche" title="Easy White Albacore Ceviche" src="" style="display: inline;"></a>
			                            <h3 class="grid-col__h3 grid-col__h3--recipe-grid">
			                                <a target="_self" class="ng-scope" href="/recipe/247022/easy-white-albacore-ceviche/"> <span class="ng-binding">Easy White Albacore Ceviche</span> </a>
			                                <div class="grid-col__video ng-hide"><a target="_self" class="ng-scope" href="/recipe/247022/easy-white-albacore-ceviche/"> </a><a target="_self" href="/video//easy-white-albacore-ceviche"> <span class="icon--videoplay-small-white"></span> </a> </div>
			                            </h3>
			                            <a target="_self" class="ng-scope" href="/recipe/247022/easy-white-albacore-ceviche/">
			                                <div data-rating="5" data-review-count="2" class="ng-isolate-scope">
			                                    <div class="grid-col__ratings"> <span class="rating-stars"> <img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"></span> <span class="grid-col__reviews ng-binding">2</span> </div>
			                                </div>
			                                <div class="rec-card__description ng-binding ng-scope">This ceviche is very easy to put together, using white albacore really makes the difference, fresh taste and a firm texture come together to prepare a delicious meal.</div>
			                            </a>
			                            <div class="profile profile--recipe-card ng-scope">
			                                <div>
			                                    <a target="_self" class="ng-isolate-scope" href="/cook/bumblebee/">
			                                        <ul class="cook-details">
			                                            <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4472152.jpg"></li>
			                                            <li>
			                                                <h4><span class="ng-binding">Recipe by </span><span class="ng-binding">Bumble Bee</span></h4>
			                                                <ul class="cook-details__followers followers-count">
			                                                    <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">872</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__favorites favorites-count">
			                                                    <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">10</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__recipes-made recipes-made-count">
			                                                    <li> <span class="icon icon--cook-card-made" title="Recipes Made"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">0</span> </li>
			                                                </ul>
			                                            </li>
			                                        </ul>
			                                    </a>
			                                </div>
			                            </div>
			                        </div>
			                        <div>
			                            <span>  <a title="Remove this recipe from your favorites" class="favorite ng-scope ng-isolate-scope highlighted"><span class="ng-binding"></span></a> </span> <span class="ng-scope"> <span data-text="::('Saved in')" data-collectioncount="::item.collectionCount" data-folderids="::item.folderIds" class="ng-isolate-scope"> <span class="ng-scope"> <span class="collection-overlay"> <a title="Add to Collection"> Add to Collection </a> </span> </span>  </span> </span> <a target="_self" class="ng-scope" href="/recipe/247022/easy-white-albacore-ceviche/"> <img class="grid-col__rec-image ng-isolate-scope" alt="Easy White Albacore Ceviche" title="Easy White Albacore Ceviche" src="http://images.media-allrecipes.com/userphotos/250x250/3545112.jpg" style="display: inline;"></a>
			                            <h3 class="grid-col__h3 grid-col__h3--recipe-grid">
			                                <a target="_self" class="ng-scope" href="/recipe/247022/easy-white-albacore-ceviche/"> <span class="ng-binding">Easy White Albacore Ceviche</span> </a>
			                                <div class="grid-col__video ng-hide"><a target="_self" class="ng-scope" href="/recipe/247022/easy-white-albacore-ceviche/"> </a><a target="_self" href="/video/0/easy-white-albacore-ceviche"> <span class="icon--videoplay-small-white"></span> </a> </div>
			                            </h3>
			                            <a target="_self" class="ng-scope" href="/recipe/247022/easy-white-albacore-ceviche/">
			                                <div data-rating="5" data-review-count="2" class="ng-isolate-scope">
			                                    <div class="grid-col__ratings"> <span class="rating-stars"> <img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"></span> <span class="grid-col__reviews ng-binding">2</span> </div>
			                                </div>
			                                <div class="rec-card__description ng-binding ng-scope">This ceviche is very easy to put together, using white albacore really makes the difference, fresh taste and a firm texture come together to prepare a delicious meal.</div>
			                            </a>
			                            <div class="profile profile--recipe-card ng-scope">
			                                <div>
			                                    <a target="_self" class="ng-isolate-scope" href="/cook/bumblebee/">
			                                        <ul class="cook-details">
			                                            <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4472152.jpg"></li>
			                                            <li>
			                                                <h4><span class="ng-binding">Recipe by </span><span class="ng-binding">Bumble Bee</span></h4>
			                                                <ul class="cook-details__followers followers-count">
			                                                    <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">872</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__favorites favorites-count">
			                                                    <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">10</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__recipes-made recipes-made-count">
			                                                    <li> <span class="icon icon--cook-card-made" title="Recipes Made"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">0</span> </li>
			                                                </ul>
			                                            </li>
			                                        </ul>
			                                    </a>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </article>
			        <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 942px; top: 0px;">
			            <div>
			                <div class="ng-scope">
			                    <div class="private-profile">
			                        <div class="ng-hide">
			                            <span>  <a title="Save this recipe" class="favorite ng-scope ng-isolate-scope"><span class="ng-binding"></span></a> </span> <a target="_self" class="ng-scope" href="/recipe/247015/gluten-free-and-paleo-tuna-avocado-cups/"> <img class="grid-col__rec-image ng-isolate-scope" alt="Gluten Free and Paleo Tuna Avocado Cups" title="Gluten Free and Paleo Tuna Avocado Cups" src="" style="display: inline;"></a>
			                            <h3 class="grid-col__h3 grid-col__h3--recipe-grid">
			                                <a target="_self" class="ng-scope" href="/recipe/247015/gluten-free-and-paleo-tuna-avocado-cups/"> <span class="ng-binding">Gluten Free and Paleo Tuna Avocado Cups</span> </a>
			                                <div class="grid-col__video ng-hide"><a target="_self" class="ng-scope" href="/recipe/247015/gluten-free-and-paleo-tuna-avocado-cups/"> </a><a target="_self" href="/video//gluten-free-and-paleo-tuna-avocado-cups"> <span class="icon--videoplay-small-white"></span> </a> </div>
			                            </h3>
			                            <a target="_self" class="ng-scope" href="/recipe/247015/gluten-free-and-paleo-tuna-avocado-cups/">
			                                <div data-rating="4.88" data-review-count="7" class="ng-isolate-scope">
			                                    <div class="grid-col__ratings"> <span class="rating-stars"> <img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"></span> <span class="grid-col__reviews ng-binding">7</span> </div>
			                                </div>
			                                <div class="rec-card__description ng-binding ng-scope">Perfectly ripened avocado stuffed with a healthy tuna salad that's packed with tons of flavor!</div>
			                            </a>
			                            <div class="profile profile--recipe-card ng-scope">
			                                <div>
			                                    <a target="_self" class="ng-isolate-scope" href="/cook/bumblebee/">
			                                        <ul class="cook-details">
			                                            <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4472152.jpg"></li>
			                                            <li>
			                                                <h4><span class="ng-binding">Recipe by </span><span class="ng-binding">Bumble Bee</span></h4>
			                                                <ul class="cook-details__followers followers-count">
			                                                    <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">872</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__favorites favorites-count">
			                                                    <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">10</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__recipes-made recipes-made-count">
			                                                    <li> <span class="icon icon--cook-card-made" title="Recipes Made"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">0</span> </li>
			                                                </ul>
			                                            </li>
			                                        </ul>
			                                    </a>
			                                </div>
			                            </div>
			                        </div>
			                        <div>
			                            <span>  <a title="Remove this recipe from your favorites" class="favorite ng-scope ng-isolate-scope highlighted"><span class="ng-binding"></span></a> </span> <span class="ng-scope"> <span data-text="::('Saved in')" data-collectioncount="::item.collectionCount" data-folderids="::item.folderIds" class="ng-isolate-scope"> <span class="ng-scope"> <span class="collection-overlay"> <a title="Add to Collection"> Add to Collection </a> </span> </span>  </span> </span> <a target="_self" class="ng-scope" href="/recipe/247015/gluten-free-and-paleo-tuna-avocado-cups/"> <img class="grid-col__rec-image ng-isolate-scope" alt="Gluten Free and Paleo Tuna Avocado Cups" title="Gluten Free and Paleo Tuna Avocado Cups" src="http://images.media-allrecipes.com/userphotos/250x250/3511805.jpg" style="display: inline;"></a>
			                            <h3 class="grid-col__h3 grid-col__h3--recipe-grid">
			                                <a target="_self" class="ng-scope" href="/recipe/247015/gluten-free-and-paleo-tuna-avocado-cups/"> <span class="ng-binding">Gluten Free and Paleo Tuna Avocado Cups</span> </a>
			                                <div class="grid-col__video ng-hide"><a target="_self" class="ng-scope" href="/recipe/247015/gluten-free-and-paleo-tuna-avocado-cups/"> </a><a target="_self" href="/video/0/gluten-free-and-paleo-tuna-avocado-cups"> <span class="icon--videoplay-small-white"></span> </a> </div>
			                            </h3>
			                            <a target="_self" class="ng-scope" href="/recipe/247015/gluten-free-and-paleo-tuna-avocado-cups/">
			                                <div data-rating="4.88" data-review-count="7" class="ng-isolate-scope">
			                                    <div class="grid-col__ratings"> <span class="rating-stars"> <img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"><img width="16" height="16" class="ng-scope" src="http://images.media-allrecipes.com/ar-images/icons/rating-stars/full-star.png"></span> <span class="grid-col__reviews ng-binding">7</span> </div>
			                                </div>
			                                <div class="rec-card__description ng-binding ng-scope">Perfectly ripened avocado stuffed with a healthy tuna salad that's packed with tons of flavor!</div>
			                            </a>
			                            <div class="profile profile--recipe-card ng-scope">
			                                <div>
			                                    <a target="_self" class="ng-isolate-scope" href="/cook/bumblebee/">
			                                        <ul class="cook-details">
			                                            <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4472152.jpg"></li>
			                                            <li>
			                                                <h4><span class="ng-binding">Recipe by </span><span class="ng-binding">Bumble Bee</span></h4>
			                                                <ul class="cook-details__followers followers-count">
			                                                    <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">872</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__favorites favorites-count">
			                                                    <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">10</span> </li>
			                                                </ul>
			                                                <ul class="cook-details__recipes-made recipes-made-count">
			                                                    <li> <span class="icon icon--cook-card-made" title="Recipes Made"></span> <span></span> </li>
			                                                    <li> <span class="ng-binding">0</span> </li>
			                                                </ul>
			                                            </li>
			                                        </ul>
			                                    </a>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </article>
			    </div>
			</section>

            <div class="recipe-box__more"> 
            	<button class="btns-one-small--bottom-margin ng-hide" id="recipeBoxMoreBtn">More</button> 
            </div>
        </div>
        <div class="profile-empty-grid ng-hide">
            <div> 
            	<span class="empty-page-header">Welcome to your favorites!</span><br>            
            	<span class="empty-description"> Tap <span class="icon--recipe-detail-nav-save" style="left:0;"></span> to save any recipe you like,<br> and it'll show up here. </span> 
            </div>
        </div>
        <div id="msg-toolbar" class="notification hidden"><span class="notification__message"></span></div>
    </div>
</div>
@stop