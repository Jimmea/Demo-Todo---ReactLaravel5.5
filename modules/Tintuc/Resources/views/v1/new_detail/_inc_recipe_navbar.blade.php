<section class="recipe-navbar">
    <a href="" class="save-on-click" ng-click="saveOnClick(22967, 'Recipe',&quot;Nanna's Banana Bread&quot;,'http://images.media-allrecipes.com/userphotos/250x250/501041.jpg')">
        <div ng-switch="" on="saved">
            <!-- ngSwitchWhen: true -->
            <!-- ngSwitchWhen: false --><div ng-switch-when="false" class="ng-scope">
            <span class="svg-icon--recipe-navbar--heart_off svg-icon--recipe-navbar--heart_off-dims"></span>
            <span>Save</span>
        </div><!-- end ngSwitchWhen: -->
        </div>
    </a>
    <a href="" ng-click="madeItClick()">
        <span class="svg-icon--recipe-navbar--i_made_it svg-icon--recipe-navbar--i_made_it-dims"></span>
        <span>I Made It</span>
    </a>
    <a href="" class="rate-on-click" ng-click="rateItOnClick(true)">
        <span class="svg-icon--recipe-navbar--rate svg-icon--recipe-navbar--rate-dims"></span>
        <span>Rate it</span>
    </a>
    <a href="" ng-click="openShareModal({&quot;RecipeId&quot;:22967,&quot;IsLoggedIn&quot;:true,&quot;PinterestUrl&quot;:&quot;http://pinterest.com/pin/create/button/?url=http://allrecipes.com/recipe/22967/nannas-banana-bread/?lnkid=usspnt\u0026media=http://images.media-allrecipes.com/userphotos/250x250/501041.jpg\u0026description=Nanna\u0027s%20Banana%20Bread%20-%20Allrecipes.com&quot;,&quot;FacebookUrl&quot;:&quot;https://facebook.com/sharer.php?u=http://allrecipes.com/recipe/22967/nannas-banana-bread/?lnkid=ussfac&quot;,&quot;TwitterUrl&quot;:&quot;https://twitter.com/intent/tweet?url=http://allrecipes.com/recipe/22967/nannas-banana-bread/?lnkid=usstwt\u0026text=Nanna\u0027s%20Banana%20Bread%20-%20Allrecipes.com\u0026via=Allrecipes&quot;,&quot;GooglePlusUrl&quot;:&quot;https://plus.google.com/share?url=http://allrecipes.com/recipe/22967/nannas-banana-bread/?lnkid=ussgog&quot;,&quot;StumbleUpon&quot;:&quot;https://www.stumbleupon.com/submit?url=http://allrecipes.com/recipe/22967/nannas-banana-bread/?lnkid=usssup&quot;,&quot;ImageUrl&quot;:&quot;http://images.media-allrecipes.com/userphotos/250x250/501041.jpg&quot;,&quot;Title&quot;:&quot;Nanna\u0027s%20Banana%20Bread%20-%20Allrecipes.com&quot;,&quot;ShareSectionTitle&quot;:null})" hidewhenclicked="">
        <span class="icon svg-icon--recipe-navbar--share svg-icon--recipe-navbar--share-dims"></span>
        <span>Share</span>
    </a>
    <a id="print-recipe" ng-href="print/?recipeType=Recipe&amp;servings=12" target="_self" href="print/?recipeType=Recipe&amp;servings=12">
        <span class="icon icon--picture"></span>
        <span>Albumn</span>
    </a>
    <a id="print-recipe" ng-href="print/?recipeType=Recipe&amp;servings=12" target="_self" href="print/?recipeType=Recipe&amp;servings=12">
        <span class="svg-icon--recipe-navbar--print svg-icon--recipe-navbar--print-dims"></span>
        <span>Print</span>
    </a>
</section>