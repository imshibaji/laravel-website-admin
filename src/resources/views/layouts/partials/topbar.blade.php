<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <x-admin-company-selector :link="route('admin.businesses.index')" />

            <li class="mr-2">
                <a href="#" id="night_mode" class="nav-link">
                    @if($color_scheme == 'light')
                        <i data-feather="moon" title="Night Mode" class="align-self-center"></i>
                    @else
                        <i data-feather="sun" title="Day Mode" class="align-self-center"></i>
                    @endIf
                </a>
            </li>

            @if (config('admin.top_right_menu.lang.view', true))
                <x-admin-translate />
            @endif

            @if (config('admin.top_right_menu.notify', true))
                <x-admin-notification />
            @endif

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="{{ 'https://www.gravatar.com/avatar/'.md5(Auth::user()->email) ?? URL::asset( $assetLink . '/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle" />
                    <span class="ml-1 nav-user-name hidden-sm">{{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @foreach (config('admin.top_right_menu.profile_sub_menus', []) as $item)
                        <a class="dropdown-item" href="{{ config('admin.prefix', 'admin') . $item['link']}}"><i class="{{$item['icon']}} text-muted mr-2"></i> {{$item['label']}}</a>
                    @endforeach
                    {{--
                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                    --}}

                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="/logout"><i class="dripicons-exit text-muted mr-2"></i> Logout</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="dripicons-exit text-muted mr-2"></i>{{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>

            @if (config('admin.right_panel_show', true))
                <li class="mr-2">
                    <a href="#" class="nav-link" data-toggle="modal" data-animation="fade" data-target=".modal-rightbar">
                        <i data-feather="align-right" class="align-self-center"></i>
                    </a>
                </li>
            @endif
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <a href="{{config('admin.prefix', '/')}}">
                    <span class="responsive-logo">
                        <img src="{{ config('admin.logo', URL::asset( $assetLink . '/images/logo-sm.png')) }}" alt="logo-small" class="logo-sm align-self-center" height="34">
                    </span>
                </a>
            </li>
            <li>
                <button class="button-menu-mobile nav-link">
                    <i data-feather="menu" class="align-self-center"></i>
                </button>
            </li>

            @if (config('admin.top_left_menu.view', false))
                <x-admin-shortcuts />
            @endif

            @if (config('admin.searchbar.view', false))
                <x-admin-search
                :action="config('admin.searchbar.action', '#')"
                :method="config('admin.searchbar.method', 'GET')"
                :data="config('admin.searchbar.suggestions', [])"
                />
            @endif

        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
