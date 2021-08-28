@extends('layout.layout')



@section('content')
        <section class="login-sec">
        <form action="#" autocomplete="off">
            <div class="form" >
              
                    @csrf
                    <div class="form__email form__login__email">
                        <label for="">email</label>
                        <input type="email" name="email"  autocomplete="off">
                    </div>
                    <div class="form__password form__login__password"  >
                        <label for="">password</label>
                        <input type="text" name="password"  autocomplete="off">
                    </div>
                    <button class="btn form-btn">
                        login
                    </button>
            </div>
        </form>
           
        
        </section>
@endsection