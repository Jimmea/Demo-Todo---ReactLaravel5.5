{{ $dataGrid->beginFormSearch() }}
{{ $dataGrid->labelSearch('Bài viết id', 'new_id', 'number') }}
{{ $dataGrid->labelSearch('Tên Tiêu đề', 'new_title', 'text') }}
{{ $dataGrid->labelSearch('Danh mục ', 'new_cate_id', 'array', $categories, ['cate_id', 'cate_name']) }}
{{ $dataGrid->labelSearch('Kiểu bài', 'new_type', 'array', $newTypes) }}
{{ $dataGrid->labelSearch('Admin id','new_admin_id','number') }}
{{ $dataGrid->labelSearch('Danh mục event', 'evc_category_id', 'array', $eventCategories, ['cate_id', 'cate_name']) }}
{{ $dataGrid->closeForm() }}