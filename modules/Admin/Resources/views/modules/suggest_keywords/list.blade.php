@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'admincpp.getListSuggestKeyword' => 'Danh sách keyword suggest',
    ]) !!}
    @php
        $dataGrid = new DataGrid();
        $stt      = $dataGrid->getPageStt($suggestKeywords);
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header">
                    {{ header_title_action('Danh sách keyword', 'admincpp.getAddSuggestKeyword') }}
                    {{ $dataGrid->beginFormSearch('admincpp.getListSuggestKeyword') }}
                    {{ $dataGrid->labelSearch('Tên từ khóa', 'suk_name') }}
                    {{ $dataGrid->labelSearch('Vị trí', 'suk_position', ARR, $configPosition) }}
                    {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content">
                    <table class="table table-bordered" id="tableList">
                        <thead>
                        <tr>
                            <td width="4%" align="center">Stt</td>
                            <td width="4%" align="center">ID</td>
                            <td>Tên từ khóa</td>
                            <td>Đường dẫn</td>
                            <td width="3%" align="center">Icon</td>
                            <td width="13%" align="center">Vị trí</td>
                            <td width="3%" align="center">Sắp xếp</td>
                            <td width="10%" align="center">Cửa sổ</td>
                            <td width="5%" align="center">Trạng thái</td>
                            <td width="5%" align="center">Admin</td>
                            <td colspan="2" width="5%" align="center">Action</td>
                        </tr>
                        </thead>
                        <tbody id="tableContent">
                        @foreach($suggestKeywords as $item)
                            @php $dataGrid->setPrimaryKey($item->suk_id) @endphp
                            <tr>
                                <td align="center">{{ $stt ++ }}</td>
                                <td>{{ $item->suk_id }}</td>
                                <td>{{ $item->suk_name }}</td>
                                <td><a href="/{{ $item->suk_link }}" target="_blank" title="Xem"><u>{{ $item->suk_link }}</u></a></td>
                                <td align="center">{{ $item->suk_icon }}</td>
                                <td>{{ $configPosition[$item->suk_position] }}</td>
                                <td>{{ $item->suk_order }}</td>
                                <td align="center">{{ $configTarget[$item->suk_target] }}</td>
                                {{ $dataGrid->makeCheckButton('admincpp.getListSuggestKeyword', ['suk_status', $item]) }}
                                <td align="center">{{ $item->admins->adm_name }}</td>
                                {{ $dataGrid->makeEditButton('admincpp.getEditSuggestKeyword') }}
                                {{ $dataGrid->makeDeleteButton('admincpp.getDeleteSuggestKeyword') }}
                            </tr>
                        @endforeach
                        </tbody>
                        {{ $dataGrid->getTemplateFooter($suggestKeywords) }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop