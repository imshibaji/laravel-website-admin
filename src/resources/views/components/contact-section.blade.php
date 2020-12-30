<div class="col-lg-3">
    <div class="card client-card">
        <div class="card-body text-center">
            <img src="{{ $userimg ?? URL::asset($assetLink .'/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xl">
            <h5 class=" client-name">{{$name}}</h5>
            <span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>{{$location}}</span>
            <span class="text-muted"><i class="dripicons-phone mr-2 text-info"></i>{{$mobile}}</span>
            <p class="text-muted text-center mt-3">{{$description}}</p>
            <a href="{{$readmorelink}}" class="btn btn-sm btn-gradient-secondary">Read More</a>
            <a href="{{$messagelink}}" class="btn btn-sm btn-gradient-primary">Message</a>
        </div>
        <!--end card-body-->
    </div>
    <!--end card-->
</div>
<!--end col-->
