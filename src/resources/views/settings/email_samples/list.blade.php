<x-admin-base title="Website List" item2="All Settings" link2="{{route('admin.business')}}">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="mt-0 header-title">Website List</h4>
                            <p class="text-muted mb-3">This is importent for site page optimizations.</p>
                        </div>
                        <div class="col-md-2 text-center text-md-right py-md-3">
                            @can('add setting')
                                @include('admin::settings.email_samples.modals.add')
                                {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-secondary mb-2 mb-lg-0">Add User</a> --}}
                            @endcan
                        </div>
                    </div>
                    <x-admin-datatable>
                        <x-slot name="thead">
                        <tr>
                            <th>Logo</th>
                            <th>Website Title</th>
                            <th>Website URL</th>
                            <th>Link with</th>
                            {{-- <th>Created At</th> --}}
                            {{-- <th>Updated At</th> --}}
                            <th>Actions</th>
                        </tr>
                        </x-slot>
                        <x-slot name="tbody">
                        @foreach ($settings as $setting)
                        <tr>
                            <td><img src="{{ ($setting->site_logo)? '/storage/websites/'.basename($setting->site_logo) : '' }}" height="50px" /></td>
                            <td>{{ $setting->site_title ?? '' }}</td>
                            <td>{{ $setting->website ?? '' }}</td>
                            <td>{{ $setting->business_id }}</td>
                            {{-- <td>{{ $role->created_at}}</td> --}}
                            {{-- <td>{{ $role->updated_at}}</td> --}}
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    @include('admin::settings.email_samples.modals.view')
                                    @can('edit setting')
                                        @include('admin::settings.email_samples.modals.edit')
                                    @endcan
                                    @can('delete setting')
                                        @include('admin::settings.email_samples.modals.delete')
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </x-slot>
                    </x-admin-datatable>
                </div>
            </div>
        </div>
    </div>
</div><!-- container -->
</x-admin-base>
