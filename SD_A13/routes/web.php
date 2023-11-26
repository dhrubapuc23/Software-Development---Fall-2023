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
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/feature', function () {
    return view('featurea');
})->name('featurea');

Route::get('/practice', function () {
    return view('practicefile');
})->name('practice');

Route::get('/example', function () {
    return view('example');
})->name('example');

Route::get('/content', function () {
    return view('contents');
})->name('content');

Route::get('/about/{id?}/post/{pid}', function (string $id=null,string $pid=null) {
    if($id && $pid)
    {
    return "<h1>User: ".$id."</h1><h1>Post: ".$pid."</h1>";
    }
    else
    {
    return "<h1>Invalid id/post</h1>";
    }
})->whereNumber('id')->whereAlpha('pid');

Route::fallback(function(){
    return "<h1>Page not found!</h1>";
});
















