@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
            'admincpp.getListMenu'=> trans('admin::menu.list.title')
        ])
    !!}
    @php $dataGrid = new DataGrid(); $stt = 0 @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {{ header_title_action(trans('admin::menu.list.title'), 'admincpp.getAddMenu') }}
                    {{ $dataGrid->beginFormSearch('admincpp.getListMenu') }}
                    {{ $dataGrid->labelSearch('Tiêu đề','mnu_name', 'text') }}
                    {{ $dataGrid->labelSearch('Tìm vị trí','mnu_position', 'array', $configPosition) }}
                    {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content ">
                    <table class="table table-bordered table-stripped" id="dataTableList">
                        <thead>
                        <tr>
                            <td width="3%" align="center" class="bold">Stt</td>
                            {!! $dataGrid->makeCheckAllRadio() !!}
                            <td width="18%" class="bold">Tiêu đề</td>
                            <td class="bold">Đi tới</td>
                            <td width="10%" align="center" class="bold">Cửa sổ</td>
                            <td width="8%" align="center" class="bold">Vị trí</td>
                            <td width="6%" class="bold">Thứ tự</td>
                            <td width="4%" align="center" class="bold">Status</td>
                            <td width="6%" colspan="2" class="text-center bold">Action</td>
                        </tr>
                        </thead>
                        <tbody id="tableContent">
                        @foreach($menus as $value)
                            @php $dataGrid->setPrimaryKey($value['mnu_id']); @endphp
                            <tr id="tr_{{ $value['mnu_id'] }}">
                                <td align="center">{{ $stt++ }}</td>
                                {!! $dataGrid->makeCheckRadio() !!}
                                <td><a href="javascript:void(0)">
                                        <?php if (isset($value['level'])) for ($j = 0; $j < $value["level"]; $j++) echo "--"; ?>
                                        <span field="mnu_name" record_id="{{ $value['mnu_id'] }}"
                                              class="clickEdit">{{ $value['mnu_name'] }}</span></a>
                                </td>
                                <td><a href="{{ url($value['mnu_link']) }}" target="_blank">{{ $value['mnu_link'] }}</a></td>
                                <td align="center">{{ $configTarget[$value['mnu_target']] }}</td>
                                <td align="center">{{ $configPosition[$value['mnu_position']] }}</td>
                                {!! $dataGrid->makeEditTable(['mnu_order', $value]) !!}
                                {!! $dataGrid->makeCheckButton('admincpp.getListMenu', ['mnu_status', $value]) !!}
                                {!! $dataGrid->makeEditButton('admincpp.getEditMenu') !!}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        EditQuickXtable("{{ route('admincpp.getListMenu') }}", '.clickEdit');
    </script>
@stop

