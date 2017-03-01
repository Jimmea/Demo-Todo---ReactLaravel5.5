<?php
    $step = isset($step) ? $step : 1 ;
?>
<div class="form-group form-group-step" data-id="{{ $step }}" id="step-{{ $step }}">
    <div class="control-label-header">
        <label class="label label-warning label-step label-step-{{ $step }}">{{ $step }}</label>
        <label class="label label-upload" for="new_step_picure{{ $step }}" title="click tải hình ảnh minh họa"><i class="fa fa-camera"></i></label>
        <label class="label label-warning label-action label-delete" title="Xóa bước {{ $step }}"><i class="fa fa-trash-o"></i></label>
    </div>
    <div class="form-control-content">
        <div class="media_img_prev">
            <div class="step_img img">
                <img src="/assets/img_pre.jpg" id="step_img_placeholder{{ $step }}" class="hidden img-responsive step_img_placeholder"/>
                <input type="file" name="new_step_picture[]" accept="image/*" class="hidden new_step_picure" id="new_step_picure{{ $step }}"/>
                <div class="image__button editor_tool_step">
                    <label class="image_upload" title="Sửa ảnh" for="new_step_picure{{ $step }}"><i class="fa fa-camera"></i></label>
                    <label class="button_delete" title="Xóa ảnh"><i class="fa fa-trash-o"></i></label>
                </div>
            </div>
        </div>
        <div class="media_body_prose">
            <textarea class="form-control form-control-auto" name="" placeholder="Mô tả cách làm từng bước ..." id="form-control-{{ $step }}" cols="30" rows="3"></textarea>
        </div>
    </div>
</div>