<li class="dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <span class="ml-1 p-2 bg-soft-classic nav-user-name hidden-sm rounded">{{ config('admin.top_left_menu.label') }} <i class="mdi mdi-chevron-down"></i> </span>
    </a>
    <div class="dropdown-menu dropdown-xl dropdown-menu-left p-0">
        <div class="row no-gutters">
            <div class="col-12 col-lg-6">
                <div class="text-center system-text">
                    <h4 class="text-white">{{ $title }}</h4>
                    <p class="text-white">{{ $subtitle }}</p>
                    <a href="{{ $link }}" class="btn btn-sm btn-pink mt-2">
                        {{ $btn_label }}
                    </a>
                </div>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        @for ($i=0; $i < count($items); $i++)
                            <div class="carousel-item {{ $i==0 ? 'active' : ''}}">
                                <img src="{{ $items[$i]['src'] }}" class="d-block img-fluid" alt="{{ $items[$i]['title'] }}">
                            </div>
                        @endfor

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
                            $items = $menus;
                        @endphp
                        @for ($i = 0; $i < count($items); $i++)
                        @if($i<8)
                            <div class="col-6">
                                <a class="dropdown-item mb-2" href="{{ config('admin.prefix', 'admin') . $items[$i]['link'] }}">{{ $items[$i]['label'] }}</a>
                            </div>
                        @endif
                        @endfor
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
</li>
