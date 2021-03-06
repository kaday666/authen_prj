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
    public function approve($id){
        $sel_post =Post::find($id);
        $sel_post->pubished = true;
        $sel_post->update();
        return redirect()->route('admin.pending')->with('approve', "post approved");
    }
    public function post(){
        $canpost = true;
        $userid = Auth()->user()->id;
        $userlatestpost= Post::where('user_id', $userid)->latest()->first(); 
        // if($userlatestpost){
        //     dd($userid);
        // }
        if(!$userlatestpost == null){
            $lastestposttime = $userlatestpost->created_at;

            $mytime = Carbon::now();
            $datediff = $lastestposttime->diffInDays($mytime,$lastestposttime);
          
            if($datediff < 1){
                $canpost = false;
            }
        }
        if($userlatestpost == null){
            $canpost =true;
        }

       $isadmin =auth()->user()->isAdmin;
        
        $val = request()->validate([
            "title"=>"required",
            "contentIntro"=>"required",
            "contentBody"=>"required",
            "image"=>"required",

        ]);

        if($canpost || $isadmin){
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
        }
        else{
            return redirect()->route("posts")->with("post_cant","post uploaded");
        }


        return redirect()->route("index")->with("post_uploaded","post uploaded");
    }

}
