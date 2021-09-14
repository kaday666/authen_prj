<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,"index"])->name("index");


//Users
Route::get('/user/createPost',[PageController::class,"createPost"])->name("create");
Route::post('/user/createPost',[PageController::class,"post"])->name("post");
Route::get('/user/profile',[PageController::class,"profile"])->name("profile");
Route::get('/user/contantus',[PageController::class,"contantus"])->name("contantus");



//admin
Route::get('/admin/index',[AdminController::class,"index"])->name("admin.home");
Route::get('/admin/manage_premium_user',[AdminController::class,"manage_premium_user"])->name("admin.manage_premium_user");
Route::get('/admin/contant_messages',[AdminController::class,"contant_messages"])->name("admin.contant_messages");






//auth
Route::get('/login', [AuthController::class,"login"])->name("login");
Route::get('/register', [AuthController::class,"register"])->name("register");



