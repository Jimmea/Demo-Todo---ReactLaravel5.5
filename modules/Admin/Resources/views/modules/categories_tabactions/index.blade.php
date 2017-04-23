@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'admincpp.getListCategory'          => 'Danh sách danh mục',--}}
        {{--"admincpp.getListCategoryTabAction|$category->cate_id" => 'Danh sách danh mục tab',--}}
        {{--"admincpp.getAddCategoryTabAction|$category->cate_id" => 'Thêm mới'--}}
    {{--]) !!}--}}
    @php $dataGrid = new DataGrid(); @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {{ header_title_action('Danh sách category tab action - ' .$category->cate_name,["admincpp.getAddCategoryTabAction",$category->cate_id]) }}
                    <div class="clearleft"></div>
                </div>
                <div class="white-box-content">
                    <table class="table table-bordered table-stripped" id="dataTableList">
                        <thead>
                        <tr>
                            <td align="center">Stt</td>
                            <td>Tên tab</td>
                            <td>Danh mục</td>
                            <td>Danh mục con</td>
                            <td>Ngày tạo</td>
                            <td>Ngày cập nhật</td>
                            <td width="7%" align="center">Trạng thái</td>
                            <td align="center" width="5%">Action</td>
                        </tr>
                        </thead>
                        <tbody id="tableContent">
                            @foreach($categoryTabActions as $key => $item)
                                @php $dataGrid->setPrimaryKey($item['cta_id']) @endphp
                                <tr>
                                    <td align="center">{{ ++$key }}</td>
                                    <td>{{ $tabActions[$item['cta_tabaction_id']] }}</td>
                                    <td>{{ $item['category']['cate_name'] }}</td>
                                    <td>
                                        @if($subcategories = $item['cta_group_category_id'])
                                            @foreach($subcategories as $subcategory)
                                                [{{ $subcategory['cate_name'] }}]
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item['updated_at'] }}</td>
                                    {!! $dataGrid->makeCheckButton('admincpp.getListCategoryTabAction|'.$category->cate_id, ['cta_status', $item]) !!}
                                    {!! $dataGrid->makeEditButton("admincpp.getEditCategoryTabAction|$category->cate_id") !!}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop