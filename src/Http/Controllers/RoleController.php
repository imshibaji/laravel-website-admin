<?php

namespace Shibaji\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::role.list', [ 'roles' => Role::all(), 'permissions' => Permission::all() ]);
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
    public function store(Request $req)
    {
        $role = Role::create([
            'name' => Str::lower($req->name),
            'guard_name' => Str::lower($req->guard_name)
        ]);
        $role->givePermissionTo($req->permission);
        $role->save();

        $req->session()->flash('status', 'Role is created');
        return redirect(config('admin.prefix', 'admmin') . '/role');
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
    public function update(Request $req, $id)
    {
        $role  = Role::findById($id);
        $role->name = Str::lower($req->name);
        $role->guard_name = Str::lower($req->guard_name);
        $role->syncPermissions($req->permission);
        $role->save();
        $req->session()->flash('status', 'Role is updated');
        return redirect(config('admin.prefix', 'admmin') . '/role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findById($id);
        $role->delete();
        session()->flash('status', 'Role is deleted');
        return redirect(config('admin.prefix', 'admmin') . '/role');
    }
}
