<?php $form = new Form($errors, $menu); ?>
{!! $form->beginForm([$routeName, $id]) !!}
    {!! $form->groupSelect('Menu position', 'mnu_position', 'mnu_position', false, $configPosition) !!}
    {!! $form->groupText('Menu name', 'mnu_name', 'mnu_name', true) !!}
    {!! $form->groupText('Link', 'mnu_link', 'mnu_link', false, array('before', 'after')) !!}
    {!! $form->groupSelect('Upper menu', 'mnu_parent_id', 'mnu_parent_id', false, $menus, array('mnu_id', 'mnu_name'), true) !!}
    {!! $form->groupSelect('Target', 'mnu_target', 'mnu_target', false, $configTarget) !!}
    {!! $form->groupFile('Icon', 'mnu_icon', 'mnu_icon') !!}
    {!! $form->groupFile('Ảnh đại diện', 'mnu_picture', 'mnu_picture') !!}
    {!! $form->groupText('Set Order', 'mnu_order', 'mnu_order') !!}
    {!! $form->groupSubmitReset() !!}
{!! $form->closeForm() !!}