<div class="col-lg-3">
    <div class="card">
        <div class="card-body">
                @if(isset($popular))
                    <span class="badge badge-pink a-animate-blink mt-0">POPULAR</span>
                    @endif
            <div class="pricingTable1 text-center">


                <h6 class="title1 py-3 m-0">{{$title}}</h6>
                <p class="text-muted p-3 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                <div class="p-3 m-2">
                    <h3 class="amount amount-border d-inline-block">{{$price}}</h3>
                    <small class="font-12 text-muted">/{{$per}}</small>
                </div>
                <hr class="hr-dashed">
                <ul class="list-unstyled pricing-content-2 text-left py-3 border-0 mb-0">
                    <li>30GB Disk Space</li>
                    <li>30 Email Accounts</li>
                    <li>30GB Monthly Bandwidth</li>
                    <li>06 Subdomains</li>
                    <li>10 Domains</li>
                </ul>

                <a href="#" class="btn btn-dark py-2 px-5 font-16"><span>Sign up</span></a>
            </div><!--end pricingTable-->
        </div><!--end card-body-->
    </div> <!--end card-->
</div><!--end col-->
