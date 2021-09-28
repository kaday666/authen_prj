@extends('layout.layout')




@section('content')
    <section class="create-sec" >
        <form action="{{route("updatePostById",$updata->id)}}" autocomplete="off" method="POST"
        enctype="multipart/form-data" class="form-create">
            <div class="form create" >
                @csrf
                    <div class="form__title form__login__email">
                        <label for="">Post title
                            <span>
                                @error('title')
                              ***  {{ $message}}
                                @enderror
                            </span>
                        </label>
                     
                        <input type="text" name="title"  autocomplete="off"
                        value="{{$updata->title}}">
                    </div>
                    <div class="form__content__intro form__login__email">
                        <label for="">Content Intro
                            <span>
                                @error('contentIntro')
                              * {{ $message}}
                                @enderror
                            </span>
                        </label>
                        <textarea name="contentIntro" 
                        >{{$updata->content_intro}}</textarea>
                    </div>
                    <div class="form__content__body form__login__email">
                        <label for="">Content body
                            <span>
                                @error('contentBody')
                              * {{ $message}}
                                @enderror
                            </span>
                        </label>
                        <textarea name="contentBody" 
                        >{{$updata->content_body}}</textarea>
                    </div>
                    <div class="form__content__footer form__login__email">
                        <label for="">Content footer</label>
                        <textarea name="contentFooter" 
                        >{{$updata->content_footer}}</textarea>
                    </div>


                    <div class="form__picture form__login__password"  >
                        <label for="">Picture fot post
                            <span>
                                @error('image')
                              * {{ $message}}
                                @enderror
                            </span>
                        </label>
                        <input type="file" name="image"  
                        value="{{$updata->image}}">
                    </div>

                    <button class="btn form-btn form__btn" type="submit">
                        Update Post
                    </button>
            </div>
        </form> 
    </section>
@endsection