@extends('layout.layout')



@section('content')
        <section class="login-sec">
        <div class="intro">
            <h1><span>Bout Band</span> is the online 
             forumn where you can <span>post and read</span>
            about people thought on bands.</h1>
            <h3>
                first you need a account to 
                read and post so please consider
                <a href="{{route("login")}}">login</a>/
                <a href="{{route("register")}}">register</a>
            </h3>
        </div>




        <form action="{{route("post_login")}}" autocomplete="off" method="POST">
            <div class="form form-login" >
         
                    @csrf
                   
                    <div class="form__email form__login__email">
                        <label for="">email <span>@error('email'){{$message}}
                            @enderror
                                </span></label> 
                        <input type="email" name="email"  autocomplete="off"
                        placeholder=" {{session("error")}}">
                    </div>
                    <div class="form__password form__login__password"  >
                        <label for="">password <span>
                            @error('password'){{$message}}
                                    @enderror
                        </span>
                        </label>
                        <input type="text" name="password"  autocomplete="off"
                        placeholder=" {{session("error")}}">
                    </div>
                    <button class="btn form-btn" type="submit">
                        login
                    </button>
            </div>
        </form>
           
        
        </section>
@endsection