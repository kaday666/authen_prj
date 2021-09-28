@extends('layout.layout')



@section('content')
        
    
    
        <main>
            <section class="hero">
                <h1>
                    <span>Bout band </span> is the online forum for sharing 
                    <span>personal thoughts and opinons </span>on band and artist they
                         enjoy.
                </h1>
                <h3 class="pt">Just friendly reminder that this is not the professional
                    review page and it is all from people heart.
                </h3>
                <div class="buttons">
                    <a href="#" class="btn btn-read">start reading</a>
                    <a href="#" class="btn btn-prem">become a preminum member</a>
                </div>
            </section>
            <section class="rules">
                <div class="rule">
                    <i class="fa fa-comment"></i>
                    <p class="rule__text">
                        This is just a close community site so please follow and 
                        feel free to share <span>your opinons  and thoughts </span> 
                        on our social media.
                    </p>
                </div>
                <div class="rule">
                    <i class="fa fa-retweet"></i>
                    <p class="rule__text">
                        Even if the topic you want to post is already there,
                        feel free to post with your own opinons.hey we got a
                        different <span>point of view right?</span>
                    </p>
                </div>
                <div class="rule">
                    <i class="fa fa-unlock"></i>
                    <p class="rule__text">
                        Become a preminum member to support the community and
                        post more than <span>1 post a day.</span>
                        it will cost only 1 $ for life time
                    </p>
                </div>

            </section>
            <section class="recommend">
                <h2 class="sec-head pt">
                    Recommendation of the week
                </h2>
                <div class="track">
                    <img src="{{asset('img/card.jpg')}}" class="track__img">
                    <div class="track__detail">
                        <p class="track__title">
                            Title : Junya
                        </p>
                        <p class="track__genre">
                            Genre : hipop
                        </p>
                    </div>
                </div>
                <div class="track">
                    <img src="{{asset('img/card.jpg')}}" class="track__img">
                    <div class="track__detail">
                        <p class="track__title">
                            Title : Junya
                        </p>
                        <p class="track__genre">
                            Genre : hipop
                        </p>
                    </div>
                </div>
                <div class="track">
                    <img src="{{asset('img/card.jpg')}}" class="track__img">
                    <div class="track__detail">
                        <p class="track__title">
                            Title : Junya
                        </p>
                        <p class="track__genre">
                            Genre : hipop
                        </p>
                    </div>
                </div>
            </section>
            <section class="posts">
                <h2 class="header pt">
                    Posts
                </h2>
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
                <div class="btn-read-con ">
                    <a href="{{route("posts")}}" class="btn btn-read btn-seemore">
                        See all posts
                        <i class="fa fa-arrow-right"></i>
    
                    </a> 
                </div>
            </section>
            
        </main>
       
@endsection


