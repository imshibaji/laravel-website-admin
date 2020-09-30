<?php
namespace Shibaji\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Shibaji\Admin\Models\SeoOptimization;

class SeoController{
    public function show($id){
        $seo = SeoOptimization::find($id);;
        return $seo;
    }

    public function store(Request $req){
        $seo = new SeoOptimization();
        $seo->meta_title = $req->meta_title;
        $seo->meta_keywords = $req->meta_keywords;
        $seo->meta_description = $req->meta_description;
        $seo->meta_robots = $req->meta_robots;
        $seo->meta_author = $req->meta_author;

        // Fb and Media
        $seo->meta_og_url = $req->meta_og_url;
        $seo->meta_og_title = $req->meta_og_title;
        $seo->meta_og_keywords = $req->meta_og_keywords;
        $seo->meta_og_description = $req->meta_og_description;
        $seo->meta_og_site_name = $req->meta_og_site_name;
        $seo->meta_og_local = $req->meta_og_local;
        $seo->meta_og_image = $req->meta_og_image;
        $seo->meta_og_video = $req->meta_og_video;
        $seo->meta_og_type = $req->meta_og_type;
        $seo->meta_fb_admins = $req->meta_fb_admins;
        $seo->meta_fb_app_id = $req->meta_fb_app_id;


        // Twitter
        $seo->meta_twitter_card = $req->meta_twitter_card;
        $seo->meta_twitter_title = $req->meta_twitter_title;
        $seo->meta_twitter_keywords = $req->meta_twitter_keywords;
        $seo->meta_twitter_description = $req->meta_twitter_description;
        $seo->meta_twitter_site = $req->meta_twitter_site;
        $seo->meta_twitter_creator = $req->meta_twitter_creator;
        $seo->meta_twitter_image_src = $req->meta_twitter_image_src;
        $seo->meta_twitter_player = $req->meta_twitter_player;
        $seo->save();

        return $seo->id;
    }

    public function update($id, Request $req){
        $seo = SeoOptimization::find($id);
        $seo->meta_title = $req->meta_title;
        $seo->meta_keywords = $req->meta_keywords;
        $seo->meta_description = $req->meta_description;
        $seo->meta_robots = $req->meta_robots;
        $seo->meta_author = $req->meta_author;

        // Fb and Media
        $seo->meta_og_url = $req->meta_og_url;
        $seo->meta_og_title = $req->meta_og_title;
        $seo->meta_og_keywords = $req->meta_og_keywords;
        $seo->meta_og_description = $req->meta_og_description;
        $seo->meta_og_site_name = $req->meta_og_site_name;
        $seo->meta_og_local = $req->meta_og_local;
        $seo->meta_og_image = $req->meta_og_image;
        $seo->meta_og_video = $req->meta_og_video;
        $seo->meta_og_type = $req->meta_og_type;
        $seo->meta_fb_admins = $req->meta_fb_admins;
        $seo->meta_fb_app_id = $req->meta_fb_app_id;


        // Twitter
        $seo->meta_twitter_card = $req->meta_twitter_card;
        $seo->meta_twitter_title = $req->meta_twitter_title;
        $seo->meta_twitter_keywords = $req->meta_twitter_keywords;
        $seo->meta_twitter_description = $req->meta_twitter_description;
        $seo->meta_twitter_site = $req->meta_twitter_site;
        $seo->meta_twitter_creator = $req->meta_twitter_creator;
        $seo->meta_twitter_image_src = $req->meta_twitter_image_src;
        $seo->meta_twitter_player = $req->meta_twitter_player;


        $seo->save();

        return $seo->id;
    }

    public function delete($id){

        $seo = SeoOptimization::find($id);
        $seo->delete();

        return $seo->id;
    }
}
