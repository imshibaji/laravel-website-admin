<?php
use Illuminate\Support\Facades\Route;
use Shibaji\Admin\Facades\Calculator;
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
    Route::get('/crm', [Dashboard::class, 'crm'])->name('crm');
    Route::get('/search', [Dashboard::class, 'search'])->name('search');

    Route::resource('/seo', 'SeoController')->names([
        'index' => 'seo'
    ]);

    Route::resource('/user', 'UserController')->names([
        'index' => 'users'
    ]);

    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::post('/profile', 'UserController@profilePost')->name('profile.post');

    Route::resource('/role', 'RoleController')->names([
        'index' => 'roles'
    ]);

    Route::resource('/permission', 'PermissionController')->names([
        'index' => 'permissions'
    ]);

    Route::resource('/settings', 'SettingsController');

    Route::get('/help', function(){
        return view('admin::document');
    });

    Route::get('test', function () {
        $obj = json_to_object(json_encode(['name'=>'Shibaji', 'loc'=>'Duum Dum']), true);
        return $obj;
    });
});
