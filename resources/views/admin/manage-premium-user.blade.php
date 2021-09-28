<x-adminlayout>
<table>
   
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User name </th>
        <th scope="col">Email</th>
        <th scope="col">isAdmin</th>
        <th scope="col">isPreminum</th>
        <th scope="col">Update</th>
     <th scope="col">delate</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
      <td data-label="Account">{{$user->id}}</td>
      <td data-label="Due Date">{{$user->name}}</td>
      <td data-label="Amount">{{$user->email}}</td>
      <td data-label="Period"><b>{{$user->isAdmin == '0' ? "false" : "true"}}</b></td>
      <td data-label="Amount"><b>{{$user->isPremium == '0' ?  "false" : "true"}}</b></td>
      <td data-label="Period"><a href="{{route('admin.updateUser',$user->id)}}" class="btn-table btn-update">Update</a></td>
      <td data-label="Amount"><a href="{{route('admin.delUser',$user->id)}}" class="btn-table btn-del">Delete</a></td>
    </tr>
    @endforeach
     
    
    </tbody>
</table>
</x-adminlayout>