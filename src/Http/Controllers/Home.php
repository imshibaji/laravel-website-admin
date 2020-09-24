<?php

namespace Shibaji\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shibaji\Admin\Classes\FormBuilder as Form;
use Shibaji\Admin\Models\Page;

class Home extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $page = new Page();
        $form = new Form($page);

        // debug($form->getColumnsName());

        $form->input('meta_title', 'Title');
        $form->input('meta_keywords', 'Keywords');
        // $form->file('meta_image', 'Image');
        $form->textarea('meta_description', 'Description');

        $form->action('admin/page');

        return view('admin::home', compact('form'));
    }

    public function page(Request $req){
        return $req;
    }
}
