{{ $dataGrid->beginFormSearch() }}
{{ $dataGrid->labelSearch('Bài viết id', 'new_id', NUMBER) }}
{{ $dataGrid->labelSearch('Tên Tiêu đề', 'new_title', TEXT) }}
{{ $dataGrid->labelSearch('Danh mục ', 'new_cate_id', ARR, $categories, ['cate_id', 'cate_name']) }}
{{ $dataGrid->labelSearch('Kiểu bài', 'new_type', ARR, $newTypes) }}
{{ $dataGrid->labelSearch('Admin id','new_admin_id',NUMBER) }}
{{ $dataGrid->closeForm() }}