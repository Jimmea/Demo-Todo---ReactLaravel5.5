@extends('admin::layouts.master')
@section('title', 'Welcome to cook')
@section('content')
    @include('admin::blocks.block_navbartop')
    @include('admin::blocks.block_sidebar')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div id="tabs">
                    <ul class="nav nav-pills">
                        <li id="tabs_menu_1" class="active tabs_menu_child tabs_menu_select">
                            <a href="javascript:;" class="select_tab" onClick="selectTab('1');">
                                Trang chủ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row bg-content">
                <div id="tabs_content" class="col-sm-12">
                    <div id="tabs_content_1" class="tabs_content_child tabs_content_select">
                        <iframe id="idframe_1" src="{{ route('admincpp.getdoashboard') }}" frameborder="0"
                                width="100%" onLoad="calcHeightFrame('idframe_1');">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2016 &copy; Cook Admin design by bill </footer>
    </div>
@stop
@section('js')
    @include('admin::blocks.block_js')
@stop
