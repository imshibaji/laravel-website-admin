<div class="col-lg-3">
    <div class="card">
        <div class="card-body">

            <div class="pricingTable1 text-center">
                @if(isset($popular))
                <span class="badge badge-warning ml-auto a-animate-blink">POPULAR</span>
                @endif

                <img src="{{ URL::asset('assets/images/widgets/p-1.svg')}}" alt="" class="" height="100">
                <h6 class="title1 py-3 mt-2 mb-0">{{$title}} <small class="text-muted">Per {{$per}}</small></h6>
                <ul class="list-unstyled pricing-content-2">
                    <li>30GB Disk Space</li>
                    <li>30 Email Accounts</li>
                    <li>30GB Monthly Bandwidth</li>
                    <li>06 Subdomains</li>
                    <li>10 Domains</li>
                </ul>
                <hr class="hr-dashed my-4">
                <div class="text-center">
                    <h3 class="amount">{{$price}}<small class="font-12 text-muted">/{{$per}}</small></h3>
                </div>
                <a href="#" class="pricingTable-signup mt-3">sign up</a>
            </div><!--end pricingTable-->
        </div><!--end card-body-->
    </div> <!--end card-->
</div><!--end col-->
