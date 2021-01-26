<x-admin-base title="Reports">
    {{--<div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Reports List</h3>
                </div>
                <div class="col-md-2 my-auto text-right">
                    <a href="" class="btn btn-success">Add Report</a>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="row">
        <x-admin-analytics></x-admin-analytics>
        <x-admin-analytics chartclass="peity-donut"></x-admin-analytics>
        <x-admin-analytics updown="down" chartclass="peity-line" points="226,134">
            @slot('dataPeity')
            '{ "fill": ["#4d79f6", "#4d79f62b"], "innerRadius": 23, "radius": 32 }'
            @endslot
        </x-admin-analytics>
    </div>
</x-admin-base>
