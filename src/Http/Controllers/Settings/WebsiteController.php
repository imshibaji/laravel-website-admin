<?php

namespace Shibaji\Admin\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Setting\Website;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->can('view setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        return view('admin::settings.websites.list', ['websites' => Website::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->can('view setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        return view('admin::settings.general');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if(auth()->user()->can('add setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        $web = new Website();
        $web->website = $req->website;
        $web->analytics_id = $req->analytics_id;
        $web->business_id = $req->business_id;
        $web->site_title = $req->site_title;
        $web->site_meta_keywords = $req->site_meta_keywords;
        $web->site_meta_description = $req->site_meta_description;
        $web->save();

        if($req->file('logo')){
            $web->addMedia($req->file('logo'))->toMediaCollection('website');
        }


        if($web){
            $req->session()->flash('status', 'Settings Add Successfully');
            return redirect(config('admin.prefix', 'admin'). '/websites');
        }else{
            $req->session()->flash('status', 'Settings Add Not Successfully');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        if(auth()->user()->can('edit setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }
        $web = Website::find($id);
        $web->website = $req->website;
        $web->analytics_id = $req->analytics_id;
        $web->business_id = $req->business_id;
        $web->site_title = $req->site_title;
        $web->site_meta_keywords = $req->site_meta_keywords;
        $web->site_meta_description = $req->site_meta_description;
        $web->save();

        if($req->file('logo')){
            $web->addMedia($req->file('logo'))->toMediaCollection('website');
        }

        $req->session()->flash('status', 'Settings Updated Successfully');
        return redirect(config('admin.prefix', 'admin'). '/websites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->can('delete setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }
        $web = Website::find($id);
        $web->deleteFile();
        $web->delete();

        session()->flash('status', 'Website Deleted Successfully');
        return redirect(config('admin.prefix', 'admin'). '/websites');
    }
}
