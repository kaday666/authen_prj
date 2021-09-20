<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function index(){

        // Post::latest()->get();
        $posts =Post::all();
        $users =User::all();
        return view('index',['posts'=>$posts,'users'=>$users]);
    }
    public function deletePostById($id,$auth){
      
        $del_post =Post::find($id);
        $del_post_auth =$del_post->user_id;
        $auth_num= (int) $auth;
        // dd($del_post_auth,$auth_num);
        
        if($del_post_auth == $auth ){
            return redirect()->route('index')->with('postdel', "post deleted");
        }
        else{
            // $del_post->delete();s
            return back();
        }
    
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
    public function post(){

        

        $val = request()->validate([
            "title"=>"required",
            "contentIntro"=>"required",
            "contentBody"=>"required",
            "image"=>"required",

        ]);

        if($val)
        {   
            $title =request('title');
          $contentIntro =request('contentIntro');
            $contentBody =request('contentBody');
            $contentFooter=request('contentFooter');
            $image =request('image');
            $post = new Post();
            $post->user_id= auth()->user()->id;
            $post->title =$title; 
            $image_name =uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path('img/posts/'),$image_name);
            $post->image=$image_name;
            $post->content_intro =$contentIntro; 
            $post->content_body =$contentBody; 
            $post->content_footer=$contentFooter; 
            $post->save();
            return redirect()->route("index")->with("post_uploaded","post uploaded");

        }
        else{
            return back()->withErrors($val);
        }


        return redirect()->route("index")->with("post_uploaded","post uploaded");
    }



    public function post_profile(){
        $name =request('name');
        $email=request('email');
        $image=request('image');
        $old_password = request('old_password');
        $new_password = request('new_password');

        $id=auth()->user()->id;
        $current_user=User::find($id);
        $current_user->name=$name;
        $current_user->email=$email;

        if($image)
        {
            $image_name =uniqid()."_".$image->getClientOriginalName();

            $image->move(public_path('img/profiles'),$image_name);
            $current_user->image=$image_name;
            $current_user->update();
            return back()->with('success',"image changed");
        }
        if($old_password && $new_password){
             
            if(Hash::check($old_password,$current_user->password)){
                $current_user->password=Hash::make($new_password);
                $current_user->update();
            
                return back()->with('password',"password changed");

            }
            else{
                return back()->with('error',"old password is not same");
            }
           
        }
        $current_user->update();
        return back();


    }
   
    
}

