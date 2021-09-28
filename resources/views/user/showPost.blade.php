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
                <a href="{{route("editPostById",[$post->id,auth()->user()->id])}}" class="btn btn-edit">
                    Edit
                </a>
                <a href="{{route("deletePostById",[$post->id,auth()->user()->id])}}" class="btn btn-delete">
                    Delete
                </a>
            </div>
        </div>
        <h1 class="pt">{{$post->title}}</h1>
        <p>{{$post->content_intro}}</p>
        <p>{{$post->content_body}}</p>
        <p>{{$post->content_footer  }}</p>
        <a href="{{route("posts")}}" class="btn btn-read">
            <i class="fa fa-arrow-left"></i>
            Back to the home
        </a>
    </div>
</section>
@endsection


