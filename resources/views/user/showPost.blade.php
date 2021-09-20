@extends('layout.layout')




@section('content')
<section class="showpost-sec">
    <div class="showpost">
        <img src="{{asset('img/posts/'.$post->image)}}" class="showpost-img">
        <div class="author">
            <div class="user">
                <img src="{{asset('img/profiles/'.$post->user->image)}}" class="user__img">
                <span class="user__name">
                    {{$post->user->name}}
                </span>
                <span class="user__time">
                        {{$post->created_at}}
                </span>
            </div>
            <div class="btns">
                <a href="#" class="btn btn-edit">
                    Edit
                </a>
                <a href="{{route("deletePostById",[$post->id,auth()->user()->id])}}" class="btn btn-delete">
                    Delete
                </a>
            </div>
        </div>
        <h1>{{$post->content_intro}}</h1>
        <p>{{$post->content_body}}</p>
        <p>{{$post->content_footer  }}</p>
    </div>
</section>
@endsection