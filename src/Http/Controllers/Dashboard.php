<?php

namespace Shibaji\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $page = new Post();
        $form = new Form($page);

        // debug($form->getColumnsName());

        $form->input('meta_title', 'Title');
        $form->input('meta_keywords', 'Keywords');
        // $form->file('meta_image', 'Image');
        $form->textarea('meta_description', 'Description');

        $form->action('admin/post');

        // Home Page Links
        if(file_exists(resource_path('views/admin/home.blade.php'))){
            return view('admin.home', compact('form'));
        }else if(file_exists(resource_path('views/dashboards/main.blade.php'))){
            return view('dashboards.main', compact('form'));
        }else{
            return view('admin::dashboards.main', compact('form'));
        }

    }

    public function page(Request $req){
        return $req;
    }
}
