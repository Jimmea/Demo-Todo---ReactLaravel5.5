<?php
    $module         = app('App\Models\Modules\ModuleRepository');
    $admin          = app('App\Models\Admins\AdminRepository');
    $adminUserRight = $admin->findAccessById(Session::get('adm_id'));
    $adminUserRight = $admin->mapAccessAction($adminUserRight);
    $menuAccesses   = $module->getModuleAdminAccess();
?>
<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button"> <i class="icon-magnifier"></i> </button>
                    </span>
                </div>
            </li>

            <li class="user-pro">
                <a href="javascript:void(0)" class="waves-effect">
                    <img src="{{ asset('backend/imgs/d1.jpg') }}" alt="user-img" class="img-circle">
                    <span class="hide-menu">Hello ! . Bill</span>
                </a>
            </li>

            @if($menuAccesses)
                @foreach($menuAccesses as $value)
                    <li id="listItem_{{ $value->mod_id }}"> <a href="javascript:void(0)" class="waves-effect">
                        <i class="{{ $value['mod_icon'] }} p-r-10"></i>
                        <span class="hide-menu">{{ $value->mod_name }}</span><span class="arrow icon-arrow-left"></span></a>
                        <?php
                            $arraySubTitle    = explode("|",$value["mod_listname"]);
                            $arraySubRouter   = explode("|",$value["mod_listrouter"]);
                        ?>
                        @if($arraySubTitle)
                            <ul class="nav nav-second-level collapse" aria-expanded="true">
                                @foreach($arraySubTitle as $key => $subvalue)
                                    <?php $router	= isset($arraySubRouter[$key])
                                                        ? 'admincpp.'.$arraySubRouter[$key]
                                                        : '#'; ?>
                                    {{-- Check quyen nguoi dung --}}
                                    @if(isset($adminUserRight[$value['mod_id']][$key]))
                                    <li>
                                        <a class="tab"
                                           {{--onclick="return false;"--}}
                                           target="_blank"
                                           id=""
                                           ref="{{ $value->mod_name }}"
                                           href="{{ route($router) }}">
                                            {{ $subvalue }}
                                        </a>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endif

            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-grid"></i>--}}
                    {{--<span class="hide-menu">Menus</span></a>--}}
            {{--</li>--}}
            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-folder"></i>--}}
                    {{--<span class="hide-menu">Category</span></a>--}}
            {{--</li>--}}
            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-frame"></i>--}}
                    {{--<span class="hide-menu">Banners</span></a>--}}
            {{--</li>--}}
            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-note"></i>--}}
                    {{--<span class="hide-menu">News</span></a>--}}
            {{--</li>--}}
            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-handbag"></i>--}}
                    {{--<span class="hide-menu">Shopping <span class="arrow icon-arrow-left"></span></span></a>--}}

            {{--</li>--}}
            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-picture"></i>--}}
                    {{--<span class="hide-menu">Media <span class="arrow icon-arrow-left"></span></span></a>--}}
                {{--<ul class="nav nav-second-level collapse" aria-expanded="true">--}}
                    {{--<li> <a href="fontawesome.html">Font awesome</a> </li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-wrench "></i>--}}
                    {{--<span class="hide-menu">Setting config</span></a>--}}
            {{--</li>--}}
            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-people p-r-10"></i>--}}
                    {{--<span class="hide-menu">Manager account</span></a>--}}
            {{--</li>--}}
            {{--<li> <a href="javascript:void(0)" class="waves-effect">--}}
                    {{--<i class="icon-eye p-r-10"></i>--}}
                    {{--<span class="hide-menu">Config display</span></a>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->