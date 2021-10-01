<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class PostController extends Controller
{
    public function deletePostById($id){
      
        $del_post =Post::find($id);
        $del_post->delete();
        return redirect()->route('posts')->with('postdel', "post deleted");
      
    
    }
    public function updatePostById($id){
        $title = request("title");
        $intro= request("contentIntro");
        $body = request("contentBody");
        $footer = request("contentFooter");
        $image = request("image");

        $updata = Post::find($id);
        $updata->title =$title;
        $updata->content_intro=$intro;
        $updata->content_body =$body;
        $updata->content_footer =$footer;
        
        if($image){
            $image_name =uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path('img/posts/'),$image_name);    
            $updata->image= $image_name;
        }
        $updata->update();
        return redirect()->route('showPostById',$id)->with('updata',"the post updataed");
       

    }
    public function post(){

        // $userid = Auth()->user()->id;
        // $userlatestpost= Post::where('user_id', $userid)->latest()->first()
        // ;      
        // // $lastestposttime = $userlatestpost->created_at->format('H');
        // // $mytime = Carbon::now();
        // // $currenttime = $mytime->toTimeString();

        // // dd($lastestposttime,$currenttime);     
        
        
        
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
            return redirect()->route("posts")->with("post_up","post uploaded");

        }
        else{
            return back()->withErrors($val);
        }


        return redirect()->route("index")->with("post_uploaded","post uploaded");
    }

}
