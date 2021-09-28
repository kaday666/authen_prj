@extends('layout.layout')




@section('content')
<section class="contant-sec">
    <div class="contant-form">
        <div  class="contant-form-img">
            <img src="{{asset('/img/contant22.jpg')}}" alt="">
            <p >
                please use this form to infrom the
                <span>bug , feedbacks and to become premium member.</span>
                we will send you a payment.
            </p>
        </div>
        <form action="{{route('post_contantus')}}" class="form form-contant"
        method="post">
        @csrf
            <div class="form__email form__login__email">
                <label for="">User Name
                    <span> @error('username'){{$message}}@enderror</span>
                </label>
                @error('username'){{$message}}@enderror
                <input type="text" name="username"  autocomplete="off"
                value="{{auth()->user()->name}}">
            </div>
            <div class="form__email form__login__email">
                <label for="">Email 
                    <span> @error('email'){{$message}}@enderror</span>
                </label>
               
                <input type="text" name="email"  autocomplete="off"
                placeholder="youraccount@gmail.com">
            </div>
            <div class="form__email form__login__email">
                <label for="">Content
                    <span> @error('email'){{$message}}@enderror</span>
                </label>
                <textarea name="message" 
                placeholder="please type preminum in the text area to become preminum member.for bugs just say what you really want"></textarea>
            </div>
            <button class="btn form-btn" type="submit">
                Send
            </button>
        </form>
    </div>
</section>
@endsection