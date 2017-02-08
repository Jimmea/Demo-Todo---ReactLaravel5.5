@extends(MASTER_V1.'.layout_master_user')
@section('seo')

@stop
@section('user_content')
<div data-ng-view="" class="profile-wrapper full-page ng-scope">
	<div data-ng-init="init()" class="ng-scope">
		<div data-ng-hide="isEmptyGrid" class="ng-hide">
			<section masonry="" class="grid grid-fixed" preserve-order="" item-selector="article" style="position: relative; height: 455px;">
				<article class="grid-col--fixed-tiles profile-create-recipe-card ng-scope" style="position: absolute; left: 0px; top: 0px;"> <a href="/cook/my/create-recipe" class="recipe-button-add" target="_self"> <span>+</span><span class="light">Add a Recipe</span> </a> </article>
				<div data-universal-masonry-grid-view="">
					<!-- ngRepeat: item in itemList -->
				</div>
			</section>
		</div>
		<div class="recipe-box__more"> <button data-ng-click="getItems()" data-ng-disabled="disableMore" data-ng-hide="hideMore" class="btns-one-small--bottom-margin ng-hide" id="recipeBoxMoreBtn">More</button> </div>
		<!-- ngIf: !isInitialLoad && isEmptyGrid -->
		<div ng-if="!isInitialLoad &amp;&amp; isEmptyGrid" class="profile-empty-grid ng-scope">
			<div> <span class="empty-page-header">You don't have any personal recipes yet.</span><br> <span class="empty-description">Share your own culinary creations! <a class="orange" href="/cook/my/create-recipe/" target="_self">Add a recipe</a></span> </div>
		</div>
		<!-- end ngIf: !isInitialLoad && isEmptyGrid --> 
	</div>
</div>
@stop