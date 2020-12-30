<li class="hidden-sm">
    @foreach ($trans as $item)
        @if(isset($item['selected']))
        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
            aria-haspopup="false" aria-expanded="false">
            {{$item['label']}} <img src="{{ URL::asset( $assetLink . '/images/flags/'. $item['icon'] .'_flag.jpg')}}" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i>
        </a>
        @endif
    @endforeach

    <div class="dropdown-menu dropdown-menu-right">
        @foreach ($trans as $item)
            <a class="dropdown-item" href="{{$item['link']}}"><span> {{$item['label']}} </span><img src="{{ URL::asset( $assetLink . '/images/flags/'.$item['icon'].'_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
        @endforeach
    </div>
</li>
