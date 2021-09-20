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

//or you can put like this one by one
// Route::get('/user/createPost',[PageController::class,"createPost"])->name("create")->middleware(("auth"));
////this is the group middle ware
Route::middleware("auth")->group(function(){


    Route::get('/', [PageController::class,"index"])->name("index");


    //posts
    Route::get('/posts/{id}', [PageController::class,"showPostById"])->name("showPostById");
    Route::get('/posts/delete/{id}/{auth}', [PageController::class,"deletePostById"])->name("deletePostById");

    //Users
Route::get('/user/createPost',[PageController::class,"createPost"])->name("create");
Route::post('/user/createPost',[PageController::class,"post"])->name("post");
Route::get('/user/profile',[PageController::class,"profile"])->name("profile");
Route::post('/user/profile',[PageController::class,"post_profile"])->name("post_profile");

Route::get('/user/contantus',[PageController::class,"contantus"])->name("contantus");
//admin
Route::get('/admin/index',[AdminController::class,"index"])->name("admin.home");
Route::get('/admin/manage_premium_user',[AdminController::class,"manage_premium_user"])->name("admin.manage_premium_user");
Route::get('/admin/contant_messages',[AdminController::class,"contant_messages"])->name("admin.contant_messages");
Route::get('/logout', [AuthController::class,"logout"])->name("logout");


});

Route::middleware("guest")->group(function(){
    //auth
    Route::get('/login', [AuthController::class,"login"])->name("login");
    Route::post('/login', [AuthController::class,"post_login"])->name("post_login");

    Route::get('/register', [AuthController::class,"register"])->name("register");
    Route::post('/register', [AuthController::class,"post_register"])->name("post_register");

});








