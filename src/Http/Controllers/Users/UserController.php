<?php

namespace Shibaji\Admin\Http\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Shibaji\Admin\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->can('view user') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        return view('admin::users.user.list', ['users' => User::all(), 'roles' => Role::all(), 'permissions' => Permission::all() ]);
    }

    public function profile(){
        $user = Auth::user();
        return view('admin::profile', compact('user'));
    }

    public function profilePost(Request $req){

        $user = User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        if($req->password != null){
            if($req->password && $req->confirm_password){
                $user->password = Hash::make($req->password);
            }else{
                $req->session()->flash('status', 'Password not matched');
                return redirect(Config::get('admin.prefix', 'admin').'/profile');
            }
        }
        $user->is_active = $req->is_active;
        $user->address = $req->address;
        $user->contact_no = $req->contact_no;
        $user->whatsapp_no = $req->whatsapp_no;
        $user->skype_id = $req->skype_id;
        $user->save();

        if($user){
            $req->session()->flash('status', 'Profile Updated Successfully');
        }else{
            $req->session()->flash('status', 'Profile Not Updated Successfully');
        }

        return redirect(Config::get('admin.prefix', 'admin').'/profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin::users.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if(auth()->user()->can('add user') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        $user = User::create(
            [
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password)
            ]
        );
        if($user){
            $user->assignRole($req->role);
            $user->givePermissionTo($req->permission);
            $user->save();
            $req->session()->flash('status', 'User Add Successfully');
        }else{
            $req->session()->flash('status', 'User Not Add Successfully');
        }

        return redirect(Config::get('admin.prefix', 'admin'). '/user');
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
        if(auth()->user()->can('edit user') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        $user = User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        if($req->password != null){
            if($req->password && $req->confirm_password){
                $user->password = Hash::make($req->password);
            }else{
                $req->session()->flash('status', 'Password not matched');
                return redirect(Config::get('admin.prefix', 'admin').'/user');
            }
        }
        $user->save();

        if($user){
            $user->syncRoles($req->role);
            $user->syncPermissions($req->permission);
            $req->session()->flash('status', 'User Updated Successfully');
        }else{
            $req->session()->flash('status', 'User Not Updated Successfully');
        }

        return redirect(Config::get('admin.prefix', 'admin').'/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(auth()->user()->can('delete user') == false && auth()->user()->id != 1){
            session()->flash('status', ['type' => 'danger', 'message' =>'You have no permission.']);
            return back();
        }

        $user = User::find($id);
        $user->delete();
        session()->flash('status', 'User Deleted Successfully');

        return redirect(Config::get('admin.prefix', 'admin').'/user');
    }
}

