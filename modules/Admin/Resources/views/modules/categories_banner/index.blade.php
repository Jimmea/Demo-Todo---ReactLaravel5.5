@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--"admincpp.getListCategory"                       => 'Danh sách danh mục',--}}
        {{--"admincpp.getListCategoryBanner|".$categoryId    => 'Danh sách banner category - '.$category->cate_name,--}}
    {{--]) !!}--}}
    @php
        $dataGrid = new DataGrid();
        $dataGrid->setDeleteAll(false);
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {{ header_title_action('Danh sách banner category - ' .$category->cate_name,["admincpp.getAddCategoryBanner",$categoryId]) }}
                    {{ $dataGrid->beginFormSearch() }}
                    {{ $dataGrid->labelSearch('Tiêu đề', 'cab_title') }}
                    {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content">
                    <table class="table table-bordered table-stripped" id="dataTableList">
                        <thead>
                        <tr>
                            {{--{!! $dataGrid->makeCheckAllRadio() !!}--}}
                            <td width="4%" align="center" class="bold">ID</td>
                            <td width="7%" align="center" class="bold">Picture</td>
                            <td width="20%" class="bold">Tiêu đề</td>
                            <td width="8%" align="center" class="bold">Đường dẫn</td>
                            <td width="20%" class="bold">Mô tả</td>
                            <td width="5%" align="center" class="bold">Vị trí</td>
                            <td width="8%" align="center" class="bold">Cửa sổ</td>
                            <td width="10%" align="center" class="bold">Thời gian</td>
                            <td width="6%" align="center" class="bold">Tác giả</td>
                            <td width="4%" align="center" class="bold">Status</td>
                            <td colspan="3" width="6%" class="text-center bold">Action</td>
                        </tr>
                        </thead>
                        <tbody id="tableContent">
                        @foreach($categoryBanners as $key => $value)
                        @php $dataGrid->setPrimaryKey($value->cab_id)@endphp
                        <tr id="tr_{{ $value->cab_id }}">
{{--                            {!! $dataGrid->makeCheckRadio() !!}--}}
                            <td width="3%" align="center" class="bold">{{ $value->cab_id }}</td>
                            <td class="bold" nowrap="">
                                <img src="{{ $value->cab_picture }}"
                                     alt="anh" class="img-responsive" style="width: 60px">
                            </td>
                            {!! $dataGrid->makeEditColumn(['cab_title', $value]) !!}
                            <td align="center">
                                <a target="_blank" href="{{ url($value->cab_link) }}"
                                title="{{ $value->cab_link }}"
                                class="{{ url($value->cab_link) }}">
                                <u>Link</u></a>
                            </td>
                            {!! $dataGrid->makeEditColumn(['cab_description', $value]) !!}
                            {!! $dataGrid->makeEditColumn(['cab_order', $value], "align=center") !!}
                            <td align="center">{{ $configTarget[$value->cab_target] }}</td>
                            <td align="center">
                                {{ $value->cab_start_date }} <br>
                                {{ $value->cab_end_date }}
                            </td>
                            <td align="center">{{ $value->admins->adm_name }}</td>
                            {!! $dataGrid->makeCheckButton('admincpp.getListCategoryBanner|'.$categoryId, ['cab_status', $value]) !!}
                            {!! $dataGrid->makeEditButton('admincpp.getEditCategoryBanner|'.$categoryId) !!}
{{--                            {!! $dataGrid->makeDeleteButton('admincpp.getDeleteCategoryBanner|'.$categoryId) !!}--}}
                        </tr>
                        @endforeach
                        </tbody>
                        {!! $dataGrid->getTemplateFooter($categoryBanners) !!}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        EditQuickXtable('{{ route('admincpp.getListCategoryBanner', $categoryId) }}', '.clickEdit');
    </script>
@stop