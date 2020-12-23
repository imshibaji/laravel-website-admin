<li class="dropdown notification-list">
    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ti-bell noti-icon"></i>
        @if($counts>0)<span class="badge badge-danger badge-pill noti-icon-badge">{{ $counts ?? ''}}</span>@endif
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

        <h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
            Notifications @if($counts>0)<span class="badge badge-light badge-pill">{{ $counts ?? ''}}</span>@endif
        </h6>
        <div class="slimscroll notification-list">
            @foreach ($datas as $info)
            <!-- item-->
            <a href="#" class="dropdown-item py-3">
                <small class="float-right text-muted pl-2">{{ $info->created_at ?? '2 min ago' }}</small>
                <div class="media">
                    <div class="avatar-md bg-primary">
                        <i class="la la-{{ $info->icon ?? 'cart-arrow-down'}} text-white"></i>
                    </div>
                    <div class="media-body align-self-center ml-2 text-truncate">
                        <h6 class="my-0 font-weight-normal text-dark">{{ $info->title ?? 'Your order is placed' }}</h6>
                        <small class="text-muted mb-0">{{$info->details ?? 'Dummy text of the printing and industry.'}}</small>
                    </div><!--end media-body-->
                </div><!--end media-->
            </a><!--end-item-->
            @endforeach
        </div>
        <!-- All-->
        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
            View all <i class="fi-arrow-right"></i>
        </a>
    </div>
</li>
