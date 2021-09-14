@extends('layout.layout')




@section('content')
    <section class="create-sec">
        <form action="{{route("post")}}" autocomplete="off" method="POST">
            <div class="form createpost-form" >
                @csrf
                    <div class="form__email form__login__email">
                        <label for="">Post title</label>
                        <input type="text" name="title"  autocomplete="off">
                    </div>
                    <div class="form__email form__login__email">
                        <label for="">Content</label>
                        <textarea name="content" ></textarea>
                    </div>

                    <div class="form__password form__login__password"  >
                        <label for="">Picture fot post</label>
                        <input type="file" name="photo"  autocomplete="off">
                    </div>
                    <button class="btn form-btn">
                        Add Post
                    </button>
            </div>
        </form> 
    </section>
@endsection