<?php

namespace Shibaji\Admin\Http\Controllers\Common;

use Illuminate\Http\Request;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Common\Business;
use Shibaji\Admin\Models\Common\Item;
use Shibaji\Admin\Models\Setting\Category;
use Shibaji\Admin\Models\Setting\Tax;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::getAllByBusiness();
        return view('admin::items.list', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businesses = Business::all();
        $categories = Category::all();
        $taxes = Tax::all();
        return view('admin::items.add', compact('businesses', 'categories', 'taxes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $item = Item::create($req->input());
        $item->business_id =  business()->id;
        $item->save();
        $item->addPicture($req->file('image'));

        if($item){
            session()->flash('status', 'Item added Successfully');
        }else{
            session()->flash('status',['type'=>'danger', 'message'=> 'Item not Added']);
        }
        if($req->page){
            return redirect()->route($req->page);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Item::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $businesses = Business::all();
        $categories = Category::all();
        $taxes = Tax::all();
        return view('admin::items.edit', compact('item','businesses', 'categories', 'taxes'));
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
        $item = Item::find($id);
        $item->business_id =  business()->id;
        $item->update($req->input());
        $item->addPicture($req->file('image'));

        if($item){
            session()->flash('status', 'Item Updated Successfully');
        }else{
            session()->flash('status',['type'=>'danger', 'message'=> 'Item Not Updated.']);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->deleteFile();
        $item->delete();
        if($item){
            session()->flash('status', 'Item Deleted Successfully');
        }else{
            session()->flash('status',['type'=>'danger', 'message'=> 'Item Not Deleted.']);
        }
        return back();
    }
}
