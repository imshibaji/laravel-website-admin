<?php

namespace Shibaji\Admin\Http\Controllers\Banking;

use Illuminate\Http\Request;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Banking\Account;
use Shibaji\Admin\Models\Setting\Currency;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::banking.accounts.list', [
            'accounts' => Account::getAllByBusiness()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::banking.accounts.create', [
            'currencies' => Currency::getAllByBusiness()
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
        Account::create($request->input());
        session()->flash('status', 'New Account is created');
        return redirect()->route('admin.accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin::banking.accounts.show',[
            'account' => Account::find($id)
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
        return view('admin::banking.accounts.edit',[
            'account' => Account::find($id),
            'currencies' => Currency::getAllByBusiness()
        ]);
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
        $acunt = Account::find($id);
        $acunt->update($request->input());
        session()->flash('status', 'Account is Updated');
        return redirect()->route('admin.accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acunt = Account::find($id);
        $acunt->delete();
        session()->flash('status', 'Account is Deleted');
        return redirect()->route('admin.accounts.index');
    }
}
