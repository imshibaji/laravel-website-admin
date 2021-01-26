<?php

namespace Shibaji\Admin\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Setting\Category;

class CategoryController extends Controller
{
    private $types = ['income', 'expanse', 'item', 'other'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::settings.categories.list', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::settings.categories.create', [ 'types' => $this->types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        Category::create($req->input());

        session()->flash('status', 'Category Deleted');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin::settings.categories.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin::settings.categories.edit', [
            'types' => $this->types,
            'cat' => Category::find($id)
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
        $cat = Category::find($id);
        $cat->update($req->input());

        session()->flash('status', 'Category Updated');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();

        session()->flash('status', 'Category Deleted');
        return redirect()->route('admin.categories.index');
    }
}
