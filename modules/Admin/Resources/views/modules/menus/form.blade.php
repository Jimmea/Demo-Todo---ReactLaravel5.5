<?php $form = new Form($errors, $menu); ?>
{{ $form->beginForm([$routeName, $id]) }} 
    {{ $form->groupSelect('Menu position', 'mnu_position', 'mnu_position', false, $configPosition) }} 
    {{ $form->groupText('Menu name', 'mnu_name', 'mnu_name', true) }} 
    {{ $form->groupTextAddon('Link', 'mnu_link', 'mnu_link', false,array(),  array('span' => 'make_link', 'i'=> 'fa fa-share-alt')) }} 
    {{ $form->groupSelect('Upper menu', 'mnu_parent_id', 'mnu_parent_id', false, $menus, array('mnu_id', 'mnu_name'), true) }} 
    {{ $form->groupSelect('Target', 'mnu_target', 'mnu_target', false, $configTarget) }} 
    {{ $form->groupFile('Icon', 'mnu_icon', 'mnu_icon') }}
    {{ $form->groupFile('Ảnh đại diện', 'mnu_picture', 'mnu_picture') }}
    {{ $form->groupText('Set Order', 'mnu_order', 'mnu_order', false, ['div'=> 'col-md-2']) }}
    {{ $form->groupSubmitReset() }} 
{{ $form->closeForm() }} 

{{--<a class="btn btn-primary" data-toggle="modal" href="#modal-id">Trigger modal</a>--}}
{{--<div class="modal fade" id="modal-id">--}}
	{{--<div class="modal-dialog">--}}
		{{--<div class="modal-content">--}}
			{{--<div class="modal-header">--}}
				{{--<button type="button" class="close" data-dismiss="modal">Đóng cửa sổ</button>--}}
				{{--<h4 class="modal-title">Tạo liên kết</h4>--}}
			{{--</div>--}}
			{{--<div class="modal-body">--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
{{--</div>--}}