<?php

namespace Shibaji\Admin\Http\Controllers\Banking;


use Illuminate\Http\Request;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Banking\Account;
use Shibaji\Admin\Models\Banking\Transaction;
use Shibaji\Admin\Models\Banking\Transfer;
use Shibaji\Admin\Models\Setting\Category;
use Illuminate\Support\Facades\Date;
use Shibaji\Admin\Models\Setting\Currency;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $items = Transfer::with(
            'expense_transaction', 'expense_transaction.account', 'income_transaction', 'income_transaction.account'
        )->get();

        // dd($items);

        foreach ($items as $item) {
            $income_transaction = $item->income_transaction;
            $expense_transaction = $item->expense_transaction;

            $name = implode(' ',[
                'from' => $expense_transaction->account->name,
                'to' => $income_transaction->account->name,
                'amount' => $expense_transaction->amount,
            ]);

            $data[] = (object) [
                'id' => $item->id,
                'name' => $name ?? '',
                'from_account' => $expense_transaction->account->name,
                'to_account' => $income_transaction->account->name,
                'amount' => $expense_transaction->amount,
                'currency_code' => $expense_transaction->currency_code,
                'paid_at' => $expense_transaction->paid_at,
            ];
        }

        $transfers = $data;
        $accounts = collect(Account::where('enabled', 1)->orderBy('name')->pluck('name', 'id'));

        return view('admin::banking.transfers.list', compact('transfers', 'accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::banking.transfers.create',[
            'accounts' => Account::getAllByBusiness()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $expense_currency_code = Account::where('id', $request->get('from_account_id'))->pluck('currency_code')->first();
            $income_currency_code = Account::where('id', $request->get('to_account_id'))->pluck('currency_code')->first();

            $expense_currency_rate = config('money.' . $expense_currency_code . '.rate');
            $income_currency_rate = config('money.' . $income_currency_code . '.rate');

            $expense_transaction = Transaction::create([
                'business_id' => business()->id,
                'type' => 'expense',
                'account_id' => $request->get('from_account_id'),
                'paid_at' => $request->get('paid_at'),
                'currency_code' => $expense_currency_code,
                'currency_rate' => $expense_currency_rate,
                'amount' => $request->get('amount'),
                'contact_id' => 0,
                'description' => $request->get('description'),
                'category_id' => Category::transfer(), // Transfer Category ID
                'payment_method' => $request->get('payment_method'),
                'reference' => $request->get('reference'),
            ]);

            $amount = $request->get('amount');

            // Convert amount if not same currency
            // if ($expense_currency_code != $income_currency_code) {
                // $amount = convertBetween($amount, $expense_currency_code, $expense_currency_rate, $income_currency_code, $income_currency_rate);
            // }

            $income_transaction = Transaction::create([
                'business_id' => business()->id,
                'type' => 'income',
                'account_id' => $request->get('to_account_id'),
                'transferred_at' => $request->get('transferred_at'),
                'currency_code' => $income_currency_code,
                'currency_rate' => $income_currency_rate,
                'amount' => $amount,
                'contact_id' => 0,
                'description' => $request->get('description'),
                'category_id' => Category::transfer(), // Transfer Category ID
                'payment_method' => $request->get('payment_method'),
                'reference' => $request->get('reference'),
            ]);

            $transfer = Transfer::create([
                'business_id' => business()->id,
                'expense_transaction_id' => $expense_transaction->id,
                'income_transaction_id' => $income_transaction->id,
            ]);

        session()->flash('status', 'New Transfer process successful.');
        return redirect()->route('admin.transfers.index', $transfer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        // $transfer = Transfer::find('$id');
        $transfer['from_account_id'] = $transfer->expense_transaction->account_id;
        $transfer['to_account_id'] = $transfer->income_transaction->account_id;
        $transfer['transferred_at'] = Date::parse($transfer->expense_transaction->paid_at)->format('Y-m-d');
        $transfer['description'] = $transfer->expense_transaction->description;
        $transfer['amount'] = $transfer->expense_transaction->amount;
        $transfer['payment_method'] = $transfer->expense_transaction->payment_method;
        $transfer['reference'] = $transfer->expense_transaction->reference;

        $accounts = Account::where('enabled', 1)->pluck('name', 'id');

        $account = $transfer->expense_transaction->account;
        $currency = Currency::where('code', $account->currency_code)->first();

        // return [$transfer, $accounts, $account, $currency];

        return view('admin::banking.transfers.edit', compact('transfer', 'accounts', 'currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Transfer $transfer, Request $request)
    {
        $expense_currency_code = Account::where('id', $request->get('from_account_id'))->pluck('currency_code')->first();
        $income_currency_code = Account::where('id', $request->get('to_account_id'))->pluck('currency_code')->first();

        $expense_currency_rate = config('money.' . $expense_currency_code . '.rate');
        $income_currency_rate = config('money.' . $income_currency_code . '.rate');

        $expense_transaction = Transaction::findOrFail($transfer->expense_transaction_id);
        $income_transaction = Transaction::findOrFail($transfer->income_transaction_id);

        $expense_transaction->update([
            'business_id' => business()->id,
            'type' => 'expense',
            'account_id' => $request->get('from_account_id'),
            'transferred_at' => $request->get('transferred_at'),
            'currency_code' => $expense_currency_code,
            'currency_rate' => $expense_currency_rate,
            'amount' => $request->get('amount'),
            'contact_id' => 0,
            'description' => $request->get('description'),
            'category_id' => Category::transfer(), // Transfer Category ID
            'payment_method' => $request->get('payment_method'),
            'reference' => $request->get('reference'),
        ]);

        $amount = $request->get('amount');

        // Convert amount if not same currency
        // if ($expense_currency_code != $income_currency_code) {
            // $amount = $convertBetween($amount, $expense_currency_code, $expense_currency_rate, $income_currency_code, $income_currency_rate);
        // }

        $income_transaction->update([
            'company_id' => $request['company_id'],
            'type' => 'income',
            'account_id' => $request->get('to_account_id'),
            'transferred_at' => $request->get('transferred_at'),
            'currency_code' => $income_currency_code,
            'currency_rate' => $income_currency_rate,
            'amount' => $amount,
            'contact_id' => 0,
            'description' => $request->get('description'),
            'category_id' => Category::transfer(), // Transfer Category ID
            'payment_method' => $request->get('payment_method'),
            'reference' => $request->get('reference'),
        ]);

        $transfer->update([
            'business_id' => business()->id,
            'expense_transaction_id' => $expense_transaction->id,
            'income_transaction_id' => $income_transaction->id,
        ]);

        session()->flash('status', 'Transfer process update successful.');
        return redirect()->route('admin.transfers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer)
    {
        $transfer->expense_transaction->delete();
        $transfer->income_transaction->delete();
        $transfer->delete();

        session()->flash('status', 'Transfer data deleted successful.');
        return redirect()->route('admin.transfers.index');
    }
}
