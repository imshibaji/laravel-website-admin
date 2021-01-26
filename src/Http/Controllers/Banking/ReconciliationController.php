<?php

namespace Shibaji\Admin\Http\Controllers\Banking;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Banking\Account;
use Shibaji\Admin\Models\Banking\Transaction;

class ReconciliationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::banking.reconciliations.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $accounts = Account::where('enabled', 1)->pluck('name', 'id');
//
        // $account_id = request('account_id', business()->account->id ?? 0);
        // $started_at = request('started_at', Date::now()->firstOfMonth()->toDateString());
        // $ended_at = request('ended_at', Date::now()->endOfMonth()->toDateString());
//
        // $account = Account::find($account_id);
//
        // $currency = $account->currency ?? '';
//
        // $transactions = $this->getTransactions($account, $started_at, $ended_at);
//
        // $opening_balance = $this->getOpeningBalance($account, $started_at);

        // return app('Shibaji\Admin\Models\Common\Business')->with('account')->get();

        // Form::label('id', 'Description');

        return view('admin::banking.reconciliations.create', [
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

      /**
     * Add transactions array.
     *
     * @param $account
     * @param $started_at
     * @param $ended_at
     *
     * @return mixed
     */
    protected function getTransactions($account, $started_at, $ended_at)
    {
        $started = explode(' ', $started_at)[0] . ' 00:00:00';
        $ended = explode(' ', $ended_at)[0] . ' 23:59:59';

        $transactions = Transaction::where('account_id', $account->id)->whereBetween('transferred_at', [$started, $ended])->get();

        return collect($transactions)->sortByDesc('transferred_at');
    }

    /**
     * Get the opening balance
     *
     * @param $account
     * @param $started_at
     *
     * @return string
     */
    public function getOpeningBalance($account, $started_at)
    {
        // Opening Balance
        $total = $account->opening_balance;

        // Sum income transactions
        $transactions = $account->income_transactions()->whereDate('transferred_at', '<', $started_at)->get();
        foreach ($transactions as $item) {
            $total += $item->amount;
        }

        // Subtract expense transactions
        $transactions = $account->expense_transactions()->whereDate('transferred_at', '<', $started_at)->get();
        foreach ($transactions as $item) {
            $total -= $item->amount;
        }

        return $total;
    }

    public function calculate(Request $request)
    {
        $currency_code = $request['currency_code'];
        $closing_balance = $request['closing_balance'];

        $json = new \stdClass();

        $cleared_amount = $difference = $income_total = $expense_total = 0;

        if ($transactions = $request['transactions']) {
            $opening_balance = $request['opening_balance'];

            foreach ($transactions as $key => $value) {
                $k = explode('_', $key);

                if ($k[1] == 'income') {
                    $income_total += $value;
                } else {
                    $expense_total += $value;
                }
            }

            $cleared_amount = $opening_balance + ($income_total - $expense_total);
        }

        $difference = $closing_balance - $cleared_amount;

        $json->closing_balance = $closing_balance;
        $json->cleared_amount = $cleared_amount ;
        $json->difference =  $difference;
        $json->difference_raw = (int) $difference;

        return response()->json($json);
    }
}
