<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

$prefix = config('admin.api_prefix', 'admin/api');
$namesapce = 'Shibaji\\Admin\\Http\\ApiControllers';

Route::prefix($prefix.'/v1')
->middleware(['web', 'auth'])
->namespace($namesapce)
->name('admin.api.')
->group(function(){

    Route::get('/', function(){
        return ['status' => 'ok', 'msg' => 'This is from API message testing.'];
    });

    Route::get('/dbs', function(){
        $tables = DB::select('show tables');

        $tbs = array_map(function($table){
            return $table->Tables_in_shibaji_website;
        }, $tables);

        return $tbs;
    });

    Route::resource('user', 'UserController');
    Route::resource('permission', 'PermissionController');
});
