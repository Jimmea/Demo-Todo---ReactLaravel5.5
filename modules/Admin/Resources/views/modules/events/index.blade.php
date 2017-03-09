@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'admincpp.getListEvent' => 'Danh sách event',
    ]) !!}
    @php
        $dataGrid = new DataGrid();
        $stt      = $dataGrid->getPageStt($events);
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header">
                    {{ header_title_action('Danh sách event', 'admincpp.getAddEvent') }}
                    {{ $dataGrid->beginFormSearch('admincpp.getListEvent') }}
                    {{ $dataGrid->labelSearch('Event id', 'evn_id', 'number') }}
                    {{ $dataGrid->labelSearch('Tên event', 'evn_name') }}
                    {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content">
                    <table class="table table-bordered" id="tableList">
                        <thead>
                            <tr>
                                <td width="4%" align="center">Stt</td>
                                {{ $dataGrid->makeCheckAllRadio() }}
                                <td width="4%" align="center">ID</td>
                                <td width="4%" align="center">Ảnh </td>
                                <td align="center">Tên event</td>
                                <td align="center">Từ khóa</td>
                                <td width="20%" align="center">Danh mục event</td>
                                <td width="8%" align="center">Thêm Tin</td>
                                <td width="5%" align="center">Admin</td>
                                <td colspan="2" width="5%" align="center">Action</td>
                            </tr>
                        </thead>
                        <tbody id="tableContent">
                            @foreach($events as $item)
                                @php $dataGrid->setPrimaryKey($item->evn_id) @endphp
                                <tr>
                                    <td align="center">{{ $stt ++ }}</td>
                                    {{ $dataGrid->makeCheckRadio() }}
                                    <td align="center">{{ $item->evn_id }}</td>
                                    <td align="center">
                                        <img src="{{ $item->evn_picture }}" style="width: 60px">
                                    </td>
                                    <td>{{ $item->evn_name }}</td>
                                    <td align="center">{{ $item->evn_meta_keyword }}</td>
                                    <td>
                                        @if($cates = $item->category)
                                            @foreach($cates as $value)
                                                <a href="javascript:void(0)">[{{ $value->cate_name }}]</a>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td align="center">
                                        <a href="{{ route('admincpp.getListNewEvent', $item->evn_id) }}" class="grid-icon" title="Thêm tin vào event">
                                            <img class="img-responsive" src="../../backend/imgs/icons/add.png" border="0">
                                        </a>
                                    </td>
                                    <td align="center">{{ $item->admin_name }}</td>
                                    {{ $dataGrid->makeEditButton('admincpp.getEditEvent') }}
                                    {{ $dataGrid->makeDeleteButton('admincpp.getDeleteEvent') }}
                                </tr>
                                @endforeach
                        </tbody>
                        {{ $dataGrid->getTemplateFooter($events) }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop