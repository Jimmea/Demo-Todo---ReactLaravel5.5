<div class="col-md-8">
@php $form = new Form($errors, $event) @endphp
    {{ $form->beginForm([$routeName, $routeParam]) }}
    {{ $form->groupText('Tên event', 'evn_name', 'event_name', true) }}
    {{ $form->groupFile('Hình ảnh', 'evn_picture', 'evn_picture') }}
    {{ $form->groupText('Meta title', 'evn_meta_title', 'evn_meta_title') }}
    {{ $form->groupTextArea('Meta keyword', 'evn_meta_keyword', 'evn_meta_keyword') }}
    {{ $form->groupTextArea('Meta description', 'evn_meta_description', 'evn_meta_description') }}
    {{ $form->groupSelectMul('Danh mục', 'enc_category_id[]', 'select2', true, $categories, ['cate_id', 'cate_name']) }}
    {{ $form->groupSubmitReset() }}
    {{ $form->closeForm() }}
<div class="clearfix"></div>
</div>