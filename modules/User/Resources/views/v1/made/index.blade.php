@extends(MASTER_V1.'.layout_master_user')
@section('seo')

@stop
@section('user_content')
<div data-ng-view="" class="profile-wrapper full-page ng-scope">
	<div data-ng-init="init()" class="ng-scope">
		<div data-ng-hide="isEmptyGrid" class="ng-hide">
			<section masonry="" class="grid grid-fixed made-it" preserve-order="" item-selector="article" style="position: relative; height: 0px;">
				<div data-universal-masonry-grid-view="">
					<!-- ngRepeat: item in itemList -->
				</div>
			</section>
			<div class="recipe-box__more"> <button data-ng-click="getItems()" data-ng-disabled="disableMore" data-ng-hide="hideMore" class="btns-one-small--bottom-margin ng-hide" id="moreBtn">More</button> </div>
			<div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
		</div>
		<div data-ng-show="!isInitialLoad &amp;&amp; isEmptyGrid" class="profile-empty-grid">
			<div> <span class="empty-page-header">Keep track of what you've made.</span><br> <span class="empty-description">When you finish a recipe, be sure to click "I made it!" below the directions.</span> </div>
		</div>
	</div>
</div>
@stop