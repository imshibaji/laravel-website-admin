<li class="hidden-sm">
    @foreach ($companies as $item)
        @if(isset($item['selected']) && $item['selected']==true)
        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="fas fa-building fa-lg"></i>
            {{$item['title']}}  <i class="mdi mdi-chevron-down"></i>
        </a>
        @endif
    @endforeach

    <div class="dropdown-menu dropdown-menu-right">
        @foreach ($companies as $item)
            <a class="dropdown-item" href="{{$item['link']}}">
                <i class="fas fa-building fa-lg"></i>
                <span class="pl-2"> {{$item['title']}} </span>
            </a>
        @endforeach
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{$businesses_link}}">
            <i class="fas fa-cogs fa-lg"></i>
             <span class="pl-2"> Manage Businesses</span>
        </a>
    </div>
</li>
