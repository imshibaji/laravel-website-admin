<?php

namespace Shibaji\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Plank\Mediable\Facades\MediaUploader;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Business;
use Shibaji\Admin\Models\Setting;

class Setup extends Controller
{
    private $business;

    public static function routes(){
        // Settings Creator / Manager
        Route::get('/all-settings', 'Setup@all');
        Route::get('/setup/business', 'Setup@business');
        Route::post('/setup/business', 'Setup@businessPost');
        Route::get('/setup/local', 'Setup@local');
        Route::post('/setup/local', 'Setup@localPost');
        Route::get('/setup/invoice', 'Setup@invoice');
        Route::post('/setup/invoice', 'Setup@invoicePost');
        Route::get('/setup/default', 'Setup@default');
        Route::post('/setup/default', 'Setup@defaultPost');
        Route::get('/setup/scheduling', 'Setup@scheduling');
        Route::post('/setup/scheduling', 'Setup@schedulingPost');
        Route::get('/setup/pay-mode', 'Setup@payMode');
        Route::get('/setup/active/{id}', 'Setup@setActive')->name('business.setup.active');
        Route::get('/setup/default/{id}', 'Setup@setDefault')->name('business.setup.default');;

        Route::get('/reset-all', 'Setup@reset');
    }

    public function __construct()
    {
        $business = Business::where('default', 'on')->first();
        if(isset($business)){
            $this->business = $business;
        }else{
            $this->business = Business::find(1);
        }

    }
    public function list(){
        if(auth()->user()->can('view setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        return view('admin::settings.list', ['settings' => Setting::all()]);
    }

    public function setActive($id){
        return $id;
    }

    public function setDefault($id){
        // unset default first
        $business = Business::where('default', 'on')->first();
        if(isset($business)){
            $business->default = 'off';
            $business->save();
        }
        // Set Default
        $bus = Business::find($id);
        $bus->default = 'on';
        $bus->save();

        return back();
    }

    public function all(){
        return view('admin::setup.main');
    }
    public function business(){
        return view('admin::setup.business', ['business' => $this->business]);
    }
    public function businessPost(Request $req){

        $business = Business::find($req->id);
        $business->name = $req->name;
        $business->type = $req->type;
        // $business->logo = $req->logo;
        $business->addMedia($req->file('logo'))->toMediaCollection();

        $business->trading_name = $req->trading_name;
        $business->registration_no = $req->registration_no;
        $business->tax_registration_no = $req->tax_registration_no;
        $business->contact_no = $req->contact_no;
        $business->email = $req->email;
        $business->address = $req->city;
        $business->state = $req->state;
        $business->country = $req->country;
        $business->is_active = $req->is_active;
        $business->default = $req->default;

        $business->save();

        session()->flash('status', 'Companies data is updated');
        return back();
    }
    public function local(){
        return view('admin::setup.local');
    }
    public function localPost(){
        return view('admin::setup.local');
    }
    public function invoice(){
        return view('admin::setup.invoice');
    }
    public function invoicePost(){
        return view('admin::setup.invoice');
    }
    public function default(){
        return view('admin::setup.default');
    }
    public function defaultPost(){
        return view('admin::setup.default');
    }
    public function scheduling(){
        return view('admin::setup.scheduling');
    }
    public function schedulingPost(){
        return view('admin::setup.sheduling');
    }
    public function payMode(){
        return view('admin::setup.paymode');
    }

    public function reset(){
        if(auth()->user()->can('view setting') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }
        if(auth()->user()->id == 1){
            Artisan::call('migrate:fresh --seed');

            $out = '<div style="with:900px; margin:auto;">';
            $out .= 'All data removed and Reset. <a href="'.config('admin.prefix').'">Back Now.</a>';
            $out .= '<pre>';
            $out .= Artisan::output();
            $out .= '</pre>';

            $out .= '</div>';

            session()->flash('status', 'Systems is reset now. You can use as a new system.');
            return $out;
        }

    }
}
