<?php

namespace Shibaji\Admin\Http\Controllers\Sales;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Common\Contact;
use Shibaji\Admin\Models\Sale\Invoice;
use Shibaji\Admin\Models\Sale\InvoiceHistory;
use Shibaji\Admin\Models\Sale\InvoiceItem;

class InvoiceController extends Controller
{
    public static function routes(){
        Route::get('/invoices/{invoice}/print', 'Sales\InvoiceController@print')->name('invoices.print');
        Route::resource('/invoices', 'Sales\InvoiceController')->names('invoices');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::sales.invoices.list', ['invoices' => Invoice::getAllByBusiness() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::sales.invoices.add', [
            'data' => Invoice::factory()->make(),
            'customers' => Contact::asCustomers()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // return $req->input();

        $inv = new Invoice();
        $inv->business_id = \business()->id;

        $contact = Contact::find($req->contact_id);

        $inv->contact_id = $contact->id;
        $inv->contact_name =  $contact->name; //Contact::find($req->customer_id)->name;
        $inv->contact_email =  $contact->email;
        $inv->contact_tax_number =  $contact->tax_number;
        $inv->contact_phone =  $contact->phone;
        $inv->contact_address =  $contact->address;

        $inv->currency_code = $req->currency_code;
        $inv->currency_rate = 78;

        $inv->invoice_number = $req->invoice_number;
        $inv->order_number = $req->order_number;
        $inv->status = 'pending';
        $inv->invoiced_at = $req->invoice_date;
        $inv->due_at = $req->due_date;

        $inv->subtotal_amount = $req->subtotal_amount;
        $inv->discount_percent = $req->discount_percent;
        $inv->discount_amount = $req->discount_amount;
        $inv->total_tax_amt = $req->total_tax_amt;
        $inv->round_up = $req->round_up;
        $inv->total_amount = $req->total_amount;


        $inv->notes = $req->notes;
        $inv->footer = $req->footer;

        $inv->category_id = $req->category_id;
        $inv->save();

        // Invoice Items
        foreach($req->items as $item){
            $invItem = new InvoiceItem();
            $invItem->business_id = business()->id;
            $invItem->invoice_id = $inv->id;
            $invItem->item_id = $item['id'];
            $invItem->name = $item['name'];
            $invItem->quantity = $item['quantity'];
            $invItem->price = $item['price'];
            $invItem->taxprcnt = $item['taxprcnt'];
            $invItem->taxamt = $item['taxamt'];
            $invItem->total = $item['total'];
            $invItem->save();
        }
        // Invoice History
        $invHis = new InvoiceHistory();
        $invHis->business_id = business()->id;
        $invHis->invoice_id = $inv->id;
        $invHis->status_code = 'pending';
        $invHis->notify = 0;
        $invHis->description = 'Invoice No:'.$req->invoice_number.' is created...';
        $invHis->save();

        $req->session()->flash('status', 'Invoice Created..');

        return redirect()->route('admin.invoices.show', $inv->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin::sales.invoices.view', ['invoice' => Invoice::find($id)]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function print($id){
        return view('admin::sales.invoices.classic', [
            'invoice' => Invoice::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin::sales.invoices.edit', [
            'invoice' => Invoice::find($id),
            'customers' => Contact::asCustomers()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $inv = Invoice::find($id);
        $inv->business_id = \business()->id;

        $contact = Contact::find($req->contact_id);

        $inv->contact_id = $contact->id;
        $inv->contact_name =  $contact->name; //Contact::find($req->customer_id)->name;
        $inv->contact_email =  $contact->email;
        $inv->contact_tax_number =  $contact->tax_number;
        $inv->contact_phone =  $contact->phone;
        $inv->contact_address =  $contact->address;

        $inv->currency_code = $req->currency_code;
        $inv->currency_rate = 78;

        // Invoice
        $inv->invoice_number = $req->invoice_number;
        $inv->order_number = $req->order_number;
        $inv->status = 'pending';
        $inv->invoiced_at = $req->invoice_date;
        $inv->due_at = $req->due_date;

        $inv->subtotal_amount = $req->subtotal_amount;
        $inv->discount_percent = $req->discount_percent;
        $inv->discount_amount = $req->discount_amount;
        $inv->total_tax_amt = $req->total_tax_amt;
        $inv->round_up = $req->round_up;
        $inv->total_amount = $req->total_amount;


        $inv->notes = $req->notes;
        $inv->footer = $req->footer;

        $inv->category_id = $req->category_id;
        $inv->save();

        // Invoice Items
        // foreach($req->items as $item){
            // $invItem = new InvoiceItem();
            // $invItem->business_id = business()->id;
            // $invItem->invoice_id = $inv->id;
            // $invItem->item_id = $item['id'];
            // $invItem->name = $item['name'];
            // $invItem->quantity = $item['quantity'];
            // $invItem->price = $item['price'];
            // $invItem->taxprcnt = $item['taxprcnt'];
            // $invItem->taxamt = $item['taxamt'];
            // $invItem->total = $item['total'];
            // $invItem->save();
        // }
        // Invoice History
        $invHis = new InvoiceHistory();
        $invHis->business_id = business()->id;
        $invHis->invoice_id = $inv->id;
        $invHis->status_code = 'pending';
        $invHis->notify = 0;
        $invHis->description = 'Invoice No:'.$req->invoice_number.' is created...';
        $invHis->save();

        $req->session()->flash('status', 'Invoice Created..');

        return redirect()->route('admin.invoices.show', $inv->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
