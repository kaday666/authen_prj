@extends('layout.layout')



@section('content')
<section class="register-sec pattern-cross-dots-xl">
    <form action="{{route('post_register')}}" autocomplete="off" method="POST"
    enctype="multipart/form-data">
        <div class="form register-form" >
          
                @csrf
                <div class="form__email form__login__email">
                    <label for="">Username <span>@error('name') {{$message}}
                        @enderror</span>
                    </label>
                    <input type="text" name="name"  autocomplete="off"
                    placeholder="at least 5 character"
                    value="{{old('name')}}">
                </div>
                <div class="form__email form__login__email">
                    <label for="">email
                        <span>
                            @error('email'){{$message}}@enderror
                        </span>
                    </label>
                    <input type="email" name="email"  autocomplete="off"
                    placeholder="example@gmail.com "
                    value="{{old('email')}}">
                </div>
                <div class="form__password form__login__password"  >
                    <label for="password">password <span>
                        @error('password'){{$message}}@enderror</span></label>
                    <input type="password" name="password"  autocomplete="off"
                    placeholder="at least 8 characters">
                </div>
                <div class="form__password form__login__password"  >
                    <label for="password">Confirm password <span>
                        @error('password_confirmation'){{$message}}@enderror</span></label>
                    <input type="password" name="password_confirmation"  autocomplete="off"
                    >
                </div>
                <div class="form__password form__login__password"  >
                     <label for="picture" value="">
                        Choose your profile picture
                     
                 
                     </label>
                    <input type="file" name="image" >
                </div>
                <button class="btn form-btn" type="submit">
                    Register
                </button>
        </div>
    </form>
       
    
    </section>
@endsection