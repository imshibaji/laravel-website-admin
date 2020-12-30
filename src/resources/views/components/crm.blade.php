<div class="col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4 align-self-center">
                    <div class="icon-info">
                        <i data-feather="{{ $icon }}" class="{{ $iconClass }}"></i>
                    </div>
                </div>
                <div class="col-8 align-self-center text-right">
                    <div class="ml-2">
                        <p class="mb-1 text-muted">{{ $title }}</p>
                        <h3 class="mt-0 mb-1 font-weight-semibold d-inline-block">{{ $cost }}</h3>

                        @if(isset($isActive))
                            <span class="badge badge-soft-success mt-1 shadow-none">Active</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="progress mt-2" style="height:3px;">
                <div class="{{ $progressClass }}" role="progressbar" style="width: {{ $progressCost }}%;" aria-valuenow="{{ $progressCost }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->
