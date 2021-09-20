@extends('layout.layout')



@section('content')
    {{-- {{$users->name}} --}}
        <main>
            <section class="posts">
                <h2 class="header">
                    Posts
                </h2>
                <div class="cards">
                    @foreach ($posts as $post)
                    <div class="card">
                        <div class="card__img">
                            <img src="{{asset('img/posts/'.$post->image)}}" >
                        </div>
                        <div class="card__body m-vsm">
                            <h3 class="card__header">{{$post->title}}</h3>
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
                            <a href="{{route("showPostById",$post->id)}}" class="btn btn-read">
                                Read more
                            </a>
                        </div>
                    </div>
                    @endforeach
                   
                   
                </div>
            </section>
        </main>
       
@endsection


{{-- {{ \Illuminate\Support\Facades\DB::table('posts')->where('user_id',$users->id)->value('name')}} --}}
