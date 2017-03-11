@php $form = new Form($errors, $categoryBanner); @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
    <div class="form-group">
        <label for="" class="col-md-2 control-label">Danh mục hoạt động</label>
        <div class="col-md-10"><input type="text" class="form-control" disabled value="{{ $category->cate_name }}" readonly></div>
        <input type="hidden" name="bac_category_id" value="{{ $category->cate_id }}">
    </div>
    {{ $form->groupText('Tiêu đề', 'bac_title', 'bac_title', true) }}
    {{ $form->groupText('Đường dẫn', 'bac_link', 'bac_link', true) }}
    {{ $form->groupText('Picture', 'bac_picture', 'bac_picture', true) }}
    {{ $form->groupSelect('Target', 'bac_target', 'bac_target', false, $configTarget) }}
    {{ $form->groupText('Position', 'bac_position', 'bac_position') }}
    {{ $form->groupText('Thứ tự', 'bac_order', 'bac_order') }}
    {{ $form->groupSelect('Trạng thái', 'bac_status', 'bac_status', false, $configStatus) }}
    {{ $form->groupDate('Date start', 'bac_start_date', 'bac_start_date') }}
    {{ $form->groupDate('Date end', 'bac_end_date', 'bac_end_date') }}
    {{ $form->groupTextArea('Mô tả', 'bac_description', 'bac_description') }}
{{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}