@php $form = new Form($errors, $banner); @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
    {{ $form->groupText('Tiêu đề', 'ban_title', 'ban_title', true, ['div'=>'col-md-6']) }}
    {{ $form->groupText('Đường dẫn', 'ban_link', 'ban_link', false, ['div'=>'col-md-6']) }}
    {{ $form->groupFile('Picture', 'ban_picture', 'ban_picture', true, ['div'=>'col-md-6']) }}
    {{ $form->groupSelect('Target', 'ban_target', 'ban_target', false, $defaultTarget,array(), false, ['div'=>'col-md-6']) }}
    {{ $form->groupText('Position', 'ban_position', 'ban_position', false, ['div'=>'col-md-6']) }}
    {{--{{ $form->groupText('Type', 'ban_type', 'ban_type') }}--}}

    {{ $form->groupText('Thứ tự', 'ban_order', 'ban_order', false, ['div'=>'col-md-6']) }}
    {{ $form->groupSelect('Trạng thái', 'ban_status', 'ban_status', false, $defaultStatus, array(), false, ['div'=>'col-md-6']) }}
    {{ $form->groupDate('Date start', 'ban_start_date', 'ban_start_date', false, ['input'=> 'date_picker','div'=>'col-md-6']) }}
    {{ $form->groupDate('Date end', 'ban_end_date', 'ban_end_date', false, ['input'=> 'date_picker','div'=>'col-md-6']) }}
    {{ $form->groupTextArea('Mô tả', 'ban_description', 'ban_description', false, ['div'=>'col-md-6']) }}
    {{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}