   <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="topbar-left" style="background-color: var(--classic)">
                <a href="{{config('admin.prefix', '/')}}" class="logo">
                    <span>
                        <img src="{{ URL::asset( $assetLink . '/images/web-admin-logo.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                    {{-- <span>
                        <img src="{{ URL::asset( $assetLink . '/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{ URL::asset( $assetLink . '/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    </span> --}}
                    <h4 class="logo-lg logo-light">{{ config('admin.title', 'Admin') }}</h4>
                    <h4 class="logo-lg logo-dark" style="color: var(--light)">{{ config('admin.title', 'Admin') }}</h4>
                </a>
            </div>
            <!--end logo-->
            <div class="leftbar-profile p-3 w-100">
                <div class="media position-relative">
                    <div class="leftbar-user online">
                        <img src="{{ URL::asset( $assetLink . '/images/users/user-9.jpg')}}" alt="" class="thumb-md rounded-circle">
                    </div>
                    <div class="media-body align-self-center text-truncate ml-3">
                        <h5 class="mt-0 mb-1 font-weight-semibold">Hyman M. Cross</h5>
                        <p class="text-uppercase mb-0 font-12">Admin</p>
                    </div><!--end media-body-->
                </div>
            </div>
            <ul class="metismenu left-sidenav-menu slimscroll">
                <li class="menu-label">Main</li>

                 @yield('dynamicMenu')

                 <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="monitor" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Dashboard</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(config('admin.left_side_menu.dashboard'))
                            @foreach (config('admin.left_side_menu.dashboard', '[]') as $menu)
                            @if (isset($menu['child']))
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    @foreach ($menu['child'] as $item)
                                        <li><a href="{{ $item['link']}}">{{ $item['label'] }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ $menu['link']}}">{{ $menu['label'] }}</a></li>
                            @endif
                            @endforeach
                        @endif
                    </ul>
                </li>

                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="grid" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Apps</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(config('admin.left_side_menu.app'))
                            @foreach (config('admin.left_side_menu.app', '[]') as $menu)
                            @if (isset($menu['child']))
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    @foreach ($menu['child'] as $item)
                                        <li><a href="{{ $item['link']}}">{{ $item['label'] }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ $menu['link']}}">{{ $menu['label'] }}</a></li>
                            @endif
                            @endforeach
                        @endif
                    </ul>
                </li>
                <li class="menu-label">Additionals</li>
                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="package" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Online Shop</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(config('admin.left_side_menu.shop'))
                            @foreach (config('admin.left_side_menu.shop', '[]') as $menu)
                            @if (isset($menu['child']))
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    @foreach ($menu['child'] as $item)
                                        <li><a href="{{ $item['link']}}">{{ $item['label'] }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ $menu['link']}}">{{ $menu['label'] }}</a></li>
                            @endif
                            @endforeach
                        @endif

                    </ul>
                </li>
                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="users" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Users</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(config('admin.left_side_menu.users'))
                            @foreach (config('admin.left_side_menu.users', '[]') as $menu)
                            @if (isset($menu['child']))
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    @foreach ($menu['child'] as $item)
                                        <li><a href="{{ $item['link']}}">{{ $item['label'] }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ $menu['link']}}">{{ $menu['label'] }}</a></li>
                            @endif
                            @endforeach
                        @endif
                    </ul>
                </li>

                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="settings" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Settings</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(config('admin.left_side_menu.settings'))
                            @foreach (config('admin.left_side_menu.settings', '[]') as $menu)
                            @if (isset($menu['child']))
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    @foreach ($menu['child'] as $item)
                                        <li><a href="{{ $item['link']}}">{{ $item['label'] }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                                <li class="nav-item"><a class="nav-link" href="{{ $menu['link']}}">{{ $menu['label'] }}</a></li>
                            @endif
                            @endforeach
                        @endif
                    </ul>
                </li>
            </ul>

        </div>
        <!-- end left-sidenav-->
