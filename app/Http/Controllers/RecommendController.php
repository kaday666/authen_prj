<?php

namespace App\Http\Controllers;

use App\Models\Recommend;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    public function recommend(){
        $recom = Recommend::all(); 
        return view('admin.recommend',['recoms'=>$recom]);
    }
    public function recommendUpdate($id){
        $tagre = Recommend::find($id);
        return view('admin.updateRecommend',['target'=>$tagre]);
    }
    public function recommendedit($id){

   


        $val= request()->validate(
            [
                "songname"=>"required",
                "songtype"=>"required",
                "songartist"=>"required",
                // "songimage"=>"required",
            ]
            );

           
            $image = request('songimage');
        
        if($val){
            $editRe= Recommend::find($id);
            $editRe->songname=request('songname');
            $editRe->songtype=request('songtype');
            $editRe->songartist=request('songartist');
           
          if($image){
            $image_name =uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path('img/recom/'),$image_name);   
            $editRe->songimage=$image_name;
          } 
            $editRe->update();
            return redirect()->route("admin.recommend");
        }
        else{
            return back()->withErrors($val);

        }
    }
}
