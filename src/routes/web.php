<?php
use Illuminate\Support\Facades\Route;
use Shibaji\Admin\Http\Controllers\Dashboard;

/* -------------------------------------------------------------------------- */
/*                          This is the routing file                          */
/* -------------------------------------------------------------------------- */

$prefix = config('admin.prefix', 'admin');
$namesapce = 'Shibaji\\Admin\\Http\\Controllers';

Route::prefix($prefix)
->middleware(['web', 'auth'])
->namespace($namesapce)
->name('admin.')
->group(function(){

    Route::get('/', [Dashboard::class, 'index'])->name('home');
    Route::resource('/page', 'PageController')->names([
        'index' => 'page'
    ]);

});
