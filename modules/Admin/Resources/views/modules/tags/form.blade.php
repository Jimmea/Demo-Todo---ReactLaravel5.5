@php $form = new Form($errors, $tag) @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
{{ $form->groupText('Tag name', 'tag_name', 'tag_name', true, ['div' => 'col-md-5']) }}
<input type="hidden" name="tag_active" value="1">
{{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}