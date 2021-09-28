<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\type;

class PageController extends Controller
{
    public function index(){

        // Post::latest()->get();
        $posts =Post::paginate(5);
        $users =User::all();
        return view('index',['posts'=>$posts,'users'=>$users]);
    }
   
    public function editPostById($id,$auth){
        $updata = Post::find($id);
        $users = User::all();
    return view("user.editPost",["updata"=>$updata,"users"=>$users]);
    }
  
    public function showPostById($id){
        $post = Post::find($id);
        $users = User::all();
        return view("user.showPost",["post"=>$post,"users"=>$users]);
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

    public function posts($type = null){
        if($type == "Latest"){
            $posts =Post::latest()->paginate(11);
            $users =User::all();
            $sel =false;
        return view('user.posts',['posts'=>$posts,'users'=>$users,'sel'=>$sel]);
        }
        else{
            $posts =Post::paginate(11);
            $users =User::all();
            $sel =true;
        return view('user.posts',['posts'=>$posts,'users'=>$users,'sel'=>$sel]);
        }
     
    }
    public function postsLatest(){
        $posts =Post::all();
        $users =User::all();
        return view('user.postsLatest',['ltpost'=>$posts,'users'=>$users]);
    }




   


    
   
    
}



