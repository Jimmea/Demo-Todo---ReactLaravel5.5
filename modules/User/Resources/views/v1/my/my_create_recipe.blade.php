@extends(MASTER_USER_V1 . '.layout_master_user_profile')
@section('user_content')
<section class="cook-profile-setting cook-create-recipe">
    @include(USER_V1.'.my.my_profile_sidebar_left')    
    <div class="cook-profile-setting-content">
        <form action="/personalrecipe/submitrecipe/" enctype="multipart/form-data" id="SubmitRecipeForm" method="post" class="ng-pristine ng-valid">
            <section class="wrap-cook-setting-form">
                <h2 class="setting-content-title">Công thức hôm nay</h2>
                <input id="RecipeImageId" type="hidden" value="0">                
                <ul class="create-recipe__info">
                    <li class="create-recipe__info_avatar">
                        <div class="create-recipe_info_avatar avatar_preview ng-hide">
                            <a href=""><img src="" alt=""></a>
                            <div class="create-recipe_info_avatar_button">
                                <label class="image_upload" title="Sửa ảnh" for="new_picture_face"><i class="fa fa-camera"></i>Thay đổi</label>
                                <label class="button_delete" title="Xóa ảnh"><i class="fa fa-trash-o"></i>Xóa</label>
                            </div>
                        </div>
                        <div class="create-recipe_info_avatar avatar_default">
                            <h1 class="container-avatar-default">
                                <a href="javascript:;" class="add_tool_image" title="Click để tải hình ảnh minh họa">
                                    <img src="{{ asset('assets/avatar_create_recipe.jpg') }}" alt="Công thức nấu ăn ngon với hình minh họa">
                                </a>
                                <div class="overlay">                                    
                                    <span>Click &nbsp;&nbsp;<span class="icon icon--picture"></span>&nbsp;&nbsp; để upload hình minh họa nhé !!!</span>&nbsp;
                                </div>
                                <input type="file" class="hidden" name="avatar" accept="image/*" id="create-recipe_inputfile_avatar">
                                <input type="hidden" name="name" value="avatar">
                                <input type="hidden" name="primary_key" value="">
                            </h1>
                        </div>
                    </li>
                    <li>                    
                        <label for="Title">Tiêu đề món ăn <span class="text-danger">(*)</span></label>
                        <input class="input-wrap" id="Title" type="text" value="">
                    </li>
                    <li>                    
                        <label for="Description">Giới thiệu món ăn <span class="text-danger">(*)</span></label>
                        <textarea class="input-wrap description" cols="20" id="Description" rows="2"></textarea>
                        <grammarly-btn>
                            <div style="z-index: 2; opacity: 1; transform: translate(1179.5px, 377px);" class="_e725ae-textarea_btn _e725ae-not_focused">
                                <div class="_e725ae-transform_wrap">
                                    <div title="Protected by Grammarly" class="_e725ae-status"> </div>
                                </div>
                            </div>
                        </grammarly-btn>
                    </li>
                    <li>
                        <ul class="stats">
                            <li>                        
                                <label for="PrepTime">Thời gian chuẩn bị</label>
                                <input class="input-wrap" id="PrepTime" type="text" value="">
                            </li>
                            <li>                        
                                <label for="CookTime">Thời gian nấu</label>
                                <input class="input-wrap" id="CookTime" type="text" value="">
                            </li>
                            <li>                        
                                <label for="Servings">Khẩu phần</label>
                                <input class="input-wrap" id="Servings" type="text" value="">
                            </li>                                                        
                        </ul>
                    </li>
                    <li class="create-recipe__info_video">                    
                        <label for="Title">Video (Youtobe)</label>
                        <input class="input-wrap" id="Title" type="text" value=""> <br>
                        <span>https://www.youtube.com/watch?v=<b>L8Ss6EqoZKg</b>. Code= <b>L8Ss6EqoZKg</b></span>
                    </li>
                    <li>                    
                        <label for="Ingredients lieu">Nguyên liệu bao gồm <span class="text-danger">(*)</span></label>
                        <textarea class="input-wrap" cols="20" id="Ingredients" placeholder="Đặt mỗi nguyên liệu trên một dòng" rows="2"></textarea>                        
                    </li>
                    <li>                    
                        <label for="methods">Các bước đang thực hiện <span class="text-danger">(*)</span></label> <br>
                        <div class="create-recipe_list_step">
                            @for($i=1; $i<2; $i++)
                            <div class="create-recipe_item_box">                                                                
                                <div class="create-recipe_item_box_action">  
                                    <a href="javascript:;" title="Xóa bước thực hiện" class="create-recipe_delete_button_step">Xóa</a>                                                                      
                                </div>
                                <div class="create-recipe_item_box_step_count">
                                    1
                                </div>                        
                                <div class="create-recipe_item_box_text">
                                    <textarea class="input-wrap" cols="20" id="Directions" placeholder="Chia sẻ bước thực hiện cho cách 1" rows="2"></textarea>
                                </div>                        
                                <div class="create-recipe_item_box_photos">
                                    <div class="create-recipe_step_button_upload" title="Click để tải hình ảnh">
                                        <a href="javascript:void(0)" class="create-recipe_step_button">
                                            Tải hình ảnh bước thực hiện                                            
                                            <input type="file" name="files[]" multiple="" class="hidden">
                                        </a>
                                        <div class="text_step_photos_limit">
                                            (Bạn chỉ có thể upload 3 hình ảnh)
                                        </div>
                                    </div>
                                    <div class="create-recipe_step_photos_upload">
                                        <div class="create-recipe_wrap_photo">
                                            <div class="wrap-photo-overlay"></div>
                                            <div class="wrap-photo" title="">
                                                <button title="Xóa hình ảnh của bước này" class="button_delete_attachment_photo">Xóa</button>
                                                <img src="http://localhost:9031/assets/avatar_create_recipe.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="create-recipe_wrap_photo">
                                            <div class="wrap-photo-overlay"></div>
                                            <div class="wrap-photo" title="">
                                                <button title="Xóa hình ảnh của bước này" class="button_delete_attachment_photo">Xóa</button>
                                                <img src="http://localhost:9031/assets/avatar_create_recipe.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="create-recipe_wrap_photo">
                                            <div class="wrap-photo-overlay"></div>
                                            <div class="wrap-photo" title="">
                                                <button title="Xóa hình ảnh của bước này" class="button_delete_attachment_photo">Xóa</button>
                                                <img src="http://localhost:9031/assets/avatar_create_recipe.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>                 
                            @endfor                                                                   
                        </div>
                        <div class="create-recipe_add_more_step">
                            <a class="add_more_step" href="javascript:void(0)" target="_self">
                                <span class="fa fa-plus"></span> Bước tiếp theo
                            </a>
                        </div>                        
                    </li>
                </ul>               
                <ul class="create-recipe__priv-pub-ka">
                    <li>
                        <label class="radio-lbl">
                            <input id="RecipeAccessSpecifier" type="radio" value="Private"><span></span>
                            <span class="radio-lbl__option">Cá nhân <span>Chỉ mình tôi thấy</span></span>
                        </label>
                        <label class="radio-lbl">
                        <input checked id="RecipeAccessSpecifier" type="radio" value="Public"><span></span>
                            <span class="radio-lbl__option">Chia sẻ <span>Bất kỳ ai đều có thể thấy bài viết</span></span>
                        </label>                    
                        <label class="radio-lbl">
                        Chú ý : Bạn có thể thay đổi thiết lập quyền riêng tư bài viết của bạn vào thời gian bất kỳ.
                        </label>
                    </li>                                    
                    <li>
                        <div>
                            <input type="submit" class="btns-two-small btn-gold" value="Lưu công thức">
                            <a href="/cook/my/" class="btns-two-small" target="_self">Hủy</a>
                        </div>
                    </li>
                </ul>
            </section>
        </form>
    </div>
</section>
@stop

@section('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(function() {
    $('.create-recipe_item_box').hover(function() {        
        $(this).find('.create-recipe_item_box_photos').fadeIn('slow');
    }, function(){        
        $(this).find('.create-recipe_item_box_photos').fadeOut('slow');
    })
})

</script>
@stop