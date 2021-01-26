<?php

namespace Shibaji\Admin\Http\Controllers\Settings;

use Shibaji\Admin\Models\Setting\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Shibaji\Admin\Http\Controllers\Controller;

class SettingsController extends Controller
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

        return view('admin::settings.list', ['settings' => Setting::all()]);
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

        $setting = new Setting();
        $setting->website = $req->website;
        $setting->analytics_id = $req->analytics_id;
        $setting->business_id = $req->business_id;
        $setting->site_title = $req->site_title;
        $setting->site_meta_keywords = $req->site_meta_keywords;
        $setting->site_meta_description = $req->site_meta_description;
        $setting->site_logo = $req->file('site_logo')->store('public/websites');
        $setting->save();

        if($setting){
            $req->session()->flash('status', 'Settings Add Successfully');
            return redirect(config('admin.prefix', 'admin'). '/settings');
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
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
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
    public function update(Request $req, Setting $setting)
    {
        if(auth()->user()->can('edit setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }
        // $setting = new Setting();
        $setting->website = $req->website;
        $setting->analytics_id = $req->analytics_id;
        $setting->business_id = $req->business_id;
        $setting->site_title = $req->site_title;
        $setting->site_meta_keywords = $req->site_meta_keywords;
        $setting->site_meta_description = $req->site_meta_description;

        if($req->file('site_logo')->getClientOriginalName() && Storage::delete($setting->site_logo)){
            $setting->site_logo = $req->file('site_logo')->store('public/websites');
        }else if($req->file('site_logo')->getClientOriginalName()) {
            $setting->site_logo = $req->file('site_logo')->store('public/websites');
        }

        $setting->save();

        $req->session()->flash('status', 'Settings Updated Successfully');
        return redirect(config('admin.prefix', 'admin'). '/settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        if(auth()->user()->can('delete setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        if(Storage::delete($setting->site_logo)){
            $setting->delete();
        }

        session()->flash('status', 'Settings Deleted Successfully');
        return redirect(config('admin.prefix', 'admin'). '/settings');
    }
}
