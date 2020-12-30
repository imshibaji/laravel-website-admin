<div class="col-md-6 col-lg-3">
    <div class="card report-card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <p class="text-dark font-weight-semibold font-14">{{$title}}</p>
                    <h3 class="my-3">{{$price}}</h3>
                    <p class="mb-0 text-truncate"><span class="text-{{ ($updown == 'up')? 'success' : 'danger' }}"><i class="mdi mdi-trending-{{$updown}}"></i>{{$percentage}}</span> {{$desc}}</p>
                </div>
                <div class="col-4 align-self-center">
                    <div class="report-main-icon bg-light-alt">
                        <i data-feather="{{$icon}}" class="{{$iconClass}}"></i>
                    </div>
                </div>
            </div>
        </div><!--end card-body-->
    </div><!--end card-->
</div> <!--end col-->
