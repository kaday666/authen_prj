@extends('layout.layout')




@section('content')
<section class="profile-sec">
    <form action="#" autocomplete="off">
        <div class="form createpost-form" >
            @csrf
                <div class="form__email form__login__email">
                    <label for="">Change Name</label>
                    <input type="text" name="title"  autocomplete="off">
                </div>
                <div class="form__email form__login__email">
                    <label for="">Change Email </label>
                    <input type="text" name="title"  autocomplete="off">
                </div>

                <div class="form__email form__login__email">
                    <label for="">Old password</label>
                    <input type="text" name="title"  autocomplete="off">
                </div>
                <div class="form__email form__login__email">
                    <label for="">New password</label>
                    <input type="text" name="title"  autocomplete="off">
                </div>
                
                <div class="form__password form__login__password"  >
                    <label for="">Change profile pics</label>
                    <input type="file" name="photo"  autocomplete="off">
                </div>
           
           
                <button class="btn form-btn">
                    Update
                </button>
        </div>
    </form> 
</section>
@endsection