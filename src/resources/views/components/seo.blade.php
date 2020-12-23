<div class="card-body">
    <!-- Nav tabs -->
    <ul class="nav nav-pills nav-justified" role="tablist">
        <li class="nav-item waves-effect waves-light">
            <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab" aria-selected="true">Common Meta Tags</a>
        </li>
        <li class="nav-item waves-effect waves-light">
            <a class="nav-link" data-toggle="tab" href="#facebook" role="tab" aria-selected="false">Facebook Tags</a>
        </li>
        <li class="nav-item waves-effect waves-light">
            <a class="nav-link" data-toggle="tab" href="#twitter" role="tab" aria-selected="false">Twitter Tags</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane p-3 active" id="home-1" role="tabpanel">
            <input type="text" id="meta-title" class="form-control form-control-lg" name="meta_title" placeholder="Meta Title" value="{{ $seo->meta_title ?? '' }}">
            <input type="text" id="meta-keyword" class="form-control form-control-lg" name="meta_keywords" placeholder="Meta Keyword" value="{{ $seo->meta_keywords ?? '' }}">
            <textarea id="meta-description" class="form-control form-control-lg" name="meta_description" placeholder="Meta Description">{{ $seo->meta_description ?? '' }}</textarea>
            <select id="meta-robots" class="form-control form-control-lg" name="meta_robots">
                <option value="index, follow" @if($seo->meta_robots == 'index, follow') selected @endIf>Indexed and Follow</option>
                <option value="noindex, follow" @if($seo->meta_robots == 'noindex, follow') selected @endIf>No Indexed and Follow</option>
                <option value="index, nofollow" @if($seo->meta_robots == 'index, nofollow') selected @endIf>Indexed But Don't Follow</option>
                <option value="noindex, nofollow" @if($seo->meta_robots == 'noindex, nofollow') selected @endIf>No Indexed and No Follow</option>
            </select>
            {{-- <input type="text" id="meta-revisited-after" class="form-control form-control-lg" name="meta-revisited-after" placeholder="Revisited After. eg: 10 Days"> --}}
            <input type="text" id="meta-author" class="form-control form-control-lg" name="meta_author" placeholder="Meta Author" value="{{ $seo->meta_author ?? Auth::user()->name }}">
        </div>
        <div class="tab-pane p-3" id="facebook" role="tabpanel">
            <p class="text-muted mb-0">
                <input type="text" id="meta-og-url" class="form-control form-control-lg" name="meta_og_url" placeholder="Meta Open Graph url" value="{{ $seo->meta_og_url ?? '' }}">
                <input type="text" id="meta-og-title" class="form-control form-control-lg" name="meta_og_title" placeholder="Meta Open Graph Title" value="{{ $seo->meta_og_title ?? '' }}">
                <input type="text" id="meta-og-keyword" class="form-control form-control-lg" name="meta_og_keywords" placeholder="Meta Open Graph Keywords" value="{{ $seo->meta_og_keywords ?? '' }}">
                <textarea id="meta-og-description" class="form-control form-control-lg" name="meta_og_description" placeholder="Meta Open Graph Description">{{ $seo->meta_og_description ?? '' }}</textarea>

                <input type="text" id="meta-og-site-name" class="form-control form-control-lg" name="meta_og_site_name" placeholder="Meta Open Graph Site Name" value="{{ $seo->meta_og_site_name ?? '' }}">
                <input type="text" id="meta-og-local" class="form-control form-control-lg" name="meta_og_local" placeholder="Meta Open Graph Local" value="{{ $seo->meta_og_local ?? '' }}">
                <input type="text" id="meta-og-image" class="form-control form-control-lg" name="meta_og_image" placeholder="Meta Open Graph Image" value="{{ $seo->meta_og_image ?? '' }}">
                <input type="text" id="meta-og-video" class="form-control form-control-lg" name="meta_og_video" placeholder="Meta Open Graph Video" value="{{ $seo->meta_og_video ?? '' }}">
                <input type="text" id="meta-og-type" class="form-control form-control-lg" name="meta_og_type" placeholder="Meta Open Graph Type" value="{{ $seo->meta_og_type ?? '' }}">
                <input type="text" id="meta-fb-admins" class="form-control form-control-lg" name="meta_fb_admins" placeholder="Meta Facebook Admin" value="{{ $seo->meta_fb_admins ?? '' }}">
                <input type="text" id="meta-fb-app-id" class="form-control form-control-lg" name="meta_fb_app_id" placeholder="Meta Facebook App Id" value="{{ $seo->meta_fb_app_id ?? '' }}">
            </p>
        </div>
        <div class="tab-pane p-3" id="twitter" role="tabpanel">
            <p class="text-muted mb-0">
                <input type="text" id="meta-twitter-card" class="form-control form-control-lg" name="meta_twitter_card" placeholder="Meta Twitter Card" value="{{ $seo->meta_twitter_card ?? '' }}">
                <input type="text" id="meta-twitter-title" class="form-control form-control-lg" name="meta_twitter_title" placeholder="Meta Twitter Title" value="{{ $seo->meta_twitter_title ?? '' }}">
                <input type="text" id="meta-twitter-keyword" class="form-control form-control-lg" name="meta_twitter_keywords" placeholder="Meta Twitter Keywords" value="{{ $seo->meta_twitter_keywords ?? '' }}">
                <textarea id="meta-twitter-description" class="form-control form-control-lg" name="meta_twitter_description" placeholder="Meta Twitter Description">{{ $seo->meta_twitter_description ?? '' }}</textarea>
                <input type="text" id="meta-twitter-site" class="form-control form-control-lg" name="meta_twitter_site" placeholder="Meta Twitter Site" value="{{ $seo->meta_twitter_site ?? '' }}">
                <input type="text" id="meta-twitter-creator" class="form-control form-control-lg" name="meta_twitter_creator" placeholder="Meta Twitter Creator" value="{{ $seo->meta_twitter_creator ?? '' }}">
                <input type="text" id="meta-twitter-image-src" class="form-control form-control-lg" name="meta_twitter_image_src" placeholder="Meta Twitter Image Source" value="{{ $seo->meta_twitter_image_src ?? '' }}">
                <input type="text" id="meta-twitter-player" class="form-control form-control-lg" name="meta_twitter_player" placeholder="Meta Twitter Player" value="{{ $seo->meta_twitter_player ?? '' }}">
            </p>
        </div>
    </div>
</div>

@section('footerScript')
@parent
<script>
window.addEventListener('DOMContentLoaded', () => {
    $('#title').on('keyup', function(){
        var slag = this.value.replace(/ /g, "-").toLocaleLowerCase();
        $('#slag').val(slag);
        $('#inline-url').html(slag);
        $('#meta-title').val(this.value);
        $('#meta-og-title').val(this.value);
        $('#meta-twitter-title').val(this.value);
    });
    $('#meta-title').on('keyup', function(){
        $('#meta-og-title').val(this.value);
        $('#meta-twitter-title').val(this.value);
    });
    $('#meta-keyword').on('keyup', function(){
        $('#meta-og-keyword').val(this.value);
        $('#meta-twitter-keyword').val(this.value);
    });
    $('#meta-description').on('keyup', function(){
        $('#meta-og-description').val(this.value);
        $('#meta-twitter-description').val(this.value);
    });
});
</script>
@endsection
