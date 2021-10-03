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



//Auth::routes();

Route::get('/', function () {
    return view('feed/feed');
});
Route::get('/feed', function () {
    return view('feed/feed');
});
Route::get('/conhecidos', function () {
    return view('feed/conhecidos');
});
Route::get('/feed-amigos', function () {
    return view('feed/amigos');
});
Route::get('/mensagens', function () {
    return view('feed/mensagens');
});

Route::get('/perfil', function () {
    return view('perfil/perfil');
});

Route::get('/sobre', function () {
    return view('perfil/sobre');
});
Route::get('/albuns', function () {
    return view('perfil/albuns');
});
Route::get('/perfil-amigos', function () {
    return view('perfil/amigos');
});

Route::group(["prefix"=>"/feed"], function() use ($router){
   // Route::post('/conhecidos','AuthController@login');
    Route::post('/logout', 'AuthController@logout');

});

