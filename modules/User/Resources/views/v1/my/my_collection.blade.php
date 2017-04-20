@extends(MASTER_USER_V1.'.layout_master_user_full')
@section('user_content')
<div class="profile-wrapper full-page ng-scope">
    <div class="ng-scope">
        <div>
            <ul class="profile-top-toolbar private-profile--toolbar">
                <li class="profile-top-toolbar--buttons selected"> 
                	<a href="/cook/my/collections/" data-spa="true" class="btns-two-small selected" disabled>Collections</a>
                	<a href="/cook/my/favorites" data-spa="true" class="btns-two-small">Recipes</a> 
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
                <p class="search-results-text"> <span>  <span class="subtext ng-binding ng-scope">14</span> </span> <span class="ng-binding"></span> </p>
            </div>
            <div style="padding:0 15px;" class="ng-hide"> <span class="search-results__text">You can also try different words that have similar meanings like “crumble” instead of “cobbler.”</span> </div>
            
            <section class="grid grid-fixed cards" style="position: relative; height: 1761.56px;">
                <div>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 314px; top: 0px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/149078587">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">hungokhh</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 628px; top: 0px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/148880007">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">fdfdfd</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 942px; top: 0px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/148880006">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">hungokata</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 0px; top: 440px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/148880005">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">dsd</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 314px; top: 440px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286823">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Appetizers</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 628px; top: 440px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286824">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Breads</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 942px; top: 440px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286825">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Desserts</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 0px; top: 880px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286826">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Drinks</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 314px; top: 880px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286827">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Main Dishes</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 628px; top: 880px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286828">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Salads</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 942px; top: 880px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286829">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Side Dishes</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 0px; top: 1320px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286830">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Snacks</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 314px; top: 1321px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Save a copy of this collection" class="favorite ng-isolate-scope ng-hide" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/145286831">
                                        <li class="collections-card-images"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Soups</h3>
                                            <h4 class="ng-binding">0 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/billcky/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/global/profile/nophoto/noprofile-50x50.png"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">BikkJally</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="My Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">0</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="My Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">2</span> </li>
                                            </ul>
                                            <ul class="cook-details__recipes-made recipes-made-count">
                                                <li> <span class="icon icon--cook-card-made" title="Recipes I’ve Made"></span> <span></span> </li>
                                                <li> <span class="ng-binding">6</span> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="grid-col grid-col--fixed-tiles" style="position: absolute; left: 628px; top: 1321px;">
                        <div>
                            <div class="ng-scope">
                                <ul class="collection-card">
                                    <a title="Remove this collection from my favorites" class="favorite ng-isolate-scope highlighted" data-collectioncreatorid="::item.collectionCreator.userID" data-collectiontitle="::item.nestedName"><span class="ng-binding"></span></a> 
                                    <a target="_self" class="ng-isolate-scope" href="http://m.allrecipes.com/collections/121463269">
                                        <li class="collections-card-images"> <img src="http://images.media-allrecipes.com/userphotos/140x140/01/05/45/1054505.jpg" class="ng-isolate-scope"><img src="http://images.media-allrecipes.com/userphotos/140x140/01/93/64/1936483.jpg" class="ng-isolate-scope"><img src="http://images.media-allrecipes.com/userphotos/140x140/00/89/49/894950.jpg" class="ng-isolate-scope"><img src="http://images.media-allrecipes.com/userphotos/140x140/00/65/86/658635.jpg" class="ng-isolate-scope"></li>
                                        <li class="collection-text">
                                            <h3 class="ng-binding">Fresh, Healthy, Delicious</h3>
                                            <h4 class="ng-binding">9 recipes</h4>
                                        </li>
                                    </a>
                                </ul>
                                <a target="_self" href="/cook/dixie/">
                                    <ul class="cook-details">
                                        <li> <img class="img-profile elevate-cook-thumbnail ng-isolate-scope" alt="profile image" src="http://images.media-allrecipes.com/userphotos/50x50/4064841.jpg"></li>
                                        <li>
                                            <h4> <span>Created by </span> <span class="ng-binding">Dixie</span> </h4>
                                            <ul class="cook-details__followers followers-count">
                                                <li> <span class="icon icon--cook-card-follower" title="Followers"></span> <span></span> </li>
                                                <li> <span class="ng-binding">10K</span> </li>
                                            </ul>
                                            <ul class="cook-details__favorites favorites-count">
                                                <li> <span class="icon icon--cook-card-favorite" title="Favorites"></span> <span></span> </li>
                                                <li> <span class="ng-binding">110</span> </li>
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
                    </article>
                </div>
                <article class="grid-col--fixed-tiles collection-card collectionCreate ng-scope" style="position: absolute; left: 0px; top: 0px;"><label for="collectionCreate" class="collection-add-button"> <span>+</span><span class="light">Create a collection</span> </label> </article>
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