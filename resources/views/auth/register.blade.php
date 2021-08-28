@extends('layout.layout')



@section('content')
<section class="register-sec">
    <form action="#" autocomplete="off">
        <div class="form register-form" >
          
                @csrf
                <div class="form__email form__login__email">
                    <label for="">Username</label>
                    <input type="text" name="name"  autocomplete="off">
                </div>
                <div class="form__email form__login__email">
                    <label for="">email</label>
                    <input type="email" name="email"  autocomplete="off">
                </div>
                <div class="form__password form__login__password"  >
                    <label for="">password</label>
                    <input type="text" name="password"  autocomplete="off">
                </div>
                <div class="form__password form__login__password"  >
                    <label for="">Choose your profile picture</label>
                    <input type="file" name="file"  autocomplete="off">
                </div>
                <button class="btn form-btn">
                    login
                </button>
        </div>
    </form>
       
    
    </section>
@endsection