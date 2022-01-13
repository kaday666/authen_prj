<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function  index(){
        return view("admin.index");
    }
    public function manage_premium_user(){
        $user= User::all();
        return view("admin.manage-premium-user",["users"=>$user]);
    }
    public function contant_messages(){
        $message = ContactMessage::latest()->get();
        return view("admin.contant-messages",['messages'=>$message]);
    }
    public function delUser($id){
        $delUser = User::find($id);
        $delUser->delete();
        return back()->with('Userdel',"User deleted");
    }
    public function updateUser($id){
        $updata =User::find($id);
        return view("admin.updateUser",["users"=>$updata]);
    }
    public function editUser($id){
        $val= request()->validate(
            [
                "username"=>"required",
                "email"=>"required",
                "isAdmin"=>"required",
                "isPre"=>"required",
            ]
            );

        if($val){
            $edituser= User::find($id);
            $edituser->name=request('username');
            $edituser->email=request('email');
            $edituser->isAdmin=request('isAdmin');
            $edituser->isPremium=request('isPre');
            $edituser->update();

            return redirect()->route("admin.manage_premium_user");   

        }
        else{
            return back()->withErrors($val);
        }
    }
    public function pendingPost(){
        $posts =Post::wherepubished(false)->get();
            // $users =User::all();
        return view('admin.pending',[
        'posts'=>$posts,
        // 'users'=>$users,
      ]);
    }
    
}
