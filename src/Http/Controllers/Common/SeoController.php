<?php
namespace Shibaji\Admin\Http\Controllers\Common;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\SeoOptimization;

class SeoController extends Controller
{
    protected $isComponent;

    public function __construct()
    {
        $this->isComponent = false;
    }

    public function index(){
        if(auth()->user()->can('view seo') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        $seos = SeoOptimization::all();
        return view('admin::seo.list', compact('seos'));
    }

    public function show(SeoOptimization $seo){
        return $seo;
    }

    public function create(){
        return view('admin::seo.add');
    }

    public function storeBy(Request $req){

        $this->isComponent = true;
        return $this->store($req);
    }

    public function store(Request $req){
        if(auth()->user()->can('add view') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        $seo = new SeoOptimization();
        $seo->url = $req->url;
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

        Artisan::call('view:clear');
        session()->flash('status', ['type' => 'success', 'message' =>'Seo Data Added.']);

        if($this->isComponent){
            return $seo->id;
        }else{
            return redirect(route('admin.seo'));
        }
    }

    public function edit(SeoOptimization $seo){
        return view('admin::seo.edit', compact('seo'));
    }

    public function updateById(Request $req, $id){
        $this->isComponent = true;

        return $this->update($req, SeoOptimization::find($id));
    }

    public function update(Request $req, SeoOptimization $seo){
        if(auth()->user()->can('view edit') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        $seo->url = $req->url;
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

        Artisan::call('view:clear');
        session()->flash('status', ['type' => 'success', 'message' =>'Seo Data Updated.']);

        if($this->isComponent){
            return $seo->id;
        }else{
            return redirect(route('admin.seo'));
        }

    }

    public function delete($id){
        $seo = SeoOptimization::find($id);
        if($seo){
            return $this->destroy($seo);
        }else{
            return true;
        }
    }
    public function destroy(SeoOptimization $seo){
        if(auth()->user()->can('delete seo') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        $seo->delete();
        Artisan::call('view:clear');

        session()->flash('status', ['type' => 'success', 'message' =>'Seo Data deleted.']);
        return redirect(route('admin.seo'));
    }
}
