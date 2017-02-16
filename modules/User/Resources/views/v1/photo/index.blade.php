@extends(MASTER_V1.'.layout_master_user')
@section('seo')

@stop
@section('user_content')
<div data-ng-view="" class="profile-wrapper full-page ng-scope">
	<div data-ng-init="init()" class="ng-scope">
		<section masonry="" class="grid grid-fixed" preserve-order="" item-selector="article" style="position: relative; height: 388px;">
			<article class="grid-col--fixed-tiles profile-photo-card photo-upload ng-scope" data-ng-controller="ar_controllers_photo_upload" ng-init="init(null,null,null,'MyPhotos')" style="border: none; position: absolute; left: 0px; top: 0px;"> <input type="file" class="photo-upload__input" id="photoUpload" ng-file-select="onFileSelect($files)"> <label for="photoUpload" class="photo-button-add"> <span>+</span><span class="light">Add a photo</span> </label> </article>
			<div data-universal-masonry-grid-view="">
				<!-- ngRepeat: item in itemList -->
			</div>
		</section>
		<div class="recipe-box__more"> <button data-ng-click="getItems()" data-ng-disabled="disableMore" data-ng-hide="hideMore" class="btns-one-small--bottom-margin ng-hide" id="moreBtn">More</button> </div>
		<div id="msg-toolbar" class="notification hidden ng-isolate-scope"><span class="notification__message"></span></div>
	</div>
</div>
@stop