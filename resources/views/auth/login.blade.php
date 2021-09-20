@extends('layout.layout')



@section('content')
        <section class="login-sec">
        <form action="{{route("post_login")}}" autocomplete="off" method="POST">
            <div class="form form-login" >
         
                    @csrf
                    {{session("error")}}
                    <div class="form__email form__login__email">
                        <label for="">email</label>
                        <input type="email" name="email"  autocomplete="off"
                        placeholder="@error('email'){{$message}}
                                    @enderror">
                    </div>
                    <div class="form__password form__login__password"  >
                        <label for="">password</label>
                        <input type="text" name="password"  autocomplete="off"
                        placeholder="@error('password'){{$message}}
                                    @enderror">
                    </div>
                    <button class="btn form-btn" type="submit">
                        login
                    </button>
            </div>
        </form>
           
        
        </section>
@endsection