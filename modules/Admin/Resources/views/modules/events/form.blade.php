<div class="col-md-7">
@php $form = new Form($errors) @endphp
    {{ $form->beginForm([$routeName, $routeParam]) }}
    {{ $form->groupText('Tên event', 'evn_name', 'event_name', true) }}
    {{ $form->groupTextArea('Mô tả ngắn', 'evn_teaser', 'evn_teaser') }}
    {{ $form->groupSelectMul('Danh mục', 'evn_category_id[]', 'select2', true, $categories, ['cate_id', 'cate_name']) }}
    {{ $form->groupSubmitReset() }}
    {{ $form->closeForm() }}
<div class="clearfix"></div>
</div>