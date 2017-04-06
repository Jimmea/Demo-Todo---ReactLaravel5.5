@extends('admin::layouts.master_tab')
@section('content')
    @include('admin::blocks.block_sidebar')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div id="tabs">
                    <ul id="tabs_menu" class="nav nav-pills tab_menu">
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
                        <iframe id="idframe_1" src="{{ route('admincpp.getdashboard') }}" frameborder="0"
                                width="100%" onLoad="calcHeightFrame('idframe_1');">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- @include('admin::blocks.block_footer') -->
    </div>
@stop
