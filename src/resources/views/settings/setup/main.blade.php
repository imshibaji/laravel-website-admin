<x-admin-base title="All settings">
    <div class="row">
        @php
            $setting = config('admin.left_side_menu.settings');
            $settings = $setting[1]['child'];
            // dd($setting[0]['child']);
        @endphp
        @for ($i = 0; $i < count($settings); $i++)
            <x-admin-setting-button link="{{config('admin.prefix') . $settings[$i]['link']}}" title="{{$settings[$i]['label']}}" icon="{{$settings[$i]['icon']}}" :desc="$settings[$i]['desc']" />
        @endfor
    </div>
</div>
</x-admin-base>

