<x-admin-modal btnname="Add SEO" size="lg" type="secondary" title="Add Page Optimization" action="{{route('admin.seo.store')}}" method="POST">
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
            <input type="text" id="meta-url" class="form-control form-control-lg" name="url" placeholder="Meta Tag URL">
            <input type="text" id="meta-title" class="form-control form-control-lg" name="meta_title" placeholder="Meta Title">
            <input type="text" id="meta-keyword" class="form-control form-control-lg" name="meta_keywords" placeholder="Meta Keyword">
            <textarea id="meta-description" class="form-control content" name="meta_description" placeholder="Meta Description"></textarea>
            <select id="meta-robots" class="form-control form-control-lg" name="meta_robots">
                <option value="index, follow">Indexed and Follow</option>
                <option value="noindex, follow">No Indexed and Follow</option>
                <option value="index, nofollow">Indexed But Don't Follow</option>
                <option value="noindex, nofollow">No Indexed and No Follow</option>
            </select>
            {{-- <input type="text" id="meta-revisited-after" class="form-control form-control-lg" name="meta-revisited-after" placeholder="Revisited After. eg: 10 Days"> --}}
            <input type="text" id="meta-author" class="form-control form-control-lg" name="meta_author" placeholder="Meta Author" value="{{ Auth::user()->name }}">
        </div>
        <div class="tab-pane p-3" id="facebook" role="tabpanel">
            <p class="text-muted mb-0">
                <input type="text" id="meta-og-url" class="form-control form-control-lg" name="meta_og_url" placeholder="Meta Open Graph url">
                <input type="text" id="meta-og-title" class="form-control form-control-lg" name="meta_og_title" placeholder="Meta Open Graph Title">
                <input type="text" id="meta-og-keyword" class="form-control form-control-lg" name="meta_og_keywords" placeholder="Meta Open Graph Keywords">
                <textarea id="meta-og-description" class="form-control content" name="meta_og_description" placeholder="Meta Open Graph Description"></textarea>

                <input type="text" id="meta-og-site-name" class="form-control form-control-lg" name="meta_og_site_name" placeholder="Meta Open Graph Site Name">
                <input type="text" id="meta-og-local" class="form-control form-control-lg" name="meta_og_local" placeholder="Meta Open Graph Local">
                <input type="text" id="meta-og-image" class="form-control form-control-lg" name="meta_og_image" placeholder="Meta Open Graph Image">
                <input type="text" id="meta-og-video" class="form-control form-control-lg" name="meta_og_video" placeholder="Meta Open Graph Video">
                <input type="text" id="meta-og-type" class="form-control form-control-lg" name="meta_og_type" placeholder="Meta Open Graph Type">
                <input type="text" id="meta-fb-admins" class="form-control form-control-lg" name="meta_fb_admins" placeholder="Meta Facebook Admin">
                <input type="text" id="meta-fb-app-id" class="form-control form-control-lg" name="meta_fb_app_id" placeholder="Meta Facebook App Id">
            </p>
        </div>
        <div class="tab-pane p-3" id="twitter" role="tabpanel">
            <p class="text-muted mb-0">
                <input type="text" id="meta-twitter-card" class="form-control form-control-lg" name="meta_twitter_card" placeholder="Meta Twitter Card">
                <input type="text" id="meta-twitter-title" class="form-control form-control-lg" name="meta_twitter_title" placeholder="Meta Twitter Title">
                <input type="text" id="meta-twitter-keyword" class="form-control form-control-lg" name="meta_twitter_keywords" placeholder="Meta Twitter Keywords">
                <textarea id="meta-twitter-description" class="form-control form-control-lg" name="meta_twitter_description" placeholder="Meta Twitter Description"></textarea>
                <input type="text" id="meta-twitter-site" class="form-control form-control-lg" name="meta_twitter_site" placeholder="Meta Twitter Site">
                <input type="text" id="meta-twitter-creator" class="form-control form-control-lg" name="meta_twitter_creator" placeholder="Meta Twitter Creator">
                <input type="text" id="meta-twitter-creator-src" class="form-control form-control-lg" name="meta_twitter_image_src" placeholder="Meta Twitter Image Source">
                <input type="text" id="meta-twitter-player" class="form-control form-control-lg" name="meta_twitter_player" placeholder="Meta Twitter Player">
            </p>
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
