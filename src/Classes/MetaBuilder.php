<?php
namespace Shibaji\Admin\Classes;

use Shibaji\Admin\Models\SeoOptimization;

class MetaBuilder{

    public static function render($url){
        $seo = SeoOptimization::where('url', $url)->first();
        $out = '';

        // General
        // dd( $seo, $url);

        if(isset($seo) && $seo->id > 0){
            if ($seo->meta_title) $out .= '<meta name="title" content="'.$seo->meta_title.'">';
            if ($seo->meta_keywords) $out .= '<meta name="keywords" content="'.$seo->meta_keywords.'">';
            if ($seo->meta_description) $out .= '<meta name="description" content="'.$seo->meta_description.'">';
            if ($seo->meta_robots) $out .= '<meta name="robots" content="'.$seo->meta_robots.'">';
            if ($seo->meta_author) $out .= '<meta name="author" content="'.$seo->meta_author.'">';

            $out .= '<meta name="language" content="English">';
            // $out .= '<meta name="image" content="'.$seo->meta_title.'">';

            // Twitter
            if ($seo->meta_twitter_card) $out .= '<meta name="twitter:card" content="'.$seo->meta_twitter_card.'">';
            if ($seo->meta_twitter_title) $out .= '<meta name="twitter:title" content="'.$seo->meta_twitter_title.'">';
            if ($seo->meta_twitter_description) $out .= '<meta name="twitter:description" content="'.$seo->meta_twitter_description.'">';
            if ($seo->meta_twitter_site) $out .= '<meta name="twitter:site" content="'.$seo->meta_twitter_site.'">';
            if ($seo->meta_twitter_creator) $out .= '<meta name="twitter:creator" content="'.$seo->meta_twitter_creator.'">';
            if ($seo->meta_twitter_image_src) $out .= '<meta name="twitter:image:src" content="'.$seo->meta_twitter_image_src.'">';
            if ($seo->meta_twitter_player) $out .= '<meta name="twitter:player" content="'.$seo->meta_twitter_player.'">';


            // Open Graph general (Facebook, Pinterest & Google+)
            if ($seo->meta_og_url) $out .= '<meta name="og:url" content="'.$seo->meta_og_url.'">';
            if ($seo->meta_og_title) $out .= '<meta name="og:title" content="'.$seo->meta_og_title.'">';
            if ($seo->meta_og_description) $out .= '<meta name="og:description" content="'.$seo->meta_og_description.'">';
            if ($seo->meta_og_site_name) $out .= '<meta name="og:site_name" content="'.$seo->meta_og_site_name.'">';
            if ($seo->meta_og_local) $out .= '<meta name="og:locale" content="'.$seo->meta_og_local.'">';
            if ($seo->meta_og_image) $out .= '<meta name="og:image" content="'.$seo->meta_og_image.'">';
            if ($seo->meta_og_video) $out .= '<meta name="og:video" content="'.$seo->meta_og_video.'">';
            if ($seo->meta_fb_admins) $out .= '<meta name="og:admins" content="'.$seo->meta_fb_admins.'">';
            if ($seo->meta_fb_app_id) $out .= '<meta name="og:app_id" content="'.$seo->meta_fb_app_id.'">';
            if ($seo->meta_og_type) $out .= '<meta name="og:type" content="'.$seo->meta_og_type.'">';

            return $out;
        }else{
            return $out;
        }
    }
}
