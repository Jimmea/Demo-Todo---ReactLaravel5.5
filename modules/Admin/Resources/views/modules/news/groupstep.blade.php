<?php
    $step    = isset($step) ? $step : 1 ;
    $picture = (isset($new) && isset($new->new_directions) && isset($item->picture)) ?  $item->picture : '';
    $title   = (isset($new) && isset($new->new_directions) && isset($item->title))   ?  $item->title : '';
?>
<div class="form-group form-group-step" data-id="{{ $step }}" id="step-{{ $step }}">
    <input type="text" name="new__step_picure[]" placeholder="Đường dẫn hình ảnh với bước làm..." value="{{ $picture }}" class="new__step_picure form-control">
    <div class="control-label-header">
        <label class="label label-warning label-step label-step-{{ $step }}">{{ $step }}</label>
        <label class="label label-upload" for="new_step_picure{{ $step }}" title="click tải hình ảnh minh họa"><i class="fa fa-camera"></i></label>
        @if($step > 1)
        <label class="label label-warning label-action label-delete" title="Xóa"><i class="fa fa-trash-o"></i></label>
        @endif
    </div>
    <div class="form-control-content">
        <div class="media_img_prev">
            <div class="step_img img">
                <img src="{{ $picture ? $picture : '/assets/img_pre.jpg' }}" id="step_img_placeholder{{ $step }}" class="{{ !$picture ? 'hidden' : '' }} img-responsive step_img_placeholder"/>
                <input type="file" name="new_step_picture[]" accept="image/*" class="hidden new_step_picure" id="new_step_picure{{ $step }}"/>
                <div class="image__button editor_tool_step">
                    <label class="image_upload" title="Sửa ảnh" for="new_step_picure{{ $step }}"><i class="fa fa-camera"></i></label>
                    <label class="button_delete" title="Xóa ảnh"><i class="fa fa-trash-o"></i></label>
                </div>
            </div>
        </div>
        <div class="media_body_prose">
            <textarea class="form-control form-control-auto" name="new_step_title[]" placeholder="Mô tả cách làm từng bước ..." id="form-control-{{ $step }}" cols="30" rows="3">{{ $title }}</textarea>
        </div>
    </div>
</div>
