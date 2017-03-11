@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'List Module'
    ]) !!}
    @php $dataGrid = new DataGrid(); $stt = 1 @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {!! header_title_action('Danh sách modules', 'admincpp.getAddConfigAdmin') !!}
                    {{ $dataGrid->beginFormSearch('admincpp.getListConfigAdmin') }}
                    {{ $dataGrid->labelSearch('Tên module', 'mod_name') }}
                    {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content">
                        <table class="table table-stripped" id="dataTableList">
                            <thead>
                                <tr>
                                    <td align="center" width="4%">TT</td>
                                    <td align="center" width="4%">ID</td>
                                    <td>Tên module</td>
                                    <td>Tiêu đề</td>
                                    <td>Tên router</td>
                                    <td align="center" width="5%">Icon</td>
                                    <td align="center" width="5%">Sắp xếp</td>
                                    <td class="text-center">Action</td>
                                </tr>
                            </thead>
                            <tbody id="tableContent">
                                @foreach($modules as $value)
                                <?php $dataGrid->setPrimaryKey($value->mod_id) ?>
                                <tr id="tr_{{ $value->mod_id }}">
                                    <td align="center">{{ $stt++ }}</td>
                                    <td align="center">{{ $value->mod_id }}</td>
                                    <td>{{ $value->mod_name }}</td>
                                    <td>{{ $value->mod_listname }}</td>
                                    <td>{{ $value->mod_listrouter }}</td>
                                    <td align="center"><i class="{{ $value->mod_icon }}"></i></td>
                                    <td align="center">{{ $value->mod_order }}</td>
                                    {!! $dataGrid->makeEditButton('admincpp.getEditConfigAdmin') !!}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@stop