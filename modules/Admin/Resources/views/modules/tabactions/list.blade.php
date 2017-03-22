@extends('admin::layouts.master_tab')
@section('content')
{{--{!! bread_crumb([--}}
    {{--'admincpp.getListTabAction' => 'Danh mục tab'--}}
{{--]) !!}--}}
    @php $dataGrid = new DataGrid() @endphp
<div class="row">
    <div class="col-md-12">
        <div class="white-box padd-0">
            <div class="white-box-header">
                {!! header_title_action('Danh sách tab action category', 'admincpp.getAddTabAction') !!}
                <div class="clearleft"></div>
            </div>
            <div class="white-box-content">
                <table class="table" id="dataTableList">
                    <thead>
                        <tr>
                            <td width="5%" align="center">Stt</td>
                            <td width="5%" align="center">ID</td>
                            <td>Tên action</td>
                            <td width="6%" align="center">Icon</td>
                            <td width="15%" align="center">Ngày tạo</td>
                            <td width="15%" align="center">Ngày cập nhật</td>
                            <td width="6%" align="center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tabActions as $key => $value)
                        @php $dataGrid->setPrimaryKey($value->ta_id) @endphp
                        <tr>
                            <td align="center">{{ ++$key }}</td>
                            <td align="center">{{ $value->ta_id }}</td>
                            {!! $dataGrid->makeEditColumn(['ta_name', $value]) !!}
                            <td><img src="{{ $value->ta_icon or 'NULL' }}" alt="icon" class="img9070 img-responsive"></td>
                            <td align="center">{{ $value->created_at }}</td>
                            <td align="center">{{ $value->updated_at }}</td>
                            {!! $dataGrid->makeEditButton('admincpp.getEditTabAction') !!}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('js')
    <script>
        EditQuickXtable('{{ route('admincpp.getListTabAction') }}', '.clickEdit');
    </script>
@stop