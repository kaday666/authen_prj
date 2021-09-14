<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function createPost(){
        return view('user.create');
    }
    public function profile(){
        return view('user.profile');
    }
    public function contantus(){
        return view('user.contantus');
    }
    public function post(){
        return redirect()->route("index")->with("message","post uploaded");
    }
   
    
}
