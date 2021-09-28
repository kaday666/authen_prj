<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;

class postcheckMiddlewware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $id =request('id');
        $authid =Post::find($id)->user_id;
        if(auth()->user()->isAdmin == "1" || auth()->user()->id == $authid){
            return $next($request);
        }
        else{
            return back()->with("postdelFail","error");
        }

    }
}
