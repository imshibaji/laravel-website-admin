<?php

namespace Shibaji\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Shibaji\Admin\Classes\Seo;
use Shibaji\Admin\Http\Middleware\VerifyCsrfToken;
use Shibaji\Admin\Models\Page;

class PageController extends Controller
{
    public function __construct(){
        $this->middleware(VerifyCsrfToken::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin::pages.list', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $seo = new Seo();

        $p = new Page();
        $p->seo_optimization_id = $seo->store($req);
        $p->title = $req->title;
        $p->slag = Str::slug($req->title);
        $p->content = $req->content;
        $p->status = $req->status;
        $p->save();

        return redirect(route('admin.page'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        $page['seo'] = $page->seo;
        return $page;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin::pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Page $page)
    {
        $p = $page;
        $p->title = $req->title;
        $p->slag = Str::slug($req->title);
        $p->content = $req->content;
        $p->status = $req->status;
        $p->save();

        $seo = new Seo();
        $seo->update($p->seo_optimization_id, $req);

        return redirect(route('admin.page'));;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect(route('admin.page'));
    }

    public static function route(){

    }
}
