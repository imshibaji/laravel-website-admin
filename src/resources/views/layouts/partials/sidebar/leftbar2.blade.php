   <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{config('admin.prefix', '/')}}" class="logo">
                    <span>
                    <img src="{{  config('admin.logo', URL::asset( $assetLink . '/images/logo-sm.png')) }}" alt="{{ config('admin.title', 'Admin') }}" class="logo-sm">
                    </span>
                    {{-- <span>
                        <img src="{{ URL::asset( $assetLink . '/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{ URL::asset( $assetLink . '/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    </span> --}}
                    <h4 class="logo-lg logo-light">{{ config('admin.title', 'Admin') }}</h4>
                    <h4 class="logo-lg logo-dark">{{ config('admin.title', 'Admin') }}</h4>
                </a>
            </div>
            <!--end logo-->
            <div class="leftbar-profile p-3 w-100">
                <div class="media position-relative">
                    <div class="leftbar-user online">
                        <img src="{{'https://www.gravatar.com/avatar/'.md5(Auth::user()->email) ?? URL::asset( $assetLink . '/images/users/user-9.jpg')}}" alt="" class="thumb-md rounded-circle">
                    </div>
                    <div class="media-body align-self-center text-truncate ml-3">
                        <h5 class="mt-0 mb-1 font-weight-semibold">{{auth()->user()->name}}</h5>
                        <p class="text-uppercase mb-0 font-12">{{ Str::upper(auth()->user()->roles[0]->name) }}</p>
                    </div><!--end media-body-->
                </div>
            </div>
            <ul class="metismenu left-sidenav-menu slimscroll">
                <li class="menu-label">Main</li>

                @yield('dynamicMenu')

                @if (count(config('admin.left_side_menu.dashboard')) > 0)
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
                    </li>
                @endif

                @if (count(config('admin.left_side_menu.online')) > 0)
                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="chrome" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Online</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(config('admin.left_side_menu.online'))
                            @foreach (config('admin.left_side_menu.online', '[]') as $menu)
                            @if (isset($menu['child']))
                                @if(isset($menu['view']) && $menu['view'] == true)
                                    <li>
                                        <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            @foreach ($menu['child'] as $item)
                                                @isset($item['view'])
                                                    <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                                @endisset
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
                </li>
            @endif

                @if (count(config('admin.left_side_menu.offline')) > 0)
                    <li class="leftbar-menu-item">
                        <a href="javascript: void(0);" class="menu-link">
                            <i data-feather="database" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                            <span>Offline</span>
                            <span class="menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            @if(config('admin.left_side_menu.offline'))
                                @foreach (config('admin.left_side_menu.offline', '[]') as $menu)
                                @if (isset($menu['child']))
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li>
                                            <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                            <ul class="nav-second-level" aria-expanded="false">
                                                @foreach ($menu['child'] as $item)
                                                    @isset($item['view'])
                                                        <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                                    @endisset
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
                    </li>
                @endif

                <li class="menu-label">Additionals</li>

                @if (count(config('admin.left_side_menu.users')) > 0)
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
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li>
                                            <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                            <ul class="nav-second-level" aria-expanded="false">
                                                @foreach ($menu['child'] as $item)
                                                    @isset($item['view'])
                                                        <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                                    @endisset
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
                    </li>
                @endif

                @if (count(config('admin.left_side_menu.settings')) > 0)
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
                                    @if(isset($menu['view']) && $menu['view'] == true)
                                        <li>
                                            <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                            <ul class="nav-second-level" aria-expanded="false">
                                                @foreach ($menu['child'] as $item)
                                                    @isset($item['view'])
                                                        <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                                    @endisset
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
                    </li>
                @endif

                @if (count(config('admin.left_side_menu.app')) > 0)
                <li class="leftbar-menu-item">
                    <a href="javascript: void(0);" class="menu-link">
                        <i data-feather="codepen" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                        <span>Apps</span>
                        <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(config('admin.left_side_menu.app'))
                            @foreach (config('admin.left_side_menu.app', '[]') as $menu)
                            @if (isset($menu['child']))
                                @if(isset($menu['view']) && $menu['view'] == true)
                                    <li>
                                        <a href="javascript: void(0);"><i class="ti-control-record"></i>{{ $menu['label'] }} <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="nav-second-level" aria-expanded="false">
                                            @foreach ($menu['child'] as $item)
                                                @isset($item['view'])
                                                    <li><a href="{{ config('admin.prefix', 'admin') . $item['link']}}">{{ $item['label'] }}</a></li>
                                                @endisset
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
                </li>
                @endif
            </ul>
        </div>
        <!-- end left-sidenav-->
