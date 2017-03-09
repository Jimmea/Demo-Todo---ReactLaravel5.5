@extends('admin::layouts.master')
@section('content')
{!! bread_crumb([
    'admincpp.getListNew' => 'Danh sách bài viết'
]) !!}
    @php
        $dataGrid = new DataGrid();
        $dataGrid->setDeleteAll(false);
        $stt      = $news->perPage()*($news->currentPage() - 1);
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {{ header_title_action('Danh sách bài viết', 'admincpp.getAddNew') }}
                    {{ $dataGrid->beginFormSearch() }}
                        {{ $dataGrid->labelSearch('Bài viết id', 'new_id', NUMBER) }}
                        {{ $dataGrid->labelSearch('Tên Tiêu đề', 'new_title', TEXT) }}
                        {{ $dataGrid->labelSearch('Danh mục ', 'new_cate_id', ARR, $categories, ['cate_id', 'cate_name']) }}
                        {{ $dataGrid->labelSearch('Kiểu bài', 'new_type', ARR, $newTypes) }}
                        {{ $dataGrid->labelSearch('Admin id','new_admin_id',NUMBER) }}
                    {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content">
                    <table class="table table-stripped" id="dataTableList">
                        <thead>
                            <tr>
                                <td class="bold" width="4%" align="center">Stt</td>
                                <td class="bold" width="4%" align="center">ID</td>
                                <td class="bold" width="8%" align="center">Picture</td>
                                <td class="bold" align="center">Thông tin cơ bản</td>
                                <td class="bold" align="center">Danh mục</td>
                                <td class="bold" width="7%" align="center">Kiểu bài</td>
                                <td class="bold" width="4%" align="center">Status</td>
                                <td class="bold" width="8%" align="center" colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody id="tableContent">
                            @foreach($news as $value)
                            @php $dataGrid->setPrimaryKey($value->new_id) @endphp
                            <tr>
                                <td align="center">{{ ++$stt }}</td>
                                <td align="center">{{ $value->new_id }}</td>
                                <td><img src="{{ $value->new_picture }}"  class="img-responsive img9070" alt=""></td>
                                <td>
                                    <div>Tiêu đề    : <a title="{{ $value->new_status ? 'Xem ngay' : 'Bài viết đăng ở chế độ ẩn' }}" href="/{{ $value->new_slug }}">{{ ucfirst($value->new_title) }}</a></div>
                                    <div>Pre time   : {{ $value->new_pre_time or '0' }} minutes</div>
                                    <div>Cook time  : {{ $value->new_cook_time or '0' }} minutes</div>
                                    <div>Admin      : {{ $value->admins->adm_name }}</div>
                                    <div>User       : {{ $value->admins->adm_name }}</div>
                                </td>
                                <td align="center">{{ $value->categories->cate_name }}</td>
                                <td align="center">{{ $newTypes[$value->new_type] }}</td>
                                {{ $dataGrid->makeCheckButton('admincpp.getListNew', ['new_status', $value]) }}
                                {{ $dataGrid->makeEditButton('admincpp.getEditNew') }}
                                {{ $dataGrid->makeDeleteButton('admincpp.getDeleteNew') }}
                            </tr>
                            @endforeach
                        </tbody>
                        {{ $dataGrid->getTemplateFooter($news) }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop