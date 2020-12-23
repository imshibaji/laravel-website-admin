<?php

namespace Shibaji\Admin\Http\Controllers;

use Shibaji\Admin\Models\Setting;
use Illuminate\Http\Request;

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
        //
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
        $setting->name = $req->name;
        $setting->type = $req->type;
        $setting->value =  json_encode($req->input());
        $setting->save();

        // return $values;

        $req->session()->flash('status', 'Settings Add Successfully');
        return redirect(config('admin.prefix', 'admin'). '/settings');
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
        $setting->name = $req->name;
        $setting->type = $req->type;
        $setting->value = json_encode($req->value);
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

        $setting->delete();
        session()->flash('status', 'Settings Deleted Successfully');
        return redirect(config('admin.prefix', 'admin'). '/settings');
    }
}
