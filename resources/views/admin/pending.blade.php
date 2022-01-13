<x-adminlayout>

    <div class="kados">
        @foreach ($posts as $post)
        <div class="kado">
            <div class="kado__img">
                <img src="{{asset('img/posts/'.$post->image)}}" >
            </div>
            <div class="kado__body m-vsm">
                <h3 class="kado__header pt">{{$post->title}}</h3>
                <p class="kado__info m-sm">
                    {{Str::limit($post->content_intro,40)}}
                </p>
            </div>
            <div class="kado__footer">
                <div class="user">
                    {{-- <img src="{{asset('img/profiles/'.$post->user->image)}}" class="user__img"> --}}
                    <span class="user__name">
                        {{-- {{$post->user->name}} --}}
                    </span>
                    <span class="user__time">
                            {{$post->created_at->format('d-m-Y')}}
                    </span>

                </div>
                <a href="{{route("showPostById",["id"=>$post->id,"mode"=>"pending"])}}" class="btn btn-read ">
                    Read more
                </a>
            </div>
        </div>
     
        @endforeach
       

       
    </div>   
    
</x-adminlayout>
    
    

