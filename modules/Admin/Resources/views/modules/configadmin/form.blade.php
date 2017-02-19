<?php $form = new Form($errors, $module); ?>
{{ $form->beginForm([$nameRoute, $paramRoute]) }}
    {{ $form->groupText('Tên module', 'mod_name', 'mod_name', true, ['div'=> 'col-md-5']) }}
    {{ $form->groupText('Tiêu đề', 'mod_listname', 'mod_listname', true, ['div'=> 'col-md-5']) }}
    {{ $form->groupText('Tên router', 'mod_listrouter', 'mod_listrouter', true, ['div'=> 'col-md-5']) }}
    {{ $form->groupFile('Icon', 'mod_icon', 'mod_icon',false,  ['div'=> 'col-md-5']) }}
    {{ $form->groupText('Thứ tự', 'mod_order', 'mod_order', false, ['div'=> 'col-md-2']) }}
    {{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}