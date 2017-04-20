@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'admincpp.getListNew'       => 'Danh sách bài viết',--}}
        {{--'admincpp.getListTrashNew'  => 'Danh sách bài viết rác'--}}
    {{--]) !!}--}}
    @php
        $dataGrid = new DataGrid();
        $dataGrid->setDeleteAll(false);
        $stt      = $dataGrid->getPageStt($newTrashs);
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header">
                    {!! box_title('Danh sách bài viết rác', false) !!}
                    @include(ADMIN_VIEW .'news.inc_search')
                </div>
                <div class="white-box-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <td align="center" width="5%">ID</td>
                                <td align="center" width="10%">Hình ảnh</td>
                                <td>Thông tin cơ bản</td>
                                <td align="center" width="10%">Danh mục</td>
                                <td class="bold" width="14%" align="center">User | Admin</td>
                                <td class="bold" width="7%" align="center">Kiểu bài</td>
                                <td align="center" width="20%">Ngày tạo | Ngày cập nhật</td>
                                <td align="center" width="5%" colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newTrashs as $value)
                               <tr>
                                   <td align="center">{{ $value->new_id }}</td>
                                   <td><img src="{{ asset($value->new_picture) }}" alt="user" class="img9070"></td>
                                   <td>
                                       <h4 class="text-danger"><strong>{{ $value->new_title }}</strong></h4>
                                       <p><span class="mail-desc">{{ $value->new_description }}.</span></p>
                                   </td>
                                   <td align="center">{{ $value->categories->implode('cate_name', '/') }}</td>
                                   <td align="center">
                                       {{ $value->admins->adm_name }} | {{ $value->admins->adm_name }}
                                   </td>
                                   <td align="center">{{ $newTypes[$value->new_type] }}</td>
                                   <td align="center">
                                       <div class="time">Create : {{ $value->created_at }}</div>
                                       <div class="time">Update : {{ $value->updated_at }}</div>
                                   </td>
                                   <td align="center">
                                       <a href="{{ route('admincpp.getShowNew', $value->new_id) }}" target="_blank" class="grid-icon" title="Xem chi tiết bản ghi">
                                           <img src="/backend/imgs/icons/see.png" class="img-responsive">
                                       </a>
                                   </td>
                                   <td align="center">
                                       <a href="{{ route('admincpp.getStoreTrashNew', $value->new_id) }}" class="grid-icon" title="Khôi phục bản ghi">
                                           <img src="/backend/imgs/icons/refresh.png" class="img-responsive">
                                       </a>
                                   </td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{ $dataGrid->getTemplateFooter($newTrashs) }}
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop