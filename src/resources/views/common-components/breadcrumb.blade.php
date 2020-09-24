<div class="page-title-box">
    <div class="float-right">
      <ol class="breadcrumb">
        @if(isset($item1))
        <li class="breadcrumb-item">
          <a href="{{ $item1_link ?? 'javascript:void(0);' }}">{{ $item1 }}</a>
        </li>
        @endIf
        @if(isset($item2))
        <li class="breadcrumb-item">
          <a href="{{ $item2_link ?? 'javascript:void(0);' }}">{{ $item2 }}</a>
        </li>
        @endIf
        <li class="breadcrumb-item active">{{ $title }}</li>
      </ol>
    </div>
  <h4 class="page-title">{{ $title }}</h4>
</div><!--end page-title-box-->
