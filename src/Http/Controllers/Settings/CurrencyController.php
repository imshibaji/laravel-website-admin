<?php

namespace Shibaji\Admin\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Setting\Currency;

class CurrencyController extends Controller
{
    private $codes, $precisions, $positions;

    public function __construct()
    {
        $this->codes = config('money');
        $this->precisions = [0,1,2,3,4];
        $this->positions = [
            ['label' => 'After Amount', 'value' => 'after'],
            ['label' => 'Before Amount', 'value' => 'before']
        ];

        // dd($this->codes);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::settings.currencies.list', [
            'currencies' => Currency::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::settings.currencies.create',[
            'codes' => $this->codes,
            'precisions' => $this->precisions,
            'positions' => $this->positions
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
        Currency::create($req->input());
        session()->flash('status', 'New Currency Added.');
        return redirect()->route('admin.currencies.index');
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
        return view('admin::settings.currencies.edit',[
            'currency' => Currency::find($id),
            'codes' => $this->codes,
            'precisions' => $this->precisions,
            'positions' => $this->positions
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
        // dd($req->default);

        $cur = Currency::find($id);
        $cur->update($req->input());
        session()->flash('status', 'Currency Updated.');
        return redirect()->route('admin.currencies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cur = Currency::find($id);
        $cur->delete();
        session()->flash('status', 'Currency Deleted.');
        return redirect()->route('admin.currencies.index');
    }
}
