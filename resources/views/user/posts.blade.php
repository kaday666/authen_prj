@extends('layout.layout')




@section('content')
   <section class="posts">
    <div class="post-nav">
        <h2 class="head pt">
            Posts
        </h2>
        <div class="sort">
            <a href="{{route('posts')}}" class="{{$sel ? "selected" : ""}}">sort by oldest</a>
            <a href="{{route('posts',"Latest")}}" class="{{$sel ? "" : "selected"}}">sort by latest</a>
        </div>
    </div>





    <div class="cards">
        @foreach ($posts as $post)
        <div class="card">
            <div class="card__img">
                <img src="{{asset('img/posts/'.$post->image)}}" >
            </div>
            <div class="card__body m-vsm">
                <h3 class="card__header pt">{{$post->title}}</h3>
                <p class="card__info m-sm">{{$post->content_intro}}
                </p>
            </div>
            <div class="card__footer">
                <div class="user">
                    <img src="{{asset('img/profiles/'.$post->user->image)}}" class="user__img">
                    <span class="user__name">
                        {{$post->user->name}}
                    </span>
                    <span class="user__time">
                            {{$post->created_at}}
                    </span>

                </div>
                <a href="{{route("showPostById",$post->id)}}" class="btn btn-read ">
                    Read more
                </a>
            </div>
        </div>
     
        @endforeach
       

       
    </div>
    <div class="bot-nav">
        {{$posts->links()}}

        <a href="{{route("index")}}" class="btn btn-read">
            <i class="fa fa-arrow-left"></i>
            Back to the home
        </a>
    </div>


   </section>
@endsection

