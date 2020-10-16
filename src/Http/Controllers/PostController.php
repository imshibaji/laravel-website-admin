<?php

namespace Shibaji\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Shibaji\Admin\Http\Middleware\VerifyCsrfToken;
use Shibaji\Admin\Models\Post;

class PostController extends Controller
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
        $posts = Post::all();
        return view('admin::posts.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::posts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $seo = new SeoController();

        $p = new Post();
        $p->seo_optimization_id = $seo->storeBy($req);
        $p->title = $req->title;
        $p->slag = Str::slug($req->title);
        $p->content = $req->content;
        $p->status = $req->status;
        $p->save();

        return redirect(route('admin.post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Post  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post['seo'] = $post->seo;
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Post  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin::posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Post  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Post $post)
    {
        $p = $post;
        $p->title = $req->title;
        $p->slag = Str::slug($req->title);
        $p->content = $req->content;
        $p->status = $req->status;
        $p->save();

        $seo = new SeoController();
        $seo->updateById($req, $p->seo_optimization_id);

        return redirect(route('admin.post'));;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Post  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $seo = new SeoController();
        $seo->delete($post->seo_optimization_id);

        $post->delete();
        return redirect(route('admin.post'));
    }
}
