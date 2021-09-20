@extends('layout.layout')



@section('content')
<section class="register-sec">
    <form action="{{route('post_register')}}" autocomplete="off" method="POST"
    enctype="multipart/form-data">
        <div class="form register-form" >
          
                @csrf
                <div class="form__email form__login__email">
                    <label for="">Username 
                
                    </label>
                    <input type="text" name="name"  autocomplete="off"
                    placeholder="@error('name') {{$message}}
                                @enderror">
                </div>
                <div class="form__email form__login__email">
                    <label for="">email</label>
                    <input type="email" name="email"  autocomplete="off"
                    placeholder="@error('email'){{$message}}
                @enderror">
                </div>
                <div class="form__password form__login__password"  >
                    <label for="password">password</label>
                    <input type="password" name="password"  autocomplete="off"
                    placeholder="@error('password'){{$message}}@enderror">
                </div>
                <div class="form__password form__login__password"  >
                     <label for="picture" value="">
                        Choose your profile picture
                     
                 
                     </label>
                    <input type="file" name="image" >
                </div>
                <button class="btn form-btn">
                    login
                </button>
        </div>
    </form>
       
    
    </section>
@endsection