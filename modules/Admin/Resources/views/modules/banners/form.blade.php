<?php $form = new Form($errors); ?>
{{ $form->beginForm([$routeName, $routeParam]) }}
    {{ $form->groupText('Title', 'ban_title', 'ban_title', true) }}
    {{ $form->groupText('Link', 'ban_link', 'ban_link', true) }}
    {{ $form->groupFile('Picture', 'ban_picture', 'ban_picture', true) }}
    {{ $form->groupSelect('Target', 'ban_target', 'ban_target', false) }}
    {{ $form->groupText('Type', 'ban_type', 'ban_type') }}
    {{ $form->groupText('Position', 'ban_position', 'ban_position') }}
    {{ $form->groupText('Thứ tự', 'ban_order', 'ban_order') }}
    {{ $form->groupText('Trạng thái', 'ban_status', 'ban_status') }}
    {{ $form->groupTextArea('Mô tả', 'ban_description', 'ban_description', false) }}
    {{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}
