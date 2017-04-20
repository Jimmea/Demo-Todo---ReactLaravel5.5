@php $form = new Form($errors, $suggestKeyword) @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
{{ $form->groupText('Tên từ khóa', 'suk_name', 'suk_name', true, ['div'=> 'col-md-6']) }}
{{ $form->groupText('Đường dẫn', 'suk_link', 'suk_link', true, ['div'=> 'col-md-6']) }}
{{ $form->groupText('Màu chữ', 'suk_color', 'suk_color', false, ['input'=> 'colorpicker']) }}
{{ $form->groupText('Icon', 'suk_icon', 'suk_icon', false, ['div'=> 'col-md-3']) }}
{{ $form->groupSelect('Vị trí hiển thị', 'suk_position', 'suk_position', false, $configPosition,[],false, ['div'=> 'col-md-4']) }}
{{ $form->groupText('Số thứ tự', 'suk_order', 'suk_order', false, ['div'=> 'col-md-6']) }}
{{ $form->groupSelect('Mở ra', 'suk_target', 'suk_target', false, $configTarget,[], false, ['div'=> 'col-md-6']) }}
{{ $form->groupSelect('Trạng thái', 'suk_status', 'suk_status', false, $configStatus,[], false, ['div'=> 'col-md-6']) }}
{{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}