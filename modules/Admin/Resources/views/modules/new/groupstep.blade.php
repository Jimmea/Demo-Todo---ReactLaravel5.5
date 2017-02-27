<?php
    $step = isset($step) ? $step : 1 ;
?>
<div class="form-group form-group-step" data-id="{{ $step }}" id="step-{{ $step }}">
    <div class="control-label-header">
        <label class="label label-warning label-step label-step-{{ $step }}">{{ $step }}</label>
        <label class="label label-upload"><i class="fa fa-camera"></i></label>
        {{--<label class="label label-warning label-action label-sort" title="Sắp xếp"><i class="fa fa-sort"></i></label>--}}
        <label class="label label-warning label-action label-delete" title="Xóa bước {{ $step }}"><i class="fa fa-trash-o"></i></label>
    </div>
    <div class="form-control-content">
        <textarea class="form-control form-control-auto" name="" id="form-control-{{ $step }}" cols="30" rows="3"></textarea>
    </div>
</div>