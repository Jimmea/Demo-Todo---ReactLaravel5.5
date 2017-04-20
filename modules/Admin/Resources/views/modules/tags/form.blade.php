@php $form = new Form($errors, $tag) @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
{{ $form->groupText('Tag name', 'tag_name', 'tag_name', true, ['div' => 'col-md-5']) }}
{{ $form->groupSelect('Danh mục', 'tag_category_id', 'tag_category_id', false, $categories, ['cate_id', 'cate_name'], true, ['div'=> 'col-md-5']) }}
<input type="hidden" name="tag_active" value="1">
{{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}