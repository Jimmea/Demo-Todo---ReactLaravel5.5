@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
            trans('admin::category.list.title'),
         ])
     !!}
    @php
        $dataGrid = new DataGrid();$stt = 1;
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                {{ header_title_action('Danh sách category', 'admincpp.getAddCategory') }}
                {{ $dataGrid->beginFormSearch() }}
                {{ $dataGrid->labelSearch('Kiểu category', 'cate_type', ARRKEY , $typeCategory) }}
                {{ $dataGrid->labelSearch('Category Parent', 'cate_parent_id', ARR , $categoryParents, ['cate_id', 'cate_name']) }}
                {{ $dataGrid->closeForm() }}
                </div>
                <div class="white-box-content">
                    <table class="table table-stripped" id="dataTableList">
                        <thead>
                            <tr>
                                <td width="5%" align="center">Stt</td>
                                <td width="5%" align="center">Id</td>
                                <td width="8%" align="center">Avatar</td>
                                <td>Tên danh mục</td>
                                <td>Kiểu danh mục</td>
                                <td width="25%">Từ khóa tìm kiếm SEO</td>
                                <td width="7%" align="center">Total view</td>
                                <td width="5%" align="center">Vị trí</td>
                                <td width="8%" align="center">Show home</td>
                                <td width="7%" align="center">Trạng thái</td>
                                <td width="5%" colspan="3" align="center">Action</td>
                            </tr>
                        </thead>
                        <tbody id="tableContent">
                            @foreach($categories as $value)
                                @php $dataGrid->setPrimaryKey($value['cate_id']) @endphp
                                <tr>
                                    <td align="center">{{ $stt++ }}</td>
                                    <td>{{ $value['cate_id'] }}</td>
                                    <td><img src="{{ asset( $value['cate_picture'])  }}" class="img-responsive img9070"></td>
                                    <td>
                                        <a href="javascript:void(0)">
                                            <?php if (isset($value['level'])) for ($j = 0; $j < $value["level"]; $j++) echo "--"; ?>
                                            <span field="cate_name" record_id="{{ $value['cate_id'] }}" class="clickEdit">{{ $value['cate_name'] }}</span>
                                        </a>
                                    </td>
                                    <td>{{ $typeCategory[$value['cate_type']] }}</td>
                                    {!! $dataGrid->makeEditColumn(['cate_meta_keyword', $value]) !!}
                                    <td align="center">{{ $value['cate_total_hit'] }}</td>
                                    {!! $dataGrid->makeEditColumn(['cate_order', $value], "align=center") !!}
                                    {!! $dataGrid->makeCheckButton('admincpp.getListCategory', ['cate_show', $value]) !!}
                                    {!! $dataGrid->makeCheckButton('admincpp.getListCategory', ['cate_status', $value]) !!}
                                    <td><a href="{{ route('admincpp.getAddCategoryBanner', $value['cate_id']) }}" title="Click tạo banner" class="grid-icon"><img src="/backend/imgs/icons/banner.png" class="img-responsive"></a></td>
                                    <td><a href="{{ route('admincpp.getAddCategoryTabAction', $value['cate_id']) }}" title="Click tạo tab category" class="grid-icon"><img src="/backend/imgs/icons/add.png" class="img-responsive"></a></td>
                                    {!! $dataGrid->makeEditButton('admincpp.getEditCategory') !!}
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
        EditQuickXtable('{{ route('admincpp.getListCategory') }}', '.clickEdit');
    </script>
@stop