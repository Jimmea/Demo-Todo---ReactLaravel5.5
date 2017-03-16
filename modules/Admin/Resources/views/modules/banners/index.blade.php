@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([trans('admin::listing.title') ]) !!}
    @php
        $dataGrid = new DataGrid();
        $dataGrid->setDeleteAll(false);
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {{ header_title_action('Danh sách banner',  'admincpp.getAddBanner') }}
                    {{ $dataGrid->beginFormSearch('admincpp.getListBanner') }}
                    {{ $dataGrid->labelSearch('Banner ID', 'ban_id', 'number') }}
                    {{ $dataGrid->labelSearch('Tên banner', 'ban_title') }}
                    {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content">
                    <table class="table table-bordered table-stripped" id="dataTableList">
                    	<thead>
                            <tr>
                                <td width="4%" align="center" class="bold">ID</td>
                                <td width="10%" align="center" class="bold">Picture</td>
                                <td class="bold">Thông tin banner</td>
                                <td width="5%" align="center" class="bold">Link</td>
                                <td width="5%" align="center" class="bold">Vị trí</td>
                                <td width="10%" align="center" class="bold">Cửa sổ</td>
                                <td width="10%" align="center" class="bold">Hoạt động</td>
                                <td width="6%" align="center" class="bold">Tác giả</td>
                                <td width="4%" align="center" class="bold">Status</td>
                                <td colspan="2" width="6%" class="text-center bold">Action</td>
                            </tr>
                    	</thead>
                    	<tbody id="tableContent">
                        @if($banners)
                            @foreach($banners as $key => $value)
                                <?php $dataGrid->setPrimaryKey($value->ban_id)?>
                                <tr id="tr_{{ $value->ban_id }}">
                                    <td width="3%" align="center" class="bold">{{ $value->ban_id }}</td>
                                    <td class="bold" nowrap=""><img src="{{ asset($value->ban_picture) }}" alt="anh" class="img-responsive" style="width: 60px"></td>
                                    <td>{{ $value->ban_title }}</td>
                                    <td align="center">
                                        <a target="_blank" href="{{ url($value->ban_link) }}"
                                        title="{{ $value->ban_link }}"
                                        class="{{ url($value->ban_link) }}">
                                        <u>Xem </u></a>
                                    </td>
                                    <td align="center" class="bold">{{ $value->ban_order }}</td>
                                    <td align="center">{{ $defaultTarget[$value->ban_target] }}</td>
                                    <td align="center">
                                        {{ $value->ban_start_date }} <br>
                                        {{ $value->ban_end_date }}
                                    </td>
                                    <td>{{ $value->admins->adm_name }}</td>
                                    {!! $dataGrid->makeCheckButton('admincpp.getListBanner', ['ban_status', $value]) !!}
                                    {!! $dataGrid->makeEditButton('admincpp.getEditBanner') !!}
                                </tr>
                            @endforeach
                        @endif
                    	</tbody>
                        {!! $dataGrid->getTemplateFooter($banners) !!}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop