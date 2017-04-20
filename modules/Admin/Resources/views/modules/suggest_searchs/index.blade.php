@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'admincpp.getListSuggestSearch' => 'Danh sách suggest search',--}}
    {{--]) !!}--}}
    @php
        $dataGrid = new DataGrid();
        $dataGrid->setDeleteAll(false);
        $stt      = $dataGrid->getPageStt($suggestSearchs);
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header">
                    {{ header_title_action('Danh sách suggest search', 'admincpp.getAddSuggestSearch') }}
                    {{ $dataGrid->beginFormSearch('admincpp.getListSuggestSearch') }}
                    {{ $dataGrid->labelSearch('Tên từ khóa', 'sus_name') }}
                    {{ $dataGrid->labelSearch('Mục action', 'sus_action', ARR, $configActionSearch) }}
                    {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content">
                    <table class="table" id="tableList">
                        <thead>
                        <tr>
                            <td width="4%" align="center">Stt</td>
                            <td width="4%" align="center">ID</td>
                            <td>Tên từ khóa</td>
                            <td>Đường dẫn</td>
                            <td align="center">Hành động search</td>
                            <td width="7%" align="center">Sắp xếp</td>
                            <td width="7%" align="center">Trạng thái</td>
                            <td width="7%" align="center">Admin</td>
                            <td colspan="2" width="5%" align="center">Action</td>
                        </tr>
                        </thead>
                        <tbody id="tableContent">
                        @foreach($suggestSearchs as $item)
                            @php $dataGrid->setPrimaryKey($item->sus_id) @endphp
                            <tr>
                                <td align="center">{{ $stt ++ }}</td>
                                <td>{{ $item->sus_id }}</td>
                                <td style="">{{ $item->sus_name }}</td>
                                <td><a href="/{{ $item->sus_link }}" target="_blank" title="Xem"><u>{{ $item->sus_link }}</u></a></td>
                                <td align="center">{{ $configActionSearch[$item->sus_action] }}</td>
                                <td align="center">{{ $item->sus_order }}</td>
                                {!! $dataGrid->makeCheckButton('admincpp.getListSuggestSearch', ['sus_status', $item]) !!}
                                <td align="center">{{ $item->admins->adm_name }}</td>
                                {!! $dataGrid->makeEditButton('admincpp.getEditSuggestSearch') !!}
{{--                                {!! $dataGrid->makeDeleteButton('admincpp.getDeleteSuggestSearch') !!}--}}
                            </tr>
                        @endforeach
                        </tbody>
                        {{ $dataGrid->getTemplateFooter($suggestSearchs) }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop