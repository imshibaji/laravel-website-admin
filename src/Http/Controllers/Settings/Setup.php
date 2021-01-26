<?php

namespace Shibaji\Admin\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Plank\Mediable\Facades\MediaUploader;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Common\Business;
use Shibaji\Admin\Models\Setting;

class Setup extends Controller
{
    private $business;

    public static function routes(){
        // Settings Creator / Manager
        Route::get('/all-settings', 'Settings\Setup@all')->name('business');
        Route::get('/setup/business', 'Settings\Setup@business')->name('business.setup.business');
        Route::post('/setup/business', 'Settings\Setup@businessPost')->name('business.setup.business.post');
        Route::get('/setup/local', 'Settings\Setup@local')->name('business.setup.local');
        Route::post('/setup/local', 'Settings\Setup@localPost')->name('business.setup.local.post');
        Route::get('/setup/invoice', 'Settings\Setup@invoice')->name('business.setup.invoice');
        Route::post('/setup/invoice', 'Settings\Setup@invoicePost')->name('business.setup.invoice.post');
        Route::get('/setup/bill', 'Settings\Setup@bill')->name('business.setup.bill');
        Route::post('/setup/bill', 'Settings\Setup@billPost')->name('business.setup.bill.post');
        Route::get('/setup/default', 'Settings\Setup@default')->name('business.setup.default');
        Route::post('/setup/default', 'Settings\Setup@defaultPost')->name('business.setup.default.post');
        Route::get('/setup/email', 'Settings\Setup@email')->name('business.setup.email');
        Route::post('/setup/email', 'Settings\Setup@emailPost')->name('business.setup.email.post');
        Route::get('/setup/scheduling', 'Settings\Setup@scheduling')->name('business.setup.scheduling');
        Route::post('/setup/scheduling', 'Settings\Setup@schedulingPost')->name('business.setup.scheduling.post');
        Route::get('/setup/pay-mode', 'Settings\Setup@payMode')->name('business.setup.paymode');
        Route::post('/setup/pay-mode', 'Settings\Setup@payModePost')->name('business.setup.paymode.post');
        Route::get('/setup/smssetup', 'Settings\Setup@sms')->name('business.setup.sms');
        Route::post('/setup/smssetup', 'Settings\Setup@smsPost')->name('business.setup.sms.post');

        Route::get('/setup/active/{id}', 'Settings\Setup@setActive')->name('business.setup.active');
        Route::get('/setup/default/{id}', 'Settings\Setup@setDefault')->name('business.setup.default');

        Route::get('/reset-all', 'Settings\Setup@reset');
        Route::get('/updates', 'Settings\Setup@updates');
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
        return view('admin::settings.setup.main');
    }
    public function business(){
        return view('admin::settings.setup.business', ['business' => $this->business]);
    }
    public function businessPost(Request $req){

        $business = Business::find($req->id);
        $business->name = $req->name;
        $business->type = $req->type;
        // $business->logo = $req->logo;
        if($req->file('logo')){
            $business->addMedia($req->file('logo'))->toMediaCollection('business');
        }

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
        // dd(config('timezone'));

        return view('admin::settings.setup.local', [
            'business' => $this->business,
            'timezones' => config('timezone')
        ]);
    }
    public function localPost(Request $req){
        $business = Business::find($req->id);
        $business->year_starting_date = $req->year_starting_date;
        $business->time_zone = $req->time_zone;
        $business->date_format = $req->date_format;
        $business->date_separator = $req->date_separator;
        $business->percent_position = $req->percent_position;
        $business->discount_location = $req->discount_location;
        $business->save();

        return back();
    }
    public function default(){
        return view('admin::settings.setup.default', ['business' => $this->business]);
    }
    public function defaultPost(Request $req){
        $business = Business::find($req->id);
        $business->default_location_id = $req->default_location_id;
        $business->default_account_id = $req->default_account_id;
        $business->default_currency_id = $req->default_currency_id;
        $business->default_tax_id = $req->default_tax_id;
        $business->default_payment_mode_id = $req->default_payment_mode_id;

        $business->save();

        return back();
    }
    public function invoice(){
        return view('admin::settings.setup.invoice', ['business' => $this->business]);
    }
    public function invoicePost(Request $req){
        $business = Business::find($req->id);
        $business->number_prefix = $req->number_prefix;
        $business->number_digit = $req->number_digit;
        $business->next_number = $req->next_number;
        $business->payment_terms = $req->payment_terms;
        $business->title = $req->title;
        $business->subheading = $req->subheading;
        $business->notes = $req->notes;
        $business->footer = $req->footer;
        $business->item_name = $req->item_name;
        $business->price_name = $req->price_name;
        $business->quantity_name = $req->quantity_name;
        $business->template = $req->template;

        $business->save();
        return back();
    }

    public function bill(){
        return view('admin::settings.setup.bill', ['business' => $this->business]);
    }
    public function billPost(Request $req){
        $business = Business::find($req->id);
        $business->bill_number_prefix = $req->number_prefix;
        $business->bill_number_digit = $req->number_digit;
        $business->bill_next_number = $req->next_number;
        $business->bill_title = $req->title;
        $business->bill_subheading = $req->subheading;
        $business->bill_notes = $req->notes;
        $business->footer = $req->footer;
        $business->bill_item_name = $req->item_name;
        $business->bill_price_name = $req->price_name;
        $business->bill_quantity_name = $req->quantity_name;
        $business->bill_template = $req->template;

        $business->save();
        return back();
    }
    public function email(){
        return view('admin::settings.setup.email');
    }
    public function emailPost(Request $req){
        $req->session()->flash('status', "this is the test message");
        return back();
    }
    public function sms(){
        return view('admin::settings.setup.sms');
    }
    public function smsPost(Request $req){
        return back();
    }

    public function scheduling(){
        return view('admin::settings.setup.scheduling', ['business' => $this->business]);
    }
    public function schedulingPost(Request $req){
        $business = Business::find($req->id);
        $business->send_invoice_reminder = $req->send_invoice_reminder;
        $business->send_after_due_date = $req->send_after_due_date;
        $business->send_bill_reminder = $req->send_bill_reminder;
        $business->send_before_due_date = $req->send_before_due_date;
        $business->hour_to_run = $req->hour_to_run;
        $business->save();

        return back();
    }
    public function payMode(){
        return view('admin::settings.setup.paymode', ['business' => $this->business]);
    }
    public function payModePost(Request $req){
        return back();
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
    public function updates(){
        $cmd = 'cd "'.base_path().'"';
        $datas = shell_exec('ls');
        // $datas .= shell_exec();

        $out = '<div style="with:900px; margin:auto;">';
        $out .= 'All data removed and Reset. <a href="'.config('admin.prefix').'">Back Now.</a>';
        $out .= '<pre>'.$cmd.'</pre>';
        $out .= '<pre>';
        $out .= $datas;
        $out .= '</pre>';
        $out .= '</div>';

        session()->flash('status', 'Systems is reset now. You can use as a new system.');
        return $out;
    }
}
