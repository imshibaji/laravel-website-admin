<?php

namespace Shibaji\Admin\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Setting\Tax;

class TaxController extends Controller
{
    private $types = ['normal','fixed', 'inclusive', 'withholding', 'Compound'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin::settings.taxes.list',[
            'taxes' => Tax::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::settings.taxes.create',[
            'types' => $this->types
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
        Tax::create($req->input());

        session()->flash('status', 'New Tax added');
        return redirect()->route('admin.taxes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin::settings.taxes.edit', [
            'tax' => Tax::find($id),
            'types' => $this->types
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
        $tax = Tax::find($id);
        $tax->update($req->input());

        session()->flash('status', 'Tax Updated');
        return redirect()->route('admin.taxes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tax = Tax::find($id);
        $tax->delete();

        session()->flash('status', 'Tax Deteled');
        return redirect()->route('admin.taxes.index');
    }
}
