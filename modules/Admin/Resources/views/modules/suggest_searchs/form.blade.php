@php $form = new Form($errors, $suggestSearch) @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
{{ $form->groupText('Tên từ khóa', 'sus_name', 'sus_name', true, ['div'=> 'col-md-6']) }}
{{ $form->groupText('Đường dẫn', 'sus_link', 'sus_link', true, ['div'=> 'col-md-6']) }}
{{ $form->groupText('Màu chữ', 'sus_color', 'sus_color', false, ['input'=> 'colorpicker']) }}
{{ $form->groupText('Số thứ tự', 'sus_order', 'sus_order', false, ['div'=> 'col-md-3']) }}
{{ $form->groupSelect('Hành động search', 'sus_action', 'sus_action', false, $configActionSearch,[],false, ['div'=> 'col-md-4']) }}
{{ $form->groupSelect('Trạng thái', 'sus_status', 'sus_status', false, $configStatus,[],false, ['div'=> 'col-md-4']) }}
{{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}