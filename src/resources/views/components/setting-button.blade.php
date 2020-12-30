<div class="col-12 col-sm-6 col-md-4">
    <a href="{{$link ?? 'javascript.void(0)'}}">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 align-self-center text-center">
                        <i data-feather="{{ $icon ?? 'layers'}}" class="icon-lg"></i>
                    </div>
                    <div class="col-8 align-self-center">
                        <h4>{{$title ?? 'The Title'}}</h4>
                        <p>{{$desc ?? 'The basic Description'}}</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

