@extends(MASTER_USER_V1.'.layout_master_user_full')
@section('user_content')
<div class="profile-wrapper full-page ng-scope">
    <div class="ng-scope">
        <div class="ng-hide">
            <section class="grid grid-fixed" style="position: relative; height: 455px;">
                <article class="grid-col--fixed-tiles profile-create-recipe-card ng-scope" style="position: absolute; left: 0px; top: 0px;"><a href="/cook/my/create-recipe" class="recipe-button-add" target="_self"> <span>+</span><span class="light">Add a Recipe</span> </a> </article>
                <div></div>
            </section>
        </div>
        <div class="recipe-box__more"> <button class="btns-one-small--bottom-margin ng-hide" id="recipeBoxMoreBtn">More</button> </div>
        <div class="profile-empty-grid ng-scope">
            <div> <span class="empty-page-header">You don't have any personal recipes yet.</span><br><span class="empty-description">Share your own culinary creations! <a class="orange" href="/cook/my/create-recipe/" target="_self">Add a recipe</a></span> </div>
        </div>
    </div>
</div>
@stop