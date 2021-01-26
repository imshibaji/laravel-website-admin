<x-admin-base title="Countries List" item2="All Settings" link2="{{route('admin.business')}}">
{{-- <div class="row"> --}}
    {{-- <div class="col-md-10"> --}}
        {{-- <h3>Categories List</h3> --}}
    {{-- </div> --}}
    {{-- <div class="col-md-2 text-right"> --}}
        {{-- <a href="{{ route('admin.countries.create') }}" class="btn btn-success">Add Country</a> --}}
    {{-- </div> --}}
{{-- </div> --}}
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <x-admin-datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Actions</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($countries as $country)
                            <tr>
                                <td>{{ $country->name }}</td>
                                <td>{{ $country->code }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('admin.countries.edit', $country) }}">Edit</a>
                                    @include('admin::settings.countries.delete')
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-admin-datatable>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <form action="{{ route('admin.countries.store')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{  $cntry->id ?? '' }}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <x-admin-input name="Country Name" fname="name" value="{{  $cntry->name ?? '' }}" />
                        <x-admin-input name="Country code" fname="code" value="{{  $cntry->code ?? '' }}" />
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
</x-admin-base>
