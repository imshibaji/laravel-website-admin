<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Shibaji\Admin\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'admin/api', 'middelware' => 'auth'], function () {

    Route::get('pages', function () {
        return response()->json(Post::all());
    });

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
});


