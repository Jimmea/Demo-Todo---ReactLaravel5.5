@php $form = new Form($errors, $banner); @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
    <div class="col-md-6">
        {{ $form->groupText('Tiêu đề', 'ban_title', 'ban_title', true) }}
        {{ $form->groupText('Đường dẫn', 'ban_link', 'ban_link') }}
        {{ $form->groupFile('Picture', 'ban_picture', 'ban_picture', true) }}
        {{ $form->groupSelect('Target', 'ban_target', 'ban_target', false, $defaultTarget) }}
        {{ $form->groupText('Position', 'ban_position', 'ban_position') }}
        {{--{{ $form->groupText('Type', 'ban_type', 'ban_type') }}--}}
    </div>
    <div class="col-md-6">
        {{ $form->groupText('Thứ tự', 'ban_order', 'ban_order') }}
        {{ $form->groupSelect('Trạng thái', 'ban_status', 'ban_status', false, $defaultStatus) }}
        {{ $form->groupText('Date start', 'ban_start_date', 'ban_start_date', false, ['input'=> 'date_picker']) }}
        {{ $form->groupText('Date end', 'ban_end_date', 'ban_end_date', false, ['input'=> 'date_picker']) }}
        {{ $form->groupTextArea('Mô tả', 'ban_description', 'ban_description', false) }}
    </div>
    {{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}