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
        {{--
        <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="{{ URL::asset( $assetLink . '/images/flags/italy_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
        <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="{{ URL::asset( $assetLink . '/images/flags/french_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
        <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="{{ URL::asset( $assetLink . '/images/flags/spain_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
        <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="{{ URL::asset( $assetLink . '/images/flags/russia_flag.jpg')}}" alt="" class="ml-2 float-right" height="14"/></a>
        --}}
    </div>

</li>
