<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecommendController;
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
    Route::get('/user/createPost',[PageController::class,"createPost"])->name("create");
    Route::get('/posts/post-{id}', [PageController::class,"showPostById"])->name("showPostById");

    Route::get('/posts/edit/{id}/{auth}', [PageController::class,"editPostById"])->name("editPostById")->middleware('postcheck');
    Route::get('/posts/{type?}', [PageController::class,"posts"])->name("posts");
   

    Route::get('/user/profile',[PageController::class,"profile"])->name("profile");
    Route::get('/user/createPost',[PageController::class,"createPost"])->name("create");




    Route::get('/posts/delete/{id}', [PostController::class,"deletePostById"])->name("deletePostById")->middleware('postcheck');
    Route::post('/posts/update/{id}', [PostController::class,"updatePostById"])->name("updatePostById")->middleware('postcheck');
    Route::post('/user/createPost',[PostController::class,"post"])->name("post");

    Route::post('/user/profile',[AuthController::class,"post_profile"])->name("post_profile");
    Route::get('/user/contantus',[PageController::class,"contantus"])->name("contantus");
    Route::post('/user/contantus',[ContactUsController::class,"post_contantus"])->name("post_contantus");
    
    

//admin
 
    
    Route::middleware("admin")->group(function(){
        Route::get('/admin/contant_messages/delete/{id}',[ContactUsController::class,"deleteMessage"])->name("deleteMessage");
        Route::get('/admin/index',[AdminController::class,"index"])->name("admin.home");
        Route::get('/admin/manage_premium_user',[AdminController::class,"manage_premium_user"])->name("admin.manage_premium_user");
        Route::get('/admin/manage_premium_user/delete/{id}',[AdminController::class,"delUser"])->name("admin.delUser");
        Route::get('/admin/manage_premium_user/update/{id}',[AdminController::class,"updateUser"])->name("admin.updateUser");
        Route::post('/admin/manage_premium_user/edit/{id}',[AdminController::class,"editUser"])->name("admin.editUser");
        Route::get('/admin/contant_messages',[AdminController::class,"contant_messages"])->name("admin.contant_messages");
        Route::get('/admin/recommend',[RecommendController::class,"recommend"])->name("admin.recommend");
        Route::get('/admin/recommend/update/{id}',[RecommendController::class,"recommendUpdate"])->name("admin.recommendUpdate");
        Route::post('/admin/recommend/edit/{id}',[RecommendController::class,"recommendedit"])->name("admin.recommendedit");

        
    });


    
    Route::get('/logout', [AuthController::class,"logout"])->name("logout");


});

Route::middleware("guest")->group(function(){
    //auth
    Route::get('/login', [AuthController::class,"login"])->name("login");
    Route::post('/login', [AuthController::class,"post_login"])->name("post_login");

    Route::get('/register', [AuthController::class,"register"])->name("register");
    Route::post('/register', [AuthController::class,"post_register"])->name("post_register");

});








