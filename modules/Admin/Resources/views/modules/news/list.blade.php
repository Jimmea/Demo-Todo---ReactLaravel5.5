@extends('admin::layouts.master_tab')
@section('content')
{{--{!! bread_crumb([--}}
    {{--'admincpp.getListNew' => 'Danh sách bài viết'--}}
{{--]) !!}--}}
    @php
        $dataGrid = new DataGrid();
        $stt      = $news->perPage()*($news->currentPage() - 1);
    @endphp
    {{-- Neu ton tai session tao cong thuc thi xoa trong localStorage di--}}
    @if(has_session('create'))
        <script type="text/javascript">sessionStorage.removeItem("dataRecipe");</script>
        @php
            delete_session('create');
        @endphp
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {{ header_title_action('Danh sách bài viết', 'admincpp.getAddNew') }}
                    @include(ADMIN_VIEW .'news.inc_search')
                    <hr>
                    <div class="header-trashed">
                        <a href="{{ route('admincpp.getListTrashNew') }}" class="btn btn-info btn-sm" title="Xem toàn bộ"><i class="icon-trash"></i> Tổng có <b>{{ $totalNewTrash }}</b> Tin rác </a>
                        <a href="{{ route('admincpp.getListTrashNew') }}" class="btn btn-warning btn-sm" title="Xem toàn bộ"><i class="icon-trash"></i> Hôm nay có <b>{{ $totalNewTrashToday }}</b> Tin rác </a>
                    </div>
                </div>
                <div class="white-box-content">
                    <table class="table table-bordered table-stripped" id="dataTableList">
                        <thead>
                            <tr>
                                {!! $dataGrid->makeCheckAllRadio() !!}
                                <td class="bold" width="4%" align="center">Stt</td>
                                <td class="bold" width="4%" align="center">ID</td>
                                <td class="bold" width="8%" align="center">Picture</td>
                                <td class="bold" width="30%" align="center">Thông tin cơ bản</td>
                                <td class="bold" width="30%" align="center">Thông tin khác</td>
                                <td class="bold" width="30%" align="center">Thông tin người dùng</td>
                                <td class="bold" width="8%" align="center" colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody id="tableContent">
                            @foreach($news as $value)
                            @php $dataGrid->setPrimaryKey($value->new_id) @endphp
                            <tr id="tr_{{ $value->new_id}}">
                                {!! $dataGrid->makeCheckRadio() !!}
                                <td align="center">{{ ++$stt }}</td>
                                <td align="center">{{ $value->new_id }}</td>
                                <td><img src="{{ $value->new_picture }}"  class="img-responsive img9070" alt=""></td>
                                <td>
                                    <div class="text-center">
                                        <span class="text-info">Tiêu đề bài viết</span>
                                        <p>
                                            <a class="text-danger text-bold"
                                               title="Click để xem thông tin"
                                               href="/{{ $value->new_slug }}">{{ ucfirst($value->new_title) }}</a>
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-info">Mô tả ngắn</span>
                                        <p>
                                            {{ $value->new_description }}
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-info">Nguồn</span>
                                        <p>
                                            {{ $value->new_link_from_domain }}
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div field="cate" class="text-center">
                                        <span class="text-info text-center">Danh mục</span>
                                        <p> {{ $value->categories->implode('cate_name', ' / ') }} </p>
                                        <hr>
                                    </div>
                                    <div field="tag" class="text-center">
                                        <span class="text-info text-center">Tag bài viết</span>
                                        <p>
                                            {{ $value->tags->implode('tag_name', ' / ') }}
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-info text-center">Thời gian tạo</span>
                                        <p>
                                            Ngày tạo  : {{ $value->created_at }} <br>
                                            Ngày cập nhật  : {{ $value->updated_at }}
                                        </p>
                                    </div>
                                </td>
                                <td align="center">
                                    <div class="text-center">
                                        <span class="text-info">Kiểu bài viết</span>
                                        <p>{{ $newTypes[$value->new_type] }}</p>
                                        <hr>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-info">Trạng thái bài viết</span>
                                        <p class="text-danger">
                                            {{ $dataGrid->getStatusPost($value->new_status) }}
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-info">Thông tin tác giả</span>
                                        <div class="list-author">
                                            <span class="text-default">Tên người dùng   : 12345</span> <br>
                                            <span class="text-default">Tên admin dùng  : {{ $value->admins->adm_name }}</span><br>
                                            <span class="text-default">Tên admin duyệt : 12345</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-info" href="" title="Duyệt bài"><i class="icon-check"></i></a>
                                    <a class="help-block btn btn-xs btn-success " href="{{ $dataGrid->createUrlFromRoute('admincpp.getEditNew') }}" title="Sửa bài viết"><i class="icon-pencil"></i></a>
                                    <a class="help-block btn btn-xs btn-danger" href="{{ $dataGrid->createUrlFromRoute('admincpp.getDeleteNew') }}" title="Xóa bài viết"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        {!! $dataGrid->makeUrlDelete('admincpp.getDeleteNew')  !!}
                        {{ $dataGrid->getTemplateFooter($news) }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop