<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function  index(){
        return view("admin.index");
    }
    public function manage_premium_user(){
        return view("admin.manage-premium-user");
    }
    public function contant_messages(){
        return view("admin.contant-messages");
    }
}
