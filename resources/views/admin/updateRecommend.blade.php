<x-adminlayout>
    <form action="{{route('admin.recommendedit',$target->id)}}" class="form form-contant"
    method="POST"  enctype="multipart/form-data">
    @csrf
        <div class="form__email form__login__email">
            <label for="">Song name 
                <span> @error('songname'){{$message}}@enderror</span>
            </label>
            <input type="text"   autocomplete="off"
            value="{{$target->songname}}" name="songname">
        </div>
        <div class="form__email form__login__email">
            <label for="">artist
                <span> @error('songartist'){{$message}}@enderror</span>
            </label>
           
            <input type="text" name="songartist"  autocomplete="off"
            value="{{$target->songartist}}">
        </div>
        <div class="form__email form__login__email">
            <label for="">songtype
                <span> @error('songtype'){{$message}}@enderror</span>
            </label>
           
            <input type="text" name="songtype"  autocomplete="off"
            value="{{$target->songtype}}">
        </div>
            
        <div class="form__password form__login__password"  >
            <label for="">Change song pics</label>
            <input type="file" name="songimage"   autocomplete="off"
            value="">
            <img src="{{asset("img/recom/".$target->songimage)}}" alt="">
        </div>
        <button class="btn form-btn" type="submit">
            Update  
        </button>
    </form>
    
    



</x-adminlayout>
    
    