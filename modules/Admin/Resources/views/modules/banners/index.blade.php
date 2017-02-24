@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([trans('admin::listing.title') ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {!! header_title_action('Danh sách banner',  'admincpp.getAddBanner') !!}
                    <div class="header_search clearleft search-box">
                        <form action="" class="form-inline">
                            <input type="hidden" name="page" value="{{ get_value('page', 'int', 'GET') }}">
                            <label for="">
                                ID
                                <input type="number" class="input-sm form-control" name="ban_id"
                                       value="{{ Request::get('ban_id') }}">
                            </label>
                            <label for="">
                                Tên banner
                                <input type="text" class="form-control input-sm" name="ban_title"
                                       value="{{ get_value('ban_title', 'str', 'GET', '') }}">
                            </label>
                            <label for="">
                                <button type="submit" class="btn btn-info btn-sm"><i class="icon-magnifier"></i> Search</button>
                            </label>
                        </form>
                    </div>
                </div>
                <?php $dataGrid = new DataGrid(); ?>
                <div class="white-box-content">
                    <table class="table table-bordered table-stripped" id="dataTableList">
                    	<thead>
                            <tr>
                                <td width="4%" align="center" class="bold">ID</td>
                                {!! $dataGrid->makeCheckAllRadio() !!}
                                <td width="10%" align="center" class="bold">Picture</td>
                                <td class="bold">Tiêu đề</td>
                                <td width="5%" align="center" class="bold">Link</td>
                                <td class="bold">Cửa sổ</td>
                                <td width="5%" align="center" class="bold">Vị trí</td>
                                <td class="bold">Hoạt động</td>
                                <td class="bold">Staff</td>
                                <td width="4%" align="center" class="bold">Status</td>
                                <td width="4%" align="center" class="bold">Items</td>
                                <td colspan="2" width="6%" class="text-center bold">Action</td>
                            </tr>
                    	</thead>
                    	<tbody id="tableContent">
                        @if($banners)
                            @foreach($banners as $key => $value)
                                <?php $dataGrid->setPrimaryKey($value->ban_id)?>
                                <tr id="tr_{{ $value->ban_id }}">
                                    <td width="3%" align="center" class="bold">{{ $value->ban_id }}</td>
                                    {!! $dataGrid->makeCheckRadio() !!}
                                    <td class="bold" nowrap=""><img src="{{ asset($value->ban_picture) }}" alt="anh"></td>
                                    <td>{{ $value->ban_title }}</td>
                                    <td align="center"><a target="_blank" href="{{ url($value->ban_link) }}"
                                                        title="{{ $value->ban_link }}"
                                                        class="{{ url($value->ban_link) }}">
                                                        <u>Xem</u></a>
                                    </td>
                                    <td>{{ $defaultTarget[$value->ban_target] }}</td>
                                    <td align="center" class="bold">{{ $value->ban_order }}</td>
                                    <td>
                                        From : {{ date('Y-m-d', $value->ban_start_date) }} <br>
                                        To   : {{ date('Y-m-d', $value->ban_end_date) }}
                                    </td>
                                    <td>{{ $value->admins->adm_name }}</td>
                                    {!! $dataGrid->makeCheckButton('admincpp.getListBanner', ['ban_status', $value]) !!}
                                    <td>
                                        @if($value->ban_isevent)
                                            <a href="{{ route('admincpp.getAddBannerEvent', $value->ban_id) }}" class="btn btn btn-success btn-xs"><i class="icon-plus"></i> Thêm</a>
                                        @else
                                            ...
                                        @endif
                                    </td>
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