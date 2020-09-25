 <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu bg-dark">
            <div class="main-icon-menu">
                <a href="/admin" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{ URL::asset( $assetLink . '/images/web-admin-logo.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <nav class="nav">
                    <a href="#MetricaDashboard" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Dashboard">
                        <i data-feather="monitor" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaDashboards-->

                    <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Apps">
                        <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaApps-->

                    <a href="#MetricaOnlineShop" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Online Shop">
                        <i data-feather="package" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaUikit-->

                    <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Users">
                        <i data-feather="users" class="align-self-center menu-icon icon-dual"></i>
                    </a> <!--end MetricaAuthentication-->

                    <a href="#MetricaSettings" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Settings">
                        <i data-feather="settings" class="align-self-center menu-icon icon-dual"></i>
                    </a><!--end MetricaPages-->

                </nav><!--end nav-->
                <div class="pro-metrica-end">
                    <a href="{{config('admin.left_side_menu.help')}}" class="help" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Help">
                        <i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i>
                    </a>
                    <a href="{{config('admin.left_side_menu.profile')}}" class="profile">
                        <img src="{{ 'https://www.gravatar.com/avatar/'.md5(Auth::user()->email) ?? URL::asset( $assetLink . '/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle thumb-sm">
                    </a>
                </div>
            </div><!--end main-icon-menu-->

            <div class="main-menu-inner">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="#" class="logo">
                        {{-- <span>
                            <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                            <img src="{{ URL::asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        </span> --}}

                        <h3 class="pt-2">{{ config('admin.title', 'Admin') }}</h3>
                    </a>
                </div>
                <!--end logo-->
                <div class="menu-body slimscroll">
                    <div id="MetricaDashboard" class="main-icon-menu-pane active">
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
                    </div><!-- end Dashboards -->

                    <div id="MetricaApps" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Apps</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.app'))
                            @foreach (config('admin.left_side_menu.app', '[]') as $menu)
                            @if (isset($menu['child']))
                                <li class="nav-item">
                                  <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
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
                    </div><!-- end Crypto -->

                    <div id="MetricaOnlineShop" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Online Shop</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.shop'))
                            @foreach (config('admin.left_side_menu.shop', '[]') as $menu)
                            @if (isset($menu['child']))
                                <li class="nav-item">
                                  <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
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
                    </div><!-- end Others -->

                    <div id="MetricaAuthentication" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Users</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.users'))
                            @foreach (config('admin.left_side_menu.users', '[]') as $menu)
                            @if (isset($menu['child']))
                                <li class="nav-item">
                                  <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
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
                    </div><!-- end Authentication-->

                    <div id="MetricaSettings" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Settings</h6>
                        </div>
                        <ul class="nav metismenu">
                            @if(config('admin.left_side_menu.settings'))
                            @foreach (config('admin.left_side_menu.settings', '[]') as $menu)
                            @if (isset($menu['child']))
                                <li class="nav-item">
                                  <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ $menu['label'] }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
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
                    </div><!-- end Pages -->


                </div><!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->
