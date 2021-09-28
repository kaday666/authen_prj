<x-adminlayout>
<table>
   
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User name </th>
        <th scope="col">Email</th>
        <th scope="col">messages</th>
         <th scope="col">delate</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($messages as $message)
    <tr>
        <td data-label="Id">{{$message->id}}</td>
        <td data-label="username">{{$message->username}}</td>
        <td data-label="email">{{$message->email}}</td>
        <td data-label="message">{{$message->messages}}</td>
        <td data-label="Delete"><a href="{{route("deleteMessage",$message->id)}}" class="btn-table btn-del" type="submit">Delete</a></td>
      </tr>
    @endforeach
  
    
    </tbody>
</table>



</x-adminlayout>

