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
                                <td width="4%" align="center">ID</td>
                                <td width="4%" align="center">Ảnh </td>
                                <td align="center">Tên event</td>
                                <td align="center">Mô tả ngắn</td>
                                <td width="20%" align="center">Danh mục event</td>
                                <td width="5%" align="center">Admin</td>
                                <td width="8%">Sản phẩm</td>
                                <td width="5%" align="center">Action</td>
                            </tr>
                        </thead>
                        <tbody id="tableContent">
                            @foreach($events as $item)
                                @php $dataGrid->setPrimaryKey($item->evn_id) @endphp
                                <tr>
                                    <td align="center">{{ $stt ++ }}</td>
                                    <td align="center">{{ $item->evn_id }}</td>
                                    <td align="center">
                                        <img src="/media/news/new.jpg" style="width: 60px">
                                    </td>
                                    <td>{{ $item->evn_name }}</td>
                                    <td align="center">Mô tả ngắn</td>
                                    <td>Phát triển sản phẩm, danh mục, category</td>
                                    <td>hungoata</td>
                                    <td align="center"><a href="javascript:void(0)" class="btn btn-info btn-xs" title="Thêm sản phẩm"><i class="icon-plus"></i> Add</a></td>
                                    {{ $dataGrid->makeEditButton('admincpp.getEditEvent') }}
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop