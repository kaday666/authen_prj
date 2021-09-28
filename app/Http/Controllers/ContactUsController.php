<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function post_contantus(){


        $val = request()->validate([
            "username"=>"required",
            "email"=>"required",
            "message"=>"required",
        ]);
        if($val){
            $username=request('username');
            $email=request('email');
            $message=request('message');

            $add = new ContactMessage();
            $add->username=$username;
            $add->email=$email;
            $add->messages=$message;
            $add->save();
            return back()->with('sent',"thank you we recieved the messages");
            }
        else{
            return back()->withErrors($val);
        }
    }
    function deleteMessage($id){
        $del = ContactMessage::find($id);
        $del->delete();
        return back()->with('mesdel',"thank you we recieved the messages");

    }   
}
