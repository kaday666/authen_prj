<x-adminlayout>
    <table>
       
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Song name</th>
            <th scope="col">artist</th>
            <th scope="col">Song type</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($recoms as $recom)
          <tr>
            <td data-label="Id">{{$recom->id}}</td>
            <td data-label="song name">{{$recom->songname}}</td>
            <td data-label="song name">{{$recom->songartist}}</td>
            <td data-label="song type">{{$recom->songtype}}</td>
            <td data-label="update"><a href="{{route('admin.recommendUpdate',$recom->id)}}" class="btn-table btn-del" type="submit">Edit</a></td>
          </tr>
        @endforeach
      
        
        </tbody>
    </table>
    
    
    
    </x-adminlayout>
    
    

