<?php
use Illuminate\Support\Facades\Route;

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

    Route::get('/', 'Home@index')->name('home');
    Route::resource('/page', 'PageController')->names([
        'index' => 'page'
    ]);

});
