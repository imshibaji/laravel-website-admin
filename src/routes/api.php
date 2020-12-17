<?php
use Illuminate\Support\Facades\Route;

$prefix = config('admin.prefix', 'admin');
$namesapce = 'Shibaji\\Admin\\Http\\Controllers';

Route::prefix($prefix.'/api')
->middleware(['web', 'auth'])
->namespace($namesapce)
->name('admin.api.')
->group(function(){
    Route::get('/', function(){
        return ['status' => 'ok', 'msg' => 'This is message'];
    });
});
