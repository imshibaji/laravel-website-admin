<?php

namespace Shibaji\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Shibaji\Admin\Classes\FormBuilder as Form;
use Shibaji\Admin\Models\Post;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Searchable\Search;

class Dashboard extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){

        // Home Page Links
        if(file_exists(resource_path('views/admin/home.blade.php'))){
            return view('admin.home');
        }else if(file_exists(resource_path('views/dashboards/main.blade.php'))){
            return view('dashboards.main');
        }else{
            return view('admin::dashboards.main');
        }

    }
    public function crm(){
        return view('admin::dashboards.crm');
    }

    public function page(Request $req){
        return $req;
    }

    public function search(Request $req){
        $searchResults = (new Search())
        // ->registerModel(Role::class, 'name')
        // ->registerModel(Permission::class, 'name')
        ->search($req->query('q'));

        return view('admin::search', compact('searchResults'));
    }
}
