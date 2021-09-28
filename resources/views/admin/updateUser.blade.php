<x-adminlayout>
    <form action="{{route('admin.editUser',$users->id)}}" class="form form-contant"
    method="post">
    @csrf
        <div class="form__email form__login__email">
            <label for="">User Name
                <span> @error('username'){{$message}}@enderror</span>
            </label>
            @error('username'){{$message}}@enderror
            <input type="text" name="username"  autocomplete="off"
            value="{{$users->name}}">
        </div>
        <div class="form__email form__login__email">
            <label for="">Email 
                <span> @error('email'){{$message}}@enderror</span>
            </label>
           
            <input type="text" name="email"  autocomplete="off"
            value="{{$users->email}}">
        </div>
        <div class="form__email form__login__email">
            <label for="">is Admin
                <span> @error('email'){{$message}}@enderror</span>
            </label>
            <select name="isAdmin" id="" >
                <option value="1" {{$users->isAdmin ? "selected" : ""}}>True</option>
                <option value="0" {{$users->isAdmin ? "" : "selected"}}>False</option>
            </select>
        </div>
        <div class="form__email form__login__email">
            <label for="">is Premium
                <span> @error('email'){{$message}}@enderror</span>
            </label>
            <select name="isPre" id="">
                <option value="1" {{$users->isPremium ? "selected" : ""}}>True</option>
                <option value="0" {{$users->isPremium ? "" : "selected"}}>False</option>
            </select>
        </div>
        <button class="btn form-btn" type="submit">
            Update  
        </button>
    </form>
    
    



</x-adminlayout>
    
    