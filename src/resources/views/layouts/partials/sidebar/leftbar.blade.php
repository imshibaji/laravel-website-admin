 <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu bg-dark">
            <div class="main-icon-menu">
                <a href="/admin" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{ config('admin.logo', URL::asset( $assetLink . '/images/logo-sm.png')) }}" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <nav class="nav">
                    @if (count(config('admin.left_side_menu.dashboard')) > 0)
                    <a href="#MetricaDashboard" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Dashboard">
                        <i data-feather="monitor" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaDashboards-->
                    @endif

                    @if (count(config('admin.left_side_menu.online')) > 0)
                    <a href="#MetricaOnline" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Online">
                        <i data-feather="chrome" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaUikit-->
                    @endif

                    @if (count(config('admin.left_side_menu.offline')) > 0)
                    <a href="#MetricaOffline" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Offline">
                        <i data-feather="database" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaApps-->
                    @endif

                    @if (count(config('admin.left_side_menu.users')) > 0)
                    <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Users">
                        <i data-feather="users" class="align-self-center menu-icon icon-dual"></i>
                    </a> <!--end MetricaAuthentication-->
                    @endif

                    @if (count(config('admin.left_side_menu.settings')) > 0)
                    <a href="#MetricaSettings" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Settings">
                        <i data-feather="settings" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaPages-->
                    @endif

                    @if (count(config('admin.left_side_menu.app')) > 0)
                    <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Apps">
                        <i data-feather="codepen" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaApps-->
                    @endif
                </nav><!--end nav-->
                <div class="pro-metrica-end">
                    @if(config('admin.help.view', true))
                        <a href="{{ config('admin.prefix') . config('admin.help.link') }}" class="help" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Help">
                            <i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i>
                        </a>
                    @endif
                    @if(config('admin.profile.view', true))
                        <a href="{{ config('admin.prefix') . config('admin.profile.link') }}" class="profile" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="{{auth()->user()->name }}" data-original-title="{{config('admin.profile.name')}}">
                            <img src="{{ 'https://www.gravatar.com/avatar/'.md5(Auth::user()->email) ?? URL::asset( $assetLink . '/images/users/user-4.jpg')}}" alt="{{auth()->user()->name }}" class="rounded-circle thumb-sm">
                        </a>
                    @endif
                </div>
            </div><!--end main-icon-menu-->

            <div class="main-menu-inner">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{config('admin.prefix', '/')}}" class="logo">
                        {{-- <span>
                            <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                            <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        </span> --}}

                        <h3 class="pt-2">{{ config('admin.title', 'Admin') }}</h3>
                    </a>
                </div>
                <!--end logo-->
                <div class="menu-body slimscroll">
                    <div id="MetricaDashboard" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Dashboard</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.dashboard'))
                                @foreach (config('admin.left_side_menu.dashboard', '[]') as $menu)
                                    @if (isset($menu['child']))
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                            <ul class="nav-second-level" aria-expanded="false">
                                                @foreach ($menu['child'] as $item)
                                                <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="nav-item"><a class="nav-link" href="{{ config('admin.prefix', 'admin') . $menu['link']}}">{{ $menu['label'] }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div><!-- end Dashboards -->

                    <div id="MetricaOnline" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Online</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.online'))
                            @foreach (config('admin.left_side_menu.online', '[]') as $menu)
                                @if (isset($menu['child']))
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            @foreach ($menu['child'] as $item)
                                            <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endif
                                @else
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li class="nav-item"><a class="nav-link" href="{{ config('admin.prefix', 'admin') . $menu['link']}}">{{ $menu['label'] }}</a></li>
                                    @endif
                                @endif
                            @endforeach
                            @endif
                    </div><!-- end Others -->

                    <div id="MetricaOffline" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Offline</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.offline'))
                            @foreach (config('admin.left_side_menu.offline', '[]') as $menu)
                                @if (isset($menu['child']))
                                    <li class="nav-item">
                                    <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            @foreach ($menu['child'] as $item)
                                            <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item"><a class="nav-link" href="{{ config('admin.prefix', 'admin') . $menu['link']}}">{{ $menu['label'] }}</a></li>
                                @endif
                            @endforeach
                            @endif
                        </ul>
                    </div><!-- end Crypto -->



                    <div id="MetricaAuthentication" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Users</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.users'))
                            @foreach (config('admin.left_side_menu.users', '[]') as $menu)
                                @if (isset($menu['child']))
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            @foreach ($menu['child'] as $item)
                                            <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endif
                                @else
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li class="nav-item"><a class="nav-link" href="{{ config('admin.prefix', 'admin') . $menu['link']}}">{{ $menu['label'] }}</a></li>
                                    @endif
                                @endif
                            @endforeach
                            @endif
                        </ul>
                    </div><!-- end Authentication-->

                    <div id="MetricaSettings" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Settings</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.settings'))
                            @foreach (config('admin.left_side_menu.settings', '[]') as $menu)
                                @if (isset($menu['child']))
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li class="nav-item">
                                        <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                            <ul class="nav-second-level" aria-expanded="false">
                                                @foreach ($menu['child'] as $item)
                                                    @if(isset($item['view']))
                                                        <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li class="nav-item"><a class="nav-link" href="{{ config('admin.prefix', 'admin') . $menu['link']}}">{{ $menu['label'] }}</a></li>
                                    @endif
                                @endif
                            @endforeach
                            @endif
                        </ul>
                    </div><!-- end Settings -->

                    <div id="MetricaApps" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Apps</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.app'))
                            @foreach (config('admin.left_side_menu.app', '[]') as $menu)
                                @if (isset($menu['child']))
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li class="nav-item">
                                        <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                            <ul class="nav-second-level" aria-expanded="false">
                                                @foreach ($menu['child'] as $item)
                                                    @if(isset($item['view']))
                                                        <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li class="nav-item"><a class="nav-link" href="{{ config('admin.prefix', 'admin') . $menu['link']}}">{{ $menu['label'] }}</a></li>
                                    @endif
                                @endif
                            @endforeach
                            @endif
                        </ul>
                    </div><!-- end Apps -->

                </div><!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->
