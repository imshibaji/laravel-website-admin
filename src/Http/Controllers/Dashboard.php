<?php

namespace Shibaji\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Shibaji\Admin\Classes\FormBuilder as Form;
use Shibaji\Admin\Models\Post;

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

    public function page(Request $req){
        return $req;
    }
}
