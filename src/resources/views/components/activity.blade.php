<div class="activity">
    @foreach ($datas as $data)
        <div class="activity-info">
            <div class="icon-info-activity">
                <i class="mdi mdi-{{ $data['icon'] ?? 'checkbox-marked-circle-outline'}} bg-soft-{{ $data['color'] ?? 'primary'}}"></i>
            </div>
            <div class="activity-info-text">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0 w-75">{{ $data['title'] ?? 'Task finished' }}</h4>
                </div>
                <p class="text-muted mt-3">
                    <p>Status: {{ $data['desc'] ?? 'Created on 05 Jan 2021' }}</p>
                    <div class="btn-group">
                        @if (isset($data['label1']))
                            <a href="{{ $data['link1'] ?? '#' }}" class="btn btn-sm btn-{{ $data['color1'] ?? 'secondary' }}">{{ $data['label1'] ?? 'Readmore' }}</a>
                        @endif
                        @if (isset($data['label2']))
                        <a href="{{ $data['link2'] ?? '#' }}" class="btn btn-sm btn-{{ $data['color2'] ?? $data['color'] ?? 'primary' }}">{{ $data['label2'] ?? 'Readmore' }}</a>
                        @endif
                    </div>
                </p>
            </div>
        </div>
    @endforeach
</div>
