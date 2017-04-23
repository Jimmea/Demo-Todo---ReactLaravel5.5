<?php
    $module         = app('App\Models\Modules\ModuleRepository');
    $admin          = app('App\Models\Admins\AdminRepository');
    $adminUserRight = $admin->mapAccessAction($admin->findAccessById(get_session('adm_id')));
    $menuAccesses   = $module->getModuleAdminAccess();
?>
<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation" style="padding-top: 0">
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

            <li class="user-pro dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle profile-pic waves-effect" data-toggle="dropdown" href="#" style="background:#03a9f3;color:#fff;padding: 5px 10px !important">
                    <img src="{{ asset('backend/imgs/d1.jpg') }}" alt="user-img" class="img-circle">
                    <span class="hide-menu">Xin chào . {{ get_session('adm_name') }}</span>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="{{ route('admincpp.getProfile', get_session('adm_id')) }}"><i class="icon-user"></i>  My Profile</a></li>
                    <li><a href="{{ route('staff.getLogoutAdmincpp') }}"><i class="icon-logout"></i>  Logout</a></li>
                </ul>
            </li>

            @if($menuAccesses)
                @foreach($menuAccesses as $value)
                    {{-- Begin Full permission--}}
                    @if(get_session('isadmin'))
                    <li id="listItem_{{ $value->mod_id }}"> <a href="#" class="waves-effect">
                        <i class="{{ $value['mod_icon'] }} p-r-10"></i>
                        <span class="hide-menu">{{ $value->mod_name }}</span><span class="arrow icon-arrow-left"></span></a>
                        <?php
                            $arraySubTitle    = explode("|",$value["mod_listname"]);
                            $arraySubRouter   = explode("|",$value["mod_listrouter"]);
                        ?>
                        @if($arraySubTitle)
                            <ul class="nav nav-second-level collapse">
                                @foreach($arraySubTitle as $key => $subvalue)
                                    <?php $router	= isset($arraySubRouter[$key])
                                                        ? 'admincpp.'.$arraySubRouter[$key]
                                                        : '#'; ?>
                                    <li>
                                        <a class="tab"
                                           id="{{ $arraySubRouter[$key] }}"
                                           rel="{{ $value->mod_name }} <span class='raquo'>&raquo;</span> {{ $subvalue }}"
                                           href="{{ route($router) }}">
                                            {{ $subvalue }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    {{-- Close Full permission--}}

                    {{-- Begin Private permission --}}
                    @elseif(array_key_exists($value->mod_id, $adminUserRight))
                    <li id="listItem_{{ $value->mod_id }}"> <a href="javascript:void(0)" class="waves-effect">
                        <i class="{{ $value['mod_icon'] }} p-r-10"></i>
                        <span class="hide-menu">{{ $value->mod_name }}</span><span class="arrow icon-arrow-left"></span></a>
                        @php
                            $arraySubTitle    = explode("|",$value["mod_listname"]);
                            $arraySubRouter   = explode("|",$value["mod_listrouter"]);
                        @endphp
                        @if($arraySubTitle)
                            <ul class="nav nav-second-level collapse" aria-expanded="true">
                                @foreach($arraySubTitle as $key => $subvalue)
                                    @php $router	= isset($arraySubRouter[$key]) ? 'admincpp.'.$arraySubRouter[$key] : '#'; @endphp
                                    {{-- Check quyen nguoi dung --}}
                                    @if(isset($adminUserRight[$value['mod_id']][$key]))
                                    <li>
                                        <a class="tab"
                                           onclick="return false;"
                                           target="_blank"
                                           id="{{ $arraySubRouter[$key] }}"
                                           rel="{{ $value->mod_name }} <span class='raquo'>&raquo;</span> {{ $subvalue }}"
                                           href="{{ route($router) }}">
                                            {{ $subvalue }}
                                        </a>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    </li>
                    @endif
                    {{--Close Private permission --}}

                @endforeach
            @endif
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->