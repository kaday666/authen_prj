<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function post_login(){
        $validate = request()->validate([
            "email"=>"required",
            "password"=>"required",
        ]);


        if($validate){

            $auth=Auth::attempt(["email"=>request('email') ,
                              "password"=>request("password")]); 
            if($auth){
                return  redirect()->route("index")->with("complete","account Created");
     }
            else{
                return back()->with('error','email and pasword do not match');
            }

        }
        else{
           return back()->withErrors($validate);

        }
    }
    public function register(){
        return view('auth.register');
    }
    public function post_register(){
        //$name = $req->name;
        // $name = request("name");
        // return $name;
        $val = request()->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required || min:8",
            "image"=>"required",
         ]);
         if($val){

            $image = request("image");
            $image_name =uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path('img/profiles'),$image_name);

            $password= $val["password"];



            $user= new User();
            $user->name=$val["name"];
            $user->email=$val["email"];
            $user->password=Hash::make($password);
            $user->image=$image_name;
            $user->save();


            if(  $auth=Auth::attempt(["email"=>request('email') ,
            "password"=>request("password")])){
                return redirect()->route("index")->with("message","account Created");

            }

         }
         else{
             back()->withErrors($val);
         }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route("login");
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
