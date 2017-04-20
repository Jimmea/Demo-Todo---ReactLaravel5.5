@php $form = new Form($errors, $categoryBanner); @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
    <div class="form-group">
        <label for="" class="col-md-2 control-label">Danh mục thêm vào</label>
        <div class="col-md-10"><input type="text" class="form-control" disabled value="{{ $category->cate_name }}" readonly></div>
        <input type="hidden" name="cab_category_id" value="{{ $category->cate_id }}">
    </div>
    {{ $form->groupText('Tiêu đề', 'cab_title', 'cab_title', true) }}
    {{ $form->groupText('Đường dẫn', 'cab_link', 'cab_link', true) }}
    {{ $form->groupText('Picture', 'cab_picture', 'cab_picture', true) }}
    {{ $form->groupSelect('Target', 'cab_target', 'cab_target', false, $configTarget) }}
    {{ $form->groupText('Position', 'cab_position', 'cab_position') }}
    {{ $form->groupText('Thứ tự', 'cab_order', 'cab_order') }}
    {{ $form->groupSelect('Trạng thái', 'cab_status', 'cab_status', false, $configStatus) }}
    {{ $form->groupDate('Date start', 'cab_start_date', 'cab_start_date') }}
    {{ $form->groupDate('Date end', 'cab_end_date', 'cab_end_date') }}
    {{ $form->groupTextArea('Mô tả', 'cab_description', 'cab_description') }}
{{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}