/**
 * Created by hung on 26/02/17.
 */
var formSessionStorage = function () {
    'use strict';

    var stepDefault          = 2;
    var clicked              = false;
    var imgPlaceholder       = '/assets/img_pre.jpg';
    var formListGroup        = $('#form-list-group');
    var dataRecipe           = JSON.parse(sessionStorage.getItem('dataRecipe'));
    // Config url
    var urlAddStep           = BASE_URL + '/new/add-step';
    var urlDeleteFile        = BASE_URL + '/files/delete';
    var urlUploadAvatar      = BASE_URL + '/files/upload';
    // Đếm độ dài đối tượng
    var countObjectLength = function (data)
    {
        return Object.keys(data).length;
    }

    var stepHtmlDefault = function ($id, $value, $src)
    {
        var html  = '<div class="form-group form-group-step" data-id="' + $id + '" id="step-' + $id + '">';
                html += '<input type="hidden" name="new__step_picure[]" value="' + $src + '" class="hidden new__step_picure">';
                html += '<div class="control-label-header">';
                    html += '<label class="label label-warning label-step label-step-' + $id + '">' + $id + '</label>';
                    html += '<label class="label label-upload" for="new_step_picure' + $id + '" title="click tải hình ảnh minh họa"><i class="fa fa-camera"></i></label>';
                    if($id != 1) html += '<label class="label label-warning label-action label-delete" title="Xóa"><i class="fa fa-trash-o"></i></label>';
                    html += '</div>';
                html += '<div class="form-control-content">';
                    html += '<div class="media_img_prev">';
                        html += '<div class="step_img img">';
                            html += '<img src="' + ($src ? $src : imgPlaceholder)  +'" id="step_img_placeholder' + $id + '" class="' + ($src ? $src : 'hidden')  +' img-responsive step_img_placeholder"/>';
                            html += '<input type="file" name="new_step_picture[]" accept="image/*" class="hidden new_step_picure" id="new_step_picure' + $id + '"/>';
                            html += '<div class="image__button editor_tool_step">';
                                html += '<label class="image_upload" title="Sửa ảnh" for="new_step_picure' + $id + '"><i class="fa fa-camera"></i></label>';
                                html += '<label class="button_delete_step" title="Xóa ảnh"><i class="fa fa-trash-o"></i></label>';
                            html += '</div>';
                        html += '</div>';
                    html += '</div>';
                    html += '<div class="media_body_prose">';
                    html += '<textarea class="form-control form-control-auto" name="new_step_title[]" placeholder="Mô tả cách làm từng bước ..." id="form-control-' + $id + '" cols="30" rows="3">' + $value + '</textarea>';
                    html += '</div>';
                html += '</div>';
             html += '</div>';
        return html;
    }

    // Khoi tao gia tri dau cho sesionStorage
    var getFirstStepMethod = function ()
    {
        dataRecipe =
        {
            avatar      : '',
            ingredient  : '',
            title       : '',
            description : '',
            time_pre    : '',
            time_cook   : '',
            youtobe_cod : '',
            people      : '',
            methods     : {}
        };
        dataRecipe.methods[1] =
        {
            id : 1,
            value : '',
            image : ''
        };
        storeDataRecipe();
    }

    // Add thêm một bước vào trong công th
    var addStepMethod = function ()
    {
        $('.button_add_step').click(function (e)
        {
            e.preventDefault();
            if(clicked) { alert('The system is processing... Please wait'); return '';}

            // Check group ton tai thi step nhay vao day
            stepDefault  = ($('.form-group-step').length > 0) ? $('.form-group-step').length + 1 : stepDefault;
            clicked      = true;

            $.ajax({
                url : urlAddStep,
                type : 'POST',
                dataType : 'json',
                data : { step : stepDefault }
            }).success(function (response)
            {
                if (response.code && response.message == 'success')
                {
                    // Append to list form group method and save into sessionStorage
                    formListGroup.append(response.groupstep);
                    if (typeof(Storage) !== "undefined")
                    {
                        if (sessionStorageAllow)
                        {
                            dataRecipe.methods[response.s] =
                                {
                                    id      : response.s,
                                    value   : '',
                                    image   : ''
                                };
                            storeDataRecipe();
                        }
                    }
                    // else
                    // {
                    //     // Trình duyệt không hỗ trợ Local storage.
                    //     alert('Rất tiếc, trình duyệt của bạn không hỗ trợ local storage...');
                    // }
                }
            }).error(function (e)
            {
                alert("Something went wrong . We couldn't add. Please try reload your browser");
            }).always(function ()
            {
                stepDefault ++;
                clicked = false;
            });
        });
    }

    // Upload hinh anh avatar cua recipe
    var uploadAvatarRecipe = function ()
    {
        $('#new_picture_face').change(function (e)
        {
            var files   = e.target.files;
            var path    = $('#avatar_show_image').attr('src');
            var data    = new FormData();
            if (clicked)
            {
                alert('Hệ thống đang xử lý. Vui lòng đợi ...');
                return ;
            }

            clicked = true;
            $.each(files, function(key, value) { data.append(key, value); });
            data.append('src', path);
            if (files.length >0)
            {
                $.ajax({
                    url: urlUploadAvatar,
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    processData: false,
                    contentType: false
                })
                .success(function(response)
                {
                    if(response.status == 1)
                    {
                        $('.recipe_image_default').hide();
                        $('.recipe_show_image').removeClass('hidden');
                        $('#avatar_show_image').attr('src', response.msg);
                        $('#new_picture').val(response.msg);
                        if (sessionStorageAllow)
                        {
                            dataRecipe.avatar = response.msg;
                            storeDataRecipe();
                        }
                    }
                    else
                    {
                        alert(response.msg);
                    }
                }).error(function (e)
                {
                    alert("Có lỗi xảy ra. Vui lòng load lại trang ...");
                }).always(function ()
                {
                    clicked = false;
                });
            }
        });
    }

    // Xóa hình ảnh avatar của recipe
    var deleteAvatarRecipe = function ()
    {
        $('.button_delete').click(function () {
            var path = $('#avatar_show_image').attr('src');
            $.ajax({
                url: urlDeleteFile,
                type: 'POST',
                data: {
                    src     : path
                },
                dataType: 'json',
                success: function(response)
                {
                    if(response.status == 1)
                    {
                        $('.recipe_image_default').show().removeClass('hidden');
                        $('.recipe_show_image').addClass('hidden');
                        $('#new_picture').val('');
                        if (sessionStorageAllow)
                        {
                            dataRecipe.avatar = '';
                            storeDataRecipe();
                        }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    console.log('ERRORS: ' + textStatus);
                }
            });
        })
    }

    // Upload avatar step method
    var uploadAvatarStepMethod = function ()
    {
        $(document).on('change', '.new_step_picure', function (e)
        {
            var files           = e.target.files;
            var parentGroupStep = $(this).closest('.form-group-step');
            var stepId          = parentGroupStep.attr('data-id');
            var stepImage       = $('#step_img_placeholder'+stepId);
            var stepImagePath   = stepImage.attr('src');
            var newStepPicure   = parentGroupStep.children('.new__step_picure');

            if (clicked)
            {
                alert('Hệ thống đang xử lý. Vui lòng đợi ...');
                return ;
            }

            clicked = true;
            var data            = new FormData();
            $.each(files, function(key, value) { data.append(key, value) });
            if (stepImagePath != imgPlaceholder) { data.append('src', stepImagePath)}

            if(files.length >0)
            {
                $.ajax({
                    url: urlUploadAvatar,
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(response)
                    {
                        if(response.status == 1)
                        {
                            stepImage.removeClass('hidden');
                            stepImage.attr('src', response.msg);
                            newStepPicure.val(response.msg);
                            if (sessionStorageAllow)
                            {
                                dataRecipe.methods[stepId]['image'] = response.msg;
                                storeDataRecipe();
                            }
                        }
                        else
                        {
                            alert(response.msg);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        console.log('ERRORS: ' + textStatus);
                    }
                }).always(function ()
                {
                    clicked = false;
                });
            }
        })
    }

    // Delete avatar cua a step in method
    var deleteAvatarStepMethod = function ()
    {
        $(document).on('click', '.button_delete', function ()
        {
            var parentGroupStep = $(this).closest('.form-group-step');
            var stepId          = parentGroupStep.attr('data-id');
            var stepImage       = $('#step_img_placeholder'+stepId);
            var stepImagePath   = stepImage.attr('src');
            var newStepPicure   = parentGroupStep.children('.new__step_picure');

            $.ajax({
                url: urlDeleteFile,
                type: 'POST',
                data: {
                    src : stepImagePath
                },
                dataType: 'json',
                success: function(response)
                {
                    if(response.status == 1)
                    {
                        stepImage.attr('src', imgPlaceholder);
                        stepImage.addClass('hidden');
                        newStepPicure.val('');
                        if (sessionStorageAllow)
                        {
                            dataRecipe.methods[stepId]['image'] = '';
                            storeDataRecipe();
                        }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    console.log('ERRORS: ' + textStatus);
                }
            });
        })
    }

    // Delete a step method
    var deleteStepMethod = function ()
    {
        $(document).on('click', '.label-delete', function ()
        {
            if (confirm('Bạn có chắc chắn muốn xóa'))
            {
                var formGroupStep       = $(this).closest('.form-group-step');
                var formGroupId         = formGroupStep.attr('data-id');
                formGroupStep.remove();
                if (sessionStorageAllow)
                {
                    var listGroupStep       = dataRecipe.methods;
                    var lengthListGroupStep = countObjectLength(listGroupStep);
                    // Xoa o sessionStorage va Browser
                    for(var i =1; i <= lengthListGroupStep; i++)
                    {
                        if(listGroupStep[i].id == formGroupId)
                        {
                            if (listGroupStep[i].image != imgPlaceholder)
                            {
                                $.ajax({
                                    url: urlDeleteFile,
                                    type: 'POST',
                                    data: {
                                        src  : listGroupStep[i].image
                                    },
                                    dataType: 'json',
                                    success: function(response)
                                    {
                                        console.log(response);
                                    },
                                    error: function(jqXHR, textStatus, errorThrown)
                                    {
                                        console.log('ERRORS: ' + textStatus);
                                    }
                                });
                            }
                            delete listGroupStep[i];
                            formGroupStep.remove();
                        }
                    }
                    // Reset lai thong tin
                    resetFormListGroupMethod(listGroupStep);
                }else
                {
                    var formGroupStep   = $('.form-group-step');
                    var stt             = formGroupId;
                    $.each(formGroupStep, function ()
                    {
                        // reset tat ca cac id nao nho hon
                        var id = $(this).attr('data-id');
                        if (formGroupId <= id)
                        {
                            $(this).attr('id', 'step-'+stt);
                            $(this).attr('data-id', stt);
                            $(this).find('.image_upload').attr('for', 'new_step_picure'+stt);
                            $(this).find('.label-upload').attr('for', 'new_step_picure'+stt);
                            $(this).find('.step_img_placeholder').attr('id', 'step_img_placeholder'+stt);
                            $(this).find('.new_step_picure').attr('id', 'new_step_picure'+stt);
                            $(this).find('.label-step-'+id).text(stt).addClass('label-step-'+stt).removeClass('label-step-'+id);
                            stt ++;
                        }
                    })
                }
            }
        });
    }

    // Reset toan bo thong tin cua recipe;
    var resetFormListGroupMethod = function (listGroupStep)
    {
        var items = {};
        var stt   = 1;
        var html  =  '';
        $.each(listGroupStep, function (index, item)
        {
            items[stt] =
            {
                id   : stt,
                value:item.value,
                image: item.image
            };
            html += stepHtmlDefault(stt, item.value, item.image);
            stt ++;
        });

        dataRecipe.methods = items;
        storeDataRecipe();
        formListGroup.html(html);
    }

    // Luu lai thong tin toan bo cua form cong thuc
    var storeDataRecipe = function ()
    {
        if (sessionStorageAllow)
        {
            sessionStorage.setItem('dataRecipe', JSON.stringify(dataRecipe));
        }
    }

    // Tư dong save thong tin khi nhap input textarea
    var autoSaveForm = function ()
    {
        if (sessionStorageAllow)
        {
            $(document).on('input', '.form-control-auto', function ()
            {
                var value       = $(this).val();
                var stepId      = $(this).closest('.form-group-step').attr('data-id');
                var src         = $('#step_img_placeholder' + stepId).attr('src');

                if (src == imgPlaceholder) src = '';
                // Kiem tra su ton tai cua group nay co trong sesionStorage
                if (dataRecipe && stepId)
                {
                    dataRecipe.methods[stepId]['value'] = value;
                    storeDataRecipe();
                }
            });

            $('#new_description').keyup(function ()
            {
                dataRecipe.description = $(this).val();
                storeDataRecipe();
            });

            $('#new_ingredient').keyup(function ()
            {
                var value = preg_split("/(\r\n|\n|\r)/", $(this).val());
                dataRecipe.ingredient = value;
                storeDataRecipe();
            });

            $('#new_title').keyup(function ()
            {
                dataRecipe.title = $(this).val();
                storeDataRecipe();
            });
        }
    }

    // Init browser
    var autoloadFormRecipe = function ()
    {
        if(sessionStorageAllow)
        {
            if (!dataRecipe) getFirstStepMethod();
            var listMethods  = dataRecipe.methods;
            var avatarRecipe = dataRecipe.avatar;
            var description  = dataRecipe.description;
            var ingredient   = dataRecipe.ingredient;
            var title        = dataRecipe.title;

            if (description) $('#new_description').val(description);
            if (ingredient) $('#new_ingredient').val(ingredient);
            if (title) $('#new_title').val(title);

            // Show ra hinh anh cho file avatar
            if (avatarRecipe)
            {
                $('.recipe_image_default').addClass('hidden');
                $('.recipe_show_image').removeClass('hidden');
                $('#avatar_show_image').attr('src', avatarRecipe);
                $('#new_picture').val(avatarRecipe);
            }

            // Show list buoc thuc hien ra
            if (listMethods)
            {
                var html     = '';
                $.each(listMethods, function (i, item)
                {
                    if (item && i)
                    {
                        if (item) html += stepHtmlDefault(item.id, item.value, item.image);
                    }
                });
                formListGroup.html(html);
            }
        }
    }

    return {
        init : function ()
        {
            autoSaveForm();
            autoloadFormRecipe();
            addStepMethod();
            uploadAvatarRecipe();
            deleteAvatarRecipe();
            deleteStepMethod();
            uploadAvatarStepMethod();
            deleteAvatarStepMethod();
        }
    }
}();
$(document).ready(function ()
{
    formSessionStorage.init();
});


