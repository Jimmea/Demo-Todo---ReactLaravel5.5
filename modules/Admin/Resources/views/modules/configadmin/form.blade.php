<?php $form = new Form($errors); ?>
{{ $form->beginForm([$nameRoute, $paramRoute]) }}
    {{ $form->groupText('Tên module', 'mod_name', 'mod_name', true) }}
    {{ $form->groupText('Tiêu đề', 'mod_listname', 'mod_listname', true) }}
    {{ $form->groupText('Tên router', 'mod_listrouter', 'mod_listrouter', true) }}
    {{ $form->groupFile('Icon', 'mod_icon', 'mod_icon') }}
    {{ $form->groupText('Thứ tự', 'mod_order', 'mod_order', false, ['div'=> 'col-md-1']) }}
    {{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}