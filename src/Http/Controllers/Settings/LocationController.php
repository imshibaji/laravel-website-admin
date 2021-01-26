<?php

namespace Shibaji\Admin\Http\Controllers\Settings;

use App\Models\User;
use Illuminate\Http\Request;
use Shibaji\Admin\Http\Controllers\Controller;
use Shibaji\Admin\Models\Setting\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::settings.locations.list', [
            'locations' => Location::getAllByBusiness(),
            'loc' => Location::find((int) session('id')),
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Location::updateOrCreate([
            'id' => $request->id
        ], [
            'business_id' => business()->id,
            'location_name' => $request->location_name,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'country_id' => $request->country_id,
            'zip' => $request->zip,
            'user_id' => $request->user_id
        ]);

        session()->flash('status', 'Location Data is updated');
        return redirect()->route('admin.locations.index');
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
        session()->flash('id', $id);
        return redirect()->route('admin.locations.index');
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
        $loc = Location::find($id);
        $loc->delete();

        session()->flash('status', 'Location Data is Deleted');
        return redirect()->route('admin.locations.index');
    }
}
