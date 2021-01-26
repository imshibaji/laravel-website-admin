<x-admin-base title="Business Title" nosidebar>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mt-0 header-title">Business List</h4>
                <p class="text-muted mb-3">This is the Business list</p>
            </div>
        </div>

        <x-admin-datatable>
            <x-slot name="thead">
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Registration No</th>
                    <th>Activated</th>
                    <th>Default</th>
                    {{-- <th>Actions</th> --}}
                </tr>
            </x-slot>
            <x-slot name="tbody">
            @foreach ($businesses as $business)
            <tr>
                <td class="text-center"><img src="{{ $business->imgUrl()? $business->imgUrl() : '' }}" height="40px" /></td>
                <td>{{ $business->name ?? '' }}</td>
                <td>{{ $business->type ?? '' }}</td>
                <td>{{ $business->registration_no ?? '' }}</td>
                <td>{{ $business->is_active }}</td>
                <td>{{ $business->default }}</td>
                {{--<td class="text-center">
                    <div class="btn-group btn-group-sm" role="group">
                        {{-- @include('admin::user.modals.view') --}}
                        {{-- @if($user->can('edit user') || auth()->user()->id == 1) --}}
                            {{-- @include('admin::user.modals.edit') --}}
                        {{-- @endif --}}
                        {{-- @if($user->can('delete user') || auth()->user()->id == 1) --}}
                            {{-- @include('admin::user.modals.delete') --}}
                        {{-- @endif --}}
                    {{-- </div> --}}
                </td>
            </tr>
            @endforeach
            </x-slot>
        </x-admin-datatable>
    </div>
</div>
</x-admin-base>
