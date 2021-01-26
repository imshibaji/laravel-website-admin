<div class="col-6 col-md">
    <div class="card">
        <div class="card-body">
            <h5 class="mt-0 mb-2 header-title">{{ $title }}</h5>
            <div class="media">
                <i data-feather="{{ $icon }}" class="align-self-center icon-lg icon-dual-{{ $color }}"></i>
                <div class="media-body align-self-center text-truncate ml-3">
                    <h2 class="font-24 m-0 font-weight-semibold">
                        {{ $price }}
                        <span class="text-{{ ($updown=='up')? 'success' : 'danger' }} font-12 font-weight-semibold ml-2"><i class="mdi mdi-trending-{{$updown}} mr-1"></i>{{ $percent }}</span>
                    </h2>
                </div><!--end media-body-->
            </div><!--end media-->
        </div><!--end card-body-->
    </div><!--end card-->
</div><!-- end col-->
