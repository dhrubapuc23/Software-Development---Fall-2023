<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewuserController;
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

Auth::routes();
Route::get('/newuser',[NewuserController::class, 'index'])->name('view.user');
Route::get('/newuser/{id}',[NewuserController::class, 'getUser'])->name('user');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/delete/{id}',[NewuserController::class, 'deleteUser'])->name('delete.user');
Route::post('/addusers', [NewuserController::class, 'addUser'])->name('add.user');
Route::view('/add','adduser')->name('displayform');
Route::post('/update/{id}',[NewuserController::class, 'updateUser'])->name('update.user');
Route::get('/updatepage/{id}',[NewuserController::class, 'fetchData'])->name('fetchdata.user');

