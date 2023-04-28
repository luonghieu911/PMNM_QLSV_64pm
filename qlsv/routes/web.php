<?php

use App\Http\Controllers\Admin\Users\HomeController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\LopMonHocController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user',[UserController::class,'index']);
//Route::get('/user','App\Http\Controllers\UserController@index');
Route::get('/login',[LoginController::class,'index']);
Route::post('/admin/users/login',[LoginController::class,'login']);
Route::get('/home',[HomeController::class,'index'])->name('admin');
Route::get('/admin/lop/add',[LopMonHocController::class,'create']);