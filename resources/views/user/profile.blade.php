@extends('layout.layout')




@section('content')
<section class="profile-sec">
    <form action="{{route('post_profile')}}" autocomplete="off" enctype="multipart/form-data"
    method="POST">
        <div class="form createpost-form profile" >
            @csrf
                <div class="form__email form__login__email">
                    <label for="">Change Name</label>
                    <input type="text" name="name"  autocomplete="off" 
                    value="{{auth()->user()->name}}">
                </div>
                <div class="form__email form__login__email">
                    <label for="">Change Email </label>
                    <input type="text" name="email"  autocomplete="off"
                    value="{{auth()->user()->email}}">
                </div>

                <div class="form__email form__login__email">
                    <label for="">Old password</label>
                    <input type="text" name="old_password"  autocomplete="off"
                    placeholder="{{session("error")}}">
                
                </div>
                <div class="form__email form__login__email">
                    <label for="">New password</label>
                    <input type="text" name="new_password"  autocomplete="off"
                    placeholder="{{session("error")}}">
                </div>
                
                <div class="form__password form__login__password"  >
                    <label for="">Change profile pics</label>
                    <input type="file" name="image"   autocomplete="off"
                    value="{{auth()->user()->image}}">
                    <img src="{{asset("img/profiles/".auth()->user()->image)}}" alt="">
                </div>
           
           
                <button class="btn form-btn" type="submit">
                    Update Profile
                </button>
        </div>
    </form> 
</section>
@endsection