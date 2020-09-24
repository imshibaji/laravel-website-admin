<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="hidden-sm">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    English <img src="{{ URL::asset( $assetLink . '/images/flags/us_flag.jpg')}}" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="{{ URL::asset( $assetLink . '/images/flags/germany_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                    <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="{{ URL::asset( $assetLink . '/images/flags/italy_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                    <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="{{ URL::asset( $assetLink . '/images/flags/french_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                    <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="{{ URL::asset( $assetLink . '/images/flags/spain_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                    <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="{{ URL::asset( $assetLink . '/images/flags/russia_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ti-bell noti-icon"></i>
                    <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                    <h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
                        Notifications <span class="badge badge-light badge-pill">2</span>
                    </h6>
                    <div class="slimscroll notification-list">
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-primary">
                                    <i class="la la-cart-arrow-down text-white"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-success">
                                    <i class="la la-group text-white"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-pink">
                                    <i class="la la-list-alt text-white"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-warning">
                                    <i class="la la-truck text-white"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-info">
                                    <i class="la la-check-circle text-white"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="{{ 'https://www.gravatar.com/avatar/'.md5(Auth::user()->email) ?? URL::asset( $assetLink . '/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle" />
                    <span class="ml-1 nav-user-name hidden-sm">{{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
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
            <li class="mr-2">
                <a href="#" class="nav-link" data-toggle="modal" data-animation="fade" data-target=".modal-rightbar">
                    <i data-feather="align-right" class="align-self-center"></i>
                </a>
            </li>
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <a href="#">
                    <span class="responsive-logo">
                        <img src="{{ URL::asset( $assetLink . '/images/logo-sm.png')}}" alt="logo-small" class="logo-sm align-self-center" height="34">
                    </span>
                </a>
            </li>
            <li>
                <button class="button-menu-mobile nav-link">
                    <i data-feather="menu" class="align-self-center"></i>
                </button>
            </li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <span class="ml-1 p-2 bg-soft-classic nav-user-name hidden-sm rounded">{{ config('admin.top_left_menu.label') }} <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-xl dropdown-menu-left p-0">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-6">
                            <div class="text-center system-text">
                                <h4 class="text-white">{{ config('admin.top_left_menu.dashboard.title') }}</h4>
                                <p class="text-white">{{ config('admin.top_left_menu.dashboard.subtitle') }}</p>
                                <a href="{{ config('admin.top_left_menu.dashboard.link') }}" class="btn btn-sm btn-pink mt-2">
                                    {{ config('admin.top_left_menu.dashboard.btn_label') }}
                                </a>
                            </div>
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ 'https://source.unsplash.com/random/800x600' ?? URL::asset( $assetLink . '/images/dashboard/dash-1.png')}}" class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ 'https://source.unsplash.com/random/800x600' ?? URL::asset( $assetLink . '/images/dashboard/dash-4.png')}}" class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ 'https://source.unsplash.com/random/800x600' ?? URL::asset( $assetLink . '/images/dashboard/dash-2.png')}}" class="d-block img-fluid" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ 'https://source.unsplash.com/random/800x600' ?? URL::asset( $assetLink . '/images/dashboard/dash-3.png')}}" class="d-block img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-12 col-lg-6">
                            <div class="divider-custom mb-0">
                                <div class="divider-text bg-light">Hot Links</div>
                            </div>
                            <div class="p-4">
                                <div class="row">
                                    @php
                                        $items = config('admin.top_left_menu.hotmenus');
                                    @endphp
                                    @for ($i = 0; $i < count($items); $i++)
                                    @if($i<8)
                                        <div class="col-6">
                                            <a class="dropdown-item mb-2" href="{{ $items[$i]['link'] }}">{{ $items[$i]['label'] }}</a>
                                        </div>
                                    @endif
                                    @endfor
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </li>
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" id="AllCompo" placeholder="Search..." class="form-control">
                    <a href=""><i class="fas fa-search"></i></a>
                </form>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
