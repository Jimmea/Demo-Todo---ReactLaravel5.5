@extends('admin::layouts.master')
@section('content')
{!! bread_crumb([
    'admincpp.getListNew' => 'Danh sách bài viết'
]) !!}
    @php
        $dataGrid = new DataGrid();
        $stt      = $news->perPage()*($news->currentPage() - 1);
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {{ header_title_action('Danh sách bài viết', 'admincpp.getAddNew') }}
                    @include(ADMIN_VIEW .'news.inc_search')
                    <hr>
                    <div class="header-trashed">
                        <a href="{{ route('admincpp.getListTrashNew') }}" class="btn btn-info btn-sm" title="Xem toàn bộ"><i class="icon-trash"></i> Tổng có <b>{{ $totalNewTrash }}</b> Tin rác </a>
                        <a href="{{ route('admincpp.getListTrashNew') }}" class="btn btn-warning btn-sm" title="Xem toàn bộ"><i class="icon-trash"></i> Hôm nay có <b>{{ $totalNewTrashToday }}</b> Tin rác </a>
                    </div>
                </div>
                <div class="white-box-content">
                    <table class="table table-stripped" id="dataTableList">
                        <thead>
                            <tr>
                                {!! $dataGrid->makeCheckAllRadio() !!}
                                <td class="bold" width="4%" align="center">Stt</td>
                                <td class="bold" width="4%" align="center">ID</td>
                                <td class="bold" width="8%" align="center">Picture</td>
                                <td class="bold" align="center">Thông tin cơ bản</td>
                                <td class="bold" align="center">Danh mục</td>
                                <td class="bold" width="14%" align="center">User | Admin</td>
                                <td class="bold" width="7%" align="center">Kiểu bài</td>
                                <td class="bold" width="7%" align="center">Trạng thái</td>
                                <td class="bold" width="8%" align="center" colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody id="tableContent">
                            @foreach($news as $value)
                            @php $dataGrid->setPrimaryKey($value->new_id) @endphp
                            <tr id="tr_{{ $value->new_id}}">
                                {!! $dataGrid->makeCheckRadio() !!}
                                <td align="center">{{ ++$stt }}</td>
                                <td align="center">{{ $value->new_id }}</td>
                                <td><img src="{{ $value->new_picture }}"  class="img-responsive img9070" alt=""></td>
                                <td>
                                    <div>Tiêu đề    : <a title="{{ $value->new_status ? 'Xem ngay' : 'Bài viết đăng ở chế độ ẩn' }}" href="/{{ $value->new_slug }}">{{ ucfirst($value->new_title) }}</a></div>
                                    <div>Pre time   : {{ $value->new_pre_time or '0' }} minutes</div>
                                    <div>Cook time  : {{ $value->new_cook_time or '0' }} minutes</div>
                                </td>
                                <td align="center">{{ $value->categories->cate_name }}</td>
                                <td align="center">
                                    {{ $value->admins->adm_name }} | {{ $value->admins->adm_name }}
                                </td>
                                <td align="center">{{ $newTypes[$value->new_type] }}</td>
                                {!! $dataGrid->makeCheckButton('admincpp.getListNew', ['new_status', $value]) !!}
                                {!! $dataGrid->makeEditButton('admincpp.getEditNew') !!}
                                {!! $dataGrid->makeDeleteButton('admincpp.getDeleteNew') !!}
                            </tr>
                            @endforeach
                        </tbody>
                        {!! $dataGrid->makeUrlDelete('admincpp.getDeleteNew')  !!}
                        {{ $dataGrid->getTemplateFooter($news) }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop