@extends('layout.layout')




@section('content')
<section class="contant-sec">
    <div class="contant-form">
        <div  class="contant-form-img">
            <img src="{{asset('/img/contant.jpg')}}" alt="">
        </div>
        <form action="#" class="form createpost-form">
            <div class="form__email form__login__email">
                <label for="">User Name</label>
                <input type="text" name="title"  autocomplete="off">
            </div>
            <div class="form__email form__login__email">
                <label for="">Email </label>
                <input type="text" name="title"  autocomplete="off">
            </div>
            <div class="form__email form__login__email">
                <label for="">Content</label>
                <textarea name="content" ></textarea>
            </div>
            
            <button class="btn form-btn">
                Update
            </button>
        </form>
    </div>
</section>
@endsection