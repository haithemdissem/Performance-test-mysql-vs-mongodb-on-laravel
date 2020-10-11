<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mysql-statement', function () {
    ini_set('memory_limit', '4048M');
    $x = \Illuminate\Support\Facades\DB::statement("select * from agencies a , users u where u.id=u.id");
    return view('welcome',compact(['x']));
});
Route::get('/mysql-eloquent', function () {
    //    dump(\App\Models\User::all());

    $x = \App\Models\User::take(25)->get();
    return view('welcome',compact(['x']));
});
Route::get('/mysql-querybuilder', function () {
    //    dump(\Illuminate\Support\Facades\DB::table('users')->get());

    $x = \Illuminate\Support\Facades\DB::table('users')->take(25)->get();
    return view('welcome',compact(['x']));
});



Route::get('/mongo-eloquent', function () {
//    dump(\App\Models\User::all());

    $x = \App\Models\User::take(25)->get();
    return view('welcome',compact(['x']));
});
Route::get('/mongo-querybuilder', function () {
//    dump(\Illuminate\Support\Facades\DB::table('users')->get());

    $x = \Illuminate\Support\Facades\DB::table('users')->take(25)->get();
    return view('welcome',compact(['x']));
});
